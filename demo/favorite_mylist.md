## 获取我的收藏信息列表

### 1) 请求地址

>/favorite/mylist

### 2) 调用方式：HTTP post

### 3) 接口描述：

* 获取我的收藏信息列表

### 4) 请求参数:


#### POST参数:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|access_token||string|Y|-|
|favorite_type|类型|string|Y|```1文章``` ```2问题``` ```3回答```|


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
                "favorite_id": 3,
                "favorite_user": 6,
                "favorite_type": 2,
                "favorite_article": 0,
                "favorite_question": 27,
                "favorite_answer": 0,
                "favorite_delete": 0,
                "favorite_createtime": 1569566234,
                "favorite_updatetime": 1569566234,
                
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
                
                
                "answer_id": 2790,
                "answer_question": 37,
                "answer_user": 28,
                "answer_text": "",
                "answer_html": "",
                "answer_likes": 0,
                "answer_favorite": 1,
                "answer_view": 0,
                "answer_delete": 0,
                "answer_createtime": 1568676961,
                "answer_updatetime": 1566496630
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
|————————favorite_id||string|Y|-|
|————————favorite_user||string|Y|-|
|————————favorite_type||int|Y|```1文章``` ```2问题``` ```3回答```|
|————————favorite_article|```如果>0 是文章```|string|Y|-|
|————————favorite_question|```如果>0 是问题```|string|Y|-|
|————————favorite_answer|```如果>0 是回答```|string|Y|-|
|————————favorite_delete||string|Y|-|
|————————favorite_createtime||string|Y|-|
|————————favorite_updatetime||string|Y|-|
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
|answer_id||string|Y|-|
|answer_question||string|Y|-|
|answer_user||string|Y|-|
|answer_text||string|Y|-|
|answer_html||string|Y|-|
|answer_likes||string|Y|-|
|answer_favorite||string|Y|-|
|answer_view||string|Y|-|
|answer_delete||string|Y|-|
|answer_createtime||string|Y|-|
|answer_updatetime||string|Y|-|

