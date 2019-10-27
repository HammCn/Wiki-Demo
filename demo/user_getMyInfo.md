

## 获取我的个人资料

### 1) 请求地址

>/user/getMyInfo

### 2) 调用方式：HTTP post

### 3) 接口描述：

* 获取我的个人资料

### 4) 请求参数:


#### POST参数:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|access_token||string|Y|-|



### 5) 请求返回结果:

```
{
    "code": 0,
    "msg": "success",
    "data": {
        "user_id": 6,
        "user_invite": 0,
        "user_account": "18523749565",
        "user_name": "Hamm",
        "user_sex": 0,
        "user_head": "",
        "user_email": "",
        "user_qq": "",
        "user_wechat": "",
        "user_price": "0.00",
        "user_score": 0,
        "user_money": "0.00",
        "user_group": 2,
        "user_city": "",
        "user_viptime": 0,
        "my_invite_code": 2228,
        "group_name": "普通用户",
        "group_desc": "刚注册的用户都属于这个普通组",
        "user_level": 1
    }
}
```


### 6) 请求返回结果参数说明:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|code||string|Y|-|
|msg||string|Y|-|
|data||string|Y|-|
|————user_id|用户UID|string|Y|用户的主键ID|
|————user_invite|邀请我的人ID|string|Y|-|
|————user_account|手机号|string|Y|-|
|————user_name|昵称|string|Y|-|
|————user_sex|性别|string|Y|1男 其他女|
|————user_head|头像|string|Y|-|
|————user_email|邮箱|string|Y|-|
|————user_qq|QQ|string|Y|-|
|————user_wechat|微信|string|Y|-|
|————user_price|专家价格|string|Y|专家问答的价格 |
|————user_score|积分|string|Y|-|
|————user_money|金额|double 2|Y|-|
|————user_city|城市|string|Y|字符串 空格隔开|
|————user_viptime|>0是会员|string|Y|时间戳为会员到期时间|
|————user_group|用户组|string|Y|ID 普通2 其他特殊|
|————my_invite_code|我的邀请码|string|Y|-|
|————group_name|用户组名称|string|Y|-|
|————group_desc|用户组描述|string|Y|-|
|————user_level|等级|string|Y|-|


