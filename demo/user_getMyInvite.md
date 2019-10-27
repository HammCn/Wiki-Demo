## 获取我的邀请列表

### 1) 请求地址

>/user/getMyInvite

### 2) 调用方式：HTTP post

### 3) 接口描述：

* 获取我的邀请列表，支持分页，筛选。

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
        "total": 4,
        "per_page": 20,
        "current_page": 1,
        "data": [
            {
                "user_id": 7,
                "user_name": "店铺的",
                "user_head": "/uploads/32/efbf4d99cf1cce57bfc72f0d1a1fc5.png",
                "user_score": 1120,
                "user_viptime": 0,
                "user_city": "浙江 丽水 莲都区",
                "user_group": 1,
                "user_sex": 0
            },
            {
                "user_id": 4,
                "user_name": "bailu看看啊啊",
                "user_head": "/uploads/5c/6ade9d596673fab4961c1515898b19.jpeg",
                "user_score": 880,
                "user_viptime": 0,
                "user_city": "河北省 秦皇岛市 海港区",
                "user_group": 1,
                "user_sex": 1
            }
        ]
    }
}
```


### 6) 请求返回结果参数说明:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|code||string|Y|-|
|msg||string|Y|-|
|data||string|Y|-|
|————total|```我的邀请总数```|string|Y|-|
|————per_page||string|Y|-|
|————current_page||string|Y|-|
|————data||string|Y|-|
|————————user_id||string|Y|-|
|————————user_name||string|Y|-|
|————————user_head||string|Y|-|
|————————user_score||string|Y|-|
|————————user_viptime||string|Y|-|
|————————user_city||string|Y|-|
|————————user_group||string|Y|-|
|————————user_sex||string|Y|```1男 其他女```|

