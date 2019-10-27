## 获取文章列表

### 1) 请求地址

>/article/lists

### 2) 调用方式：HTTP post

### 3) 接口描述：

* 获取文章列表 支持order排序 支持keyword模糊搜索 支持传入字段精准搜索 支持分页

### 4) 请求参数:


#### POST参数:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|access_token||string|Y|-|
|keyword||string|N|-|
|order|字段名+asc/desc|string|N|如article_view desc|
|order|字段名+asc/desc|string|N|如article_view desc|
|article_classify|分类筛选|string|N|传入分类ID|



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
                "article_id": 1,
                "article_title": "阿斯蒂芬",
                "article_user": 0,
                "article_classify": 1,
                "article_text": "这是一条测试文章数据1",
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
|————data||string|Y|-|
|————————article_id||string|Y|-|
|————————article_title||string|Y|-|
|————————article_user||string|Y|-|
|————————article_classify||string|Y|-|
|————————article_text||string|Y|-|
|————————article_html||string|Y|-|
|————————article_price||string|Y|-|
|————————article_likes||string|Y|-|
|————————article_favorite||string|Y|-|
|————————article_view||string|Y|-|
|————————article_order||string|Y|-|
|————————article_delete||string|Y|-|
|————————article_createtime||string|Y|-|
|————————article_updatetime||string|Y|-|
|————————user_name|用户昵称|string|Y|-|
|————————user_head|用户头像|string|Y|-|
|————————user_viptime|会员到期时间戳|string|Y|-|
|————————user_score|会员积分|string|Y|-|
|————————user_level|用户等级|string|Y|-|
|————————group_name||string|Y|-|
|————————likes_id|点赞ID|string|Y|如果是```null``` 则未点赞|
|————————favorite_id|收藏ID|string|Y|如果是```null``` 则未收藏|

