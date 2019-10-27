## 某问答项目API文档库使用前必读

### 1) 请求方式

* 本项目API接口统一采用JSON进行数据通信，所有数据交互时请严格在JSON相关约束下进行。
* Content-Type默认使用```application/x-www-form-urlencoded```，上传文件时使用```multipart/form-data```
* 项目涉及到的错误代码默认```0```为成功，其他请参照```错误代码表```或查看返回的```msg```字段
* 项目涉及到的请求参数必须携带```plat=iOS``` ```version=10203```两个标准公共参数。

### 2) 注意事项
* API根路径为 ```http://api.hamm.cn/api``` ，请求API时追加API地址即可。
* 图片等附件根路径为 ```https://api.hamm.cn/```，请求时追加相对路径```/uploads/*******```即可。