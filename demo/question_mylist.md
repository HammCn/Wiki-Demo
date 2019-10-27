## 获取我的问题列表

### 1) 请求地址

>/question/mylist

### 2) 调用方式：HTTP post

### 3) 接口描述：

* 获取我的问题列表 支持关键词查询与自定义筛选

### 4) 请求参数:


#### POST参数:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|access_token||string|Y|-|
|keyword|关键词|string|N|-|
|order|字段名+asc/desc|string|N|如```question_view desc```|
|question_classify|分类筛选|string|N|传入分类ID|



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
                "question_id": 1,
                "question_anonymous": 1,
                "question_title": "谁是最可爱的人",
                "question_user": 6,
                "question_text": "谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人",
                "question_html": "谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人谁是最可爱的人",
                "question_classify": 1,
                "question_likes": 0,
                "question_favorite": 0,
                "question_view": 0,
                "question_price": 0,
                "question_reason": "",
                "question_delete": 0,
                "question_createtime": 0,
                "question_updatetime": 0,
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
|————————question_id||string|Y|-|
|————————question_anonymous|是否匿名|int|Y|```1匿名```|
|————————question_title||string|Y|-|
|————————question_user||string|Y|-|
|————————question_text||string|Y|-|
|————————question_html||string|Y|-|
|————————question_classify||string|Y|-|
|————————question_like||string|Y|-|
|————————question_dislike||string|Y|-|
|————————question_view||string|Y|-|
|————————question_price||string|Y|-|
|————————question_reason|审核失败原因|string|Y|-|
|————————question_delete||string|Y|```1审核中``` ```0审核成功``` ```-1审核失败```|
|————————question_createtime||string|Y|-|
|————————question_updatetime||string|Y|-|
|————————user_name|用户昵称|string|Y|-|
|————————user_head|用户头像|string|Y|-|
|————————user_viptime|会员到期时间戳|string|Y|-|
|————————user_score|会员积分|string|Y|-|
|————————user_level|用户等级|string|Y|-|
|————————group_name||string|Y|-|
|————————likes_id|点赞ID|string|Y|如果是```null``` 则未点赞|
|————————favorite_id|收藏ID|string|Y|如果是```null``` 则未收藏|

