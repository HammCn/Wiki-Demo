

## 获取指定数据表的数据模型 如 user

### 1) 请求地址

>/数据表/model
> 如 /user/model
### 2) 调用方式：HTTP post

### 3) 接口描述：

* 接口描述详情

### 4) 请求参数:



### 5) 请求返回结果:

```
{
    "code": 0,
    "msg": "success",
    "data": [
        {
            "model_field": "user_id",
            "model_desc": "UID",
            "model_null": "NO",
            "model_type": "int"
        },
        {
            "model_field": "user_account",
            "model_desc": "帐号",
            "model_null": "NO",
            "model_type": "varchar"
        },
        {
            "model_field": "user_password",
            "model_desc": "密码",
            "model_null": "NO",
            "model_type": "varchar"
        },
        {
            "model_field": "user_salt",
            "model_desc": "密码盐",
            "model_null": "YES",
            "model_type": "varchar"
        },
        {
            "model_field": "user_name",
            "model_desc": "用户昵称",
            "model_null": "NO",
            "model_type": "varchar"
        },
        {
            "model_field": "user_idcard",
            "model_desc": "身份证",
            "model_null": "YES",
            "model_type": "varchar"
        },
        {
            "model_field": "user_truename",
            "model_desc": "真实姓名",
            "model_null": "YES",
            "model_type": "varchar"
        },
        {
            "model_field": "user_email",
            "model_desc": "邮箱",
            "model_null": "YES",
            "model_type": "varchar"
        },
        {
            "model_field": "user_money",
            "model_desc": "余额",
            "model_null": "NO",
            "model_type": "decimal"
        },
        {
            "model_field": "user_group",
            "model_desc": "用户组",
            "model_null": "NO",
            "model_type": "int"
        },
        {
            "model_field": "user_wechat",
            "model_desc": "绑定的公众号",
            "model_null": "NO",
            "model_type": "int"
        },
        {
            "model_field": "user_wxapp",
            "model_desc": "绑定的小程序",
            "model_null": "NO",
            "model_type": "int"
        },
        {
            "model_field": "user_qq",
            "model_desc": "绑定的QQ",
            "model_null": "NO",
            "model_type": "int"
        },
        {
            "model_field": "user_accesstoken",
            "model_desc": "",
            "model_null": "NO",
            "model_type": "varchar"
        },
        {
            "model_field": "user_tokentime",
            "model_desc": "",
            "model_null": "NO",
            "model_type": "int"
        },
        {
            "model_field": "user_delete",
            "model_desc": "1被禁用",
            "model_null": "NO",
            "model_type": "int"
        },
        {
            "model_field": "user_createtime",
            "model_desc": "创建时间",
            "model_null": "NO",
            "model_type": "int"
        },
        {
            "model_field": "user_updatetime",
            "model_desc": "修改时间",
            "model_null": "NO",
            "model_type": "int"
        }
    ]
}
```


### 6) 请求返回结果参数说明:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|code||string|Y|-|
|msg||string|Y|-|
|data||string|Y|-|
|model_field||string|Y|-|
|model_desc||string|Y|-|
|model_null||string|Y|-|
|model_type||string|Y|-|

