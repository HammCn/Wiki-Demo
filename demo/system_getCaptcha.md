## 获取图形验证码


### 1) 请求地址

>/system/getcaptcha

### 2) 调用方式：HTTP get

### 3) 接口描述：

* 接口描述详情

### 4) 请求参数:


### 5) 请求返回结果:

```
{
    "code": 0,
    "msg": "success",
    "data": {
        "token": "token",
        "img": "base64图片流"
    }
}
```


### 6) 请求返回结果参数说明:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|code||string|Y|-|
|msg||string|Y|-|
|data||object|Y|-|
|data.token||string|Y|-|
|data.img||string|Y|-|

