## 获取问题的所有回答

### 1) 请求地址

>/answer/question

### 2) 调用方式：HTTP post

### 3) 接口描述：

* 获取指定问题ID的所有回答列表

### 4) 请求参数:


#### POST参数:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|access_token||string|Y|-|
|answer_question|问题ID|string|Y|-|



### 5) 请求返回结果:

```
{
    "code": 0,
    "msg": "success",
    "data": {
        "total": 1,
        "per_page": 20,
        "current_page": 1,
        "data": [
            {
                "answer_id": 1,
                "answer_question": 1,
                "answer_user": 2,
                "answer_text": "12345",
                "answer_html": "54321",
                "answer_likes": 0,
                "answer_favorite": 0,
                "answer_view": 0,
                "answer_delete": 0,
                "answer_createtime": 0,
                "answer_updatetime": 0,
                "user_name": "修改后的名字",
                "user_head": "/uploads/de/8ec4c37c0103f10accbc509ba4b3b4.png",
                "user_viptime": 0,
                "user_score":0,
                "user_level": 1,
                "group_name": "普通用户",
                "likes_id",null,
                "favorite_id":1,
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
|————total||string|Y|-|
|————per_page||string|Y|-|
|————current_page||string|Y|-|
|————data||object|Y|-|
|————————answer_id|回答编号|string|Y|-|
|————————answer_question|问题编号|string|Y|-|
|————————answer_user|回答人|string|Y|-|
|————————answer_text|摘要用|string|Y|-|
|————————answer_html|显示用|string|Y|-|
|————————answer_likes|点赞数|string|Y|-|
|————————answer_favorite|收藏数|string|Y|-|
|————————answer_view|阅读量|string|Y|-|
|————————answer_delete||string|Y|-|
|————————answer_createtime||string|Y|-|
|————————answer_updatetime||string|Y|-|
|————————user_name|用户昵称|string|Y|-|
|————————user_head|用户头像|string|Y|-|
|————————user_viptime|会员到期时间戳|string|Y|-|
|————————user_score|会员积分|string|Y|-|
|————————user_level|用户等级|string|Y|-|
|————————group_name||string|Y|-|
|————————likes_id|点赞ID|string|Y|如果是```null``` 则未点赞|
|————————favorite_id|收藏ID|string|Y|如果是```null``` 则未收藏|

