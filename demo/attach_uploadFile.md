
## 上传文件

### 1) 请求地址

>/api/attach/uploadFile

### 2) 调用方式：HTTP post

### 3) 接口描述：

* 上传文件

### 4) 请求参数:


#### POST参数:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|file||file|Y|文件|
|extend||扩展字段|N|请求标记，原样返回|


### 5) 请求返回结果:

```
{
    "code": 0,
    "msg": "上传成功！",
    "data": {
        "attach_id": "3",
        "attach_path": "/upload/didoqhgowqg.png",
        "attach_type": "png",
        "attach_size": "12421",
        "attach_delete": "0",
        "attach_createtime": "1213133",
        "attach_updatetime": "1213133",
        "extend":"Hello World"
    }
}
```

### 6) 请求返回结果参数说明:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|code||string|Y|-|
|msg||string|Y|-|
|data||string|Y|-|
|————attach_id||string|Y|附件ID 提问接口拼接提交用|
|————attach_path||string|Y|文件地址|
|————attach_type||string|Y|文件后缀|
|————attach_size||string|Y|文件大小|
|————extend||string|Y|请求标记，原样返回|

