## 答手征集注册接口

### 1) 请求地址

>/answerer/add

### 2) 调用方式：HTTP post

### 3) 接口描述：

* 答手征集注册接口

### 4) 请求参数:


#### POST参数:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|access_token||string|Y|-|
|answerer_name|姓名|string|Y|-|
|answerer_worktime|工作年限|string|Y|-|
|answerer_worktype|行业|string|Y|-|
|answerer_phone|手机|string|Y|-|
|answerer_qq|QQ|string|Y|-|
|answerer_wechat|微信|string|Y|-|
|answerer_email|邮箱|string|Y|-|
|answerer_suggest|平台建议|string|Y|-|



### 5) 请求返回结果:

```
{
    "code": 1,
    "msg": "姓名必须填写！"
}
```


### 6) 请求返回结果参数说明:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|code||string|Y|-|
|msg||string|Y|-|

