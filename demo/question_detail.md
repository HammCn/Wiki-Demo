## 查询问题详情接口

### 1) 请求地址

>/question/detail

### 2) 调用方式：HTTP post

### 3) 接口描述：

* 根据question_id获取指定问题的详细内容

### 4) 请求参数:


#### POST参数:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|access_token||string|Y|-|
|question_id|问题ID|string|Y|-|



### 5) 请求返回结果:

```
{
    "code": 0,
    "msg": "success",
    "data": {
        "question_id": 1,
        "question_anonymous": 1,
        "question_title": "阿斯蒂芬",
        "question_user": 0,
        "question_classify": 1,
        "question_text": "这是一条测试问题数据",
        "question_html": "<h1>这是一条测试问题数据1</h1>",
        "question_price": 0,
        "question_likes": 0,
        "question_favorite": 0,
        "question_view": 0,
        "question_order": 0,
        "question_reason": "",
        "question_delete": 0,
        "question_createtime": 1569465664,
        "question_updatetime": 1569466660,
        "user_name": "修改后的名字",
        "user_head": "/uploads/de/8ec4c37c0103f10accbc509ba4b3b4.png",
        "user_viptime": 0,
        "user_score":0,
        "user_level": 1,
        "group_name": "普通用户",
        "question_attach": [
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
        "question_likes_info": {
            "likes_id": 2,
            "likes_user": 6,
            "likes_article": 0,
            "likes_question": 1,
            "likes_answer": 0,
            "likes_delete": 0,
            "likes_createtime": 1569486785,
            "likes_updatetime": 1569486785
        },
        "question_favorite_info": {
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
|code|错误代码|int|Y|-|
|msg|错误信息|string|Y|-|
|data||object|Y|-|
|————question_id|问题ID|string|Y|-|
|————question_anonymous|是否匿名|int|Y|```1匿名```|
|————question_title|标题|string|Y|-|
|————question_user|发布者UID|string|Y|-|
|————question_classify|所属分类|string|Y|-|
|————question_text|纯文本|string|Y|-|
|————question_html|HTML|string|Y|-|
|————question_price|价格 大于0需要会员或支付|string|Y|-|
|————question_likes|点赞量|string|Y|-|
|————question_favorite|收藏量|string|Y|-|
|————question_view|阅读量|string|Y|-|
|————question_order|排序编号|string|Y|-|
|————question_reason|审核失败原因|string|Y|-|
|————question_delete||string|Y|```1审核中``` ```0审核成功``` ```-1审核失败```|
|————question_createtime|创建时间|string|Y|-|
|————question_updatetime|修改时间|string|Y|-|
|————user_name|用户昵称|string|Y|-|
|————user_head|用户头像|string|Y|-|
|————user_viptime|会员到期时间戳|string|Y|-|
|————user_score|会员积分|string|Y|-|
|————user_level|用户等级|string|Y|-|
|————group_name||string|Y|-|
|————question_attach||array|Y|-|
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
|————question_likes_info|点赞信息|object|Y|如为空数组 则未操作 否则为已操作|
|————————likes_id||string|Y|-|
|————————likes_user||string|Y|-|
|————————likes_article||string|Y|-|
|————————likes_question||string|Y|-|
|————————likes_answer||string|Y|-|
|————————likes_delete||string|Y|-|
|————————likes_createtime||string|Y|-|
|————————likes_updatetime||string|Y|-|
|————question_favorite_info|收藏信息|object|Y|如为空数组 则未操作 否则为已操作|
|————————favorite_id||string|Y|-|
|————————favorite_user||string|Y|-|
|————————favorite_article||string|Y|-|
|————————favorite_question||string|Y|-|
|————————favorite_answer||string|Y|-|
|————————favorite_delete||string|Y|-|
|————————favorite_createtime||string|Y|-|
|————————favorite_updatetime||string|Y|-|
