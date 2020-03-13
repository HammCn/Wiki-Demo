## 需求描述

有域名 ```a.com``` 和 ```b.com``` , 其中 a.com域名为我方控制，b.com为对方控制，我方无权限操作b.com解析的服务器。

需要实现浏览器访问a.com域名时 , 地址栏依然显示 ```http://a.com``` , 但内容来源为b.com服务器提供，且部分内容需要进行替换处理。

## 挖坑思路

Nginx，这个不用说。
反向代理，这个也不用说，直接上demo:

```
server{
    listen 80;
    server_name a.com;
    location / {
        proxy_pass http://b.com/;
        proxy_http_version 1.1;
        proxy_set_header Upgrade $http_upgrade;
        proxy_set_header Host $host;
        proxy_set_header Connection "Upgrade";
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto  $scheme;
    }
}
```
到此，本以为已经完成，在部分场景中上面的配置确实已经完成了需求。
但当b.com服务器中存在虚拟站点，且b.com不为该服务器默认站点时，以上的反向代理将反向代理到b.com所在的服务器的默认站点上。

## 填坑思路
我们知道，服务器中的虚拟站点的实际IP都是一个，开通虚拟站点有两种方式：
1. 不同的域名访问 www.hamm.cn qr.hamm.cn
2. 不同的端口访问 hamm.cn:80 hamm.cn:443 hamm.cn:8080

这两种思路分别对应Nginx中的server_name和listen字段，如：

**反向代理中，我们使用了 ```proxy_set_header Host $host;``` 语句，将用户浏览器访问的域名```a.com```传递到了对方服务器。**

但对方此时并没有为我们的```a.com```域名创建对应的虚拟站点，所以我们访问时会显示```b.com```服务器上的默认站点。

**于是我们直接将$host变量改为固定的```b.com```，让b.com的虚拟站点以为来源域名确实是```b.com```**

```
server{
    listen 80;
    server_name a.com;
    location / {
        proxy_pass http://b.com/;
        proxy_http_version 1.1;
        proxy_set_header Upgrade $http_upgrade;
        proxy_set_header Host "b.com"; #修改了这里
        proxy_set_header Connection "Upgrade";
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto  $scheme;
    }
}
```
至此，这个坑填完了。

## 替换部分数据的坑

完成了反向代理，我们需要将```b.com```中的部分内容替换，如将 ```百度```替换成```谷歌```，我们需要一个Nginx模块：**subs_filter**

编译安装过程略~

完整配置demo:

```
server{
    listen 80;
    server_name a.com;
    location / {
        proxy_pass http://b.com/;
        proxy_http_version 1.1;
        proxy_set_header Upgrade $http_upgrade;
        proxy_set_header Host "b.com"; #修改了这里
        proxy_set_header Connection "Upgrade";
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto  $scheme;

        # 开始关键词替换
        subs_filter_types text/xml application/json text/html;
        subs_filter '百度' '谷歌';
    }
}
```
## 配置替换不生效的坑
如果配置完成后依然不生效，可能是gzip的锅，对方服务器进行了压缩，需要对方服务器关闭gzip或者在反代中添加

```
proxy_set_header Accept-Encoding "";
```

## 完结语
这是实际场景中碰到的一个坑，这里记录一下。
整体来说，踩坑的原因，还是对http网络请求中反向代理部分的理解不够透。
共勉。






