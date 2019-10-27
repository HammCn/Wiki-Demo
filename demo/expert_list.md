
## 发布问题获取专家列表

### 1) 请求地址

>/question/getExpertList

### 2) 调用方式：HTTP post

### 3) 接口描述：

* 发布问题获取专家列表

### 4) 请求参数:


#### POST参数:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|access_token||string|Y|用户身份token|



### 5) 请求返回结果:

```
{
    "code": 0,
    "msg": "请求成功！",
    "data": {
        "expert_list": [
            {
                "user_id": 8,
                "user_price": 1,
                "user_account": "zhaunj1"
                "user_name": "专家1"
            },
            {
                "user_id": 9,
                "user_account": "专家2"
            },
            {
                "user_id": 10,
                "user_account": "专家3"
            },
            {
                "user_id": 11,
                "user_account": "专家4"
            }
        ],
        "question_price": 8
    }
}
```


### 6) 请求返回结果参数说明:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|code||string|Y|-|
|msg||string|Y|-|
|data||string|Y|-|
|————question_price||string|Y|专家提问价格|
|————expert_list||string|Y|-|
|————————user_id||string|Y|专家ID|
|————————user_name||string|Y|专家名称|
|————————user_price||string|Y|专家回答价格|

