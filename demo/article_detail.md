## 查询文章详情接口

### 1) 请求地址

>/article/detail

### 2) 调用方式：HTTP post

### 3) 接口描述：

* 根据article_id获取指定文章的详细内容

### 4) 请求参数:


#### POST参数:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|access_token||string|Y|-|
|article_id|文章ID|string|Y|-|



### 5) 请求返回结果:

```
{
    "code": 0,
    "msg": "success",
    "data": {
        "article_id": 1,
        "article_title": "阿斯蒂芬",
        "article_user": 0,
        "article_classify": 1,
        "article_text": "这是一条测试文章数据",
        "article_html": "<h1>这是一条测试文章数据1</h1>",
        "article_price": 0,
        "article_likes": 0,
        "article_favorite": 0,
        "article_view": 0,
        "article_order": 0,
        "article_delete": 0,
        "article_createtime": 1569465664,
        "article_updatetime": 1569466660,
        "user_name": "修改后的名字",
        "user_head": "/uploads/de/8ec4c37c0103f10accbc509ba4b3b4.png",
        "user_viptime": 0,
        "user_score":0,
        "user_level": 1,
        "group_name": "普通用户",
        "article_attach": [
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
        "article_likes_info": {
            "likes_id": 2,
            "likes_user": 6,
            "likes_article": 0,
            "likes_question": 1,
            "likes_answer": 0,
            "likes_delete": 0,
            "likes_createtime": 1569486785,
            "likes_updatetime": 1569486785
        },
        "article_favorite_info": {
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
|————article_id|文章ID|string|Y|-|
|————article_title|标题|string|Y|-|
|————article_user|发布者UID|string|Y|-|
|————article_classify|所属分类|string|Y|-|
|————article_text|纯文本|string|Y|-|
|————article_html|HTML|string|Y|-|
|————article_price|价格 大于0需要会员或支付|string|Y|-|
|————article_likes|点赞量|string|Y|-|
|————article_favorite|收藏量|string|Y|-|
|————article_view|阅读量|string|Y|-|
|————article_order|排序编号|string|Y|-|
|————article_delete|状态 1被禁用 0正常|string|Y|-|
|————article_createtime|创建时间|string|Y|-|
|————article_updatetime|修改时间|string|Y|-|
|————user_name|用户昵称|string|Y|-|
|————user_head|用户头像|string|Y|-|
|————user_viptime|会员到期时间戳|string|Y|-|
|————user_score|会员积分|string|Y|-|
|————user_level|用户等级|string|Y|-|
|————group_name||string|Y|-|
|————article_attach||array|Y|-|
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
|————article_likes_info|点赞信息|object|Y|如为空数组 则未操作 否则为已操作|
|————————likes_id||string|Y|-|
|————————likes_user||string|Y|-|
|————————likes_article||string|Y|-|
|————————likes_question||string|Y|-|
|————————likes_answer||string|Y|-|
|————————likes_delete||string|Y|-|
|————————likes_createtime||string|Y|-|
|————————likes_updatetime||string|Y|-|
|————article_favorite_info|收藏信息|object|Y|如为空数组 则未操作 否则为已操作|
|————————favorite_id||string|Y|-|
|————————favorite_user||string|Y|-|
|————————favorite_article||string|Y|-|
|————————favorite_question||string|Y|-|
|————————favorite_answer||string|Y|-|
|————————favorite_delete||string|Y|-|
|————————favorite_createtime||string|Y|-|
|————————favorite_updatetime||string|Y|-|
