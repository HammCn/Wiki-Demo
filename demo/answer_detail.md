## 获取指定的回答内容详情接口

### 1) 请求地址

>/answer/detail

### 2) 调用方式：HTTP post

### 3) 接口描述：

* 获取指定的回答内容详情接口

### 4) 请求参数:


#### POST参数:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|access_token||string|Y|-|
|answer_id|回答的编号ID|string|Y|-|



### 5) 请求返回结果:

```
{
    "code": 0,
    "msg": "success",
    "data": {
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
        "answer_attach": [
            {
                "attach_id": 18,
                "attach_user": 1,
                "attach_path": "/uploads/7f\\5543d2357976f5dc615e537e7b9dc2.png",
                "attach_type": "png",
                "attach_size": 1603980,
                "attach_question": 0,
                "attach_answer": 0,
                "attach_article": 0,
                "attach_delete": 0,
                "attach_createtime": 1569469014,
                "attach_updatetime": 1569469014
            }
        ],
        "answer_likes_info": {
            "likes_id": 2,
            "likes_user": 6,
            "likes_article": 0,
            "likes_question": 1,
            "likes_answer": 0,
            "likes_delete": 0,
            "likes_createtime": 1569486785,
            "likes_updatetime": 1569486785
        },
        "answer_favorite_info": {
            "favorite_id": 1,
            "favorite_user": 6,
            "favorite_article": 0,
            "favorite_question": 1,
            "favorite_answer": 0,
            "favorite_delete": 0,
            "favorite_createtime": 0,
            "favorite_updatetime": 0
        }
    }
}
```


### 6) 请求返回结果参数说明:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|code||string|Y|-|
|msg||string|Y|-|
|data||string|Y|-|
|————answer_id|回答ID|string|Y|-|
|————answer_question|问题ID|string|Y|-|
|————answer_user|发布人|string|Y|-|
|————answer_text|摘要用|string|Y|-|
|————answer_html|展示用|string|Y|-|
|————answer_likes|点赞数|string|Y|-|
|————answer_favorite|收藏数|string|Y|-|
|————answer_view|阅读量|string|Y|-|
|————answer_delete||string|Y|-|
|————answer_createtime||string|Y|-|
|————answer_updatetime||string|Y|-|
|————answer_attach||array|Y|-|
|————user_name|用户昵称|string|Y|-|
|————user_head|用户头像|string|Y|-|
|————user_viptime|会员到期时间戳|string|Y|-|
|————user_score|会员积分|string|Y|-|
|————user_level|用户等级|string|Y|-|
|————group_name||string|
|————————attach_id||string|Y|-|
|————————attach_user||string|Y|-|
|————————attach_path||string|Y|-|
|————————attach_type||string|Y|-|
|————————attach_size||string|Y|-|
|————————attach_question||string|Y|-|
|————————attach_answer||string|Y|-|
|————————attach_article||string|Y|-|
|————————attach_delete||string|Y|-|
|————————attach_createtime||string|Y|-|
|————————attach_updatetime||string|Y|-|
|————answer_likes_info|点赞信息|object|Y|如为空数组 则未操作 否则为已操作|
|————————likes_id||string|Y|-|
|————————likes_user||string|Y|-|
|————————likes_article||string|Y|-|
|————————likes_question||string|Y|-|
|————————likes_answer||string|Y|-|
|————————likes_delete||string|Y|-|
|————————likes_createtime||string|Y|-|
|————————likes_updatetime||string|Y|-|
|————answer_favorite_info|收藏信息|object|Y|如为空数组 则未操作 否则为已操作|
|————————favorite_id||string|Y|-|
|————————favorite_user||string|Y|-|
|————————favorite_article||string|Y|-|
|————————favorite_question||string|Y|-|
|————————favorite_answer||string|Y|-|
|————————favorite_delete||string|Y|-|
|————————favorite_createtime||string|Y|-|
|————————favorite_updatetime||string|Y|-|


