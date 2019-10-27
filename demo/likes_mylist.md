## 获取我的点赞信息列表

### 1) 请求地址

>/likes/mylist

### 2) 调用方式：HTTP post

### 3) 接口描述：

* 获取我的点赞信息列表

### 4) 请求参数:


#### POST参数:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|access_token||string|Y|-|
|likes_type|类型|string|Y|```1文章``` ```2问题```|


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
                "likes_id": 3,
                "likes_user": 6,
                "likes_type": 2,
                "likes_article": 0,
                "likes_question": 27,
                "likes_answer": 0,
                "likes_delete": 0,
                "likes_createtime": 1569566234,
                "likes_updatetime": 1569566234,
                
                "question_id": 27,
                "question_title": "店铺地址",
                "question_user": 7,
                "question_text": "",
                "question_html": "",
                "question_classify": 4,
                "question_likes": 2,
                "question_favorite": 1,
                "question_view": 0,
                "question_price": 0,
                "question_delete": 0,
                "question_createtime": 1569548378,
                "question_updatetime": 0,
                
                "article_id": null,
                "article_title": null,
                "article_user": null,
                "article_classify": null,
                "article_text": null,
                "article_html": null,
                "article_price": null,
                "article_likes": null,
                "article_favorite": null,
                "article_view": null,
                "article_order": null,
                "article_delete": null,
                "article_createtime": null,
                "article_updatetime": null
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
|————data||array|Y|-|
|————————likes_id||string|Y|-|
|————————likes_user||string|Y|-|
|————————likes_type||int|Y|```1文章``` ```2问题``` ```3回答```|
|————————likes_article|```如果>0 点赞的是文章```|string|Y|-|
|————————likes_question|```如果>0 点赞的是问题```|string|Y|-|
|————————likes_answer|```如果>0 点赞是回答```|string|Y|-|
|————————likes_delete||string|Y|-|
|————————likes_createtime||string|Y|-|
|————————likes_updatetime||string|Y|-|
|———————|———————|———————|———————|———————|
|question_id||string|Y|-|
|question_title||string|Y|-|
|question_user||string|Y|-|
|question_text||string|Y|-|
|question_html||string|Y|-|
|question_classify||string|Y|-|
|question_likes||string|Y|-|
|question_favorite||string|Y|-|
|question_view||string|Y|-|
|question_price||string|Y|-|
|question_delete||string|Y|-|
|question_createtime||string|Y|-|
|question_updatetime||string|Y|-|
|———————|———————|———————|———————|———————|
|article_id||string|Y|-|
|article_title||string|Y|-|
|article_user||string|Y|-|
|article_classify||string|Y|-|
|article_text||string|Y|-|
|article_html||string|Y|-|
|article_price||string|Y|-|
|article_likes||string|Y|-|
|article_favorite||string|Y|-|
|article_view||string|Y|-|
|article_order||string|Y|-|
|article_delete||string|Y|-|
|article_createtime||string|Y|-|
|article_updatetime||string|Y|-|

