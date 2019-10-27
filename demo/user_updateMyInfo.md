## 修改我的个人资料接口

### 1) 请求地址

>/user/updateMyInfo

### 2) 调用方式：HTTP post

### 3) 接口描述：

* 修改我的个人资料接口，所有选项(除昵称,性别外)均为选填项，不传入参数不修改。

### 4) 请求参数:


#### POST参数:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|access_token||string|Y|-|
|user_name|昵称|string|Y|-|
|user_sex|性别|string|Y|传入1或0|
|attach_id|头像附件ID|string|N|从上传附件接口获得|
|user_truename|真实姓名|string|N|-|
|user_email|邮箱|string|N|-|
|user_wechat|微信|string|N|-|
|user_qq|QQ|string|N|-|
|user_city|城市|string|N|-|



### 5) 请求返回结果:

```
{
    "code": 0,
    "msg": "success",
    "data": []
}
```


### 6) 请求返回结果参数说明:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|code||string|Y|-|
|msg||string|Y|-|
|data||string|Y|-|

