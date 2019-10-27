## 给指定的内容点赞接口

### 1) 请求地址

> /likes/add

### 2) 调用方式：HTTP post

### 3) 接口描述：

* 参数中的 ```likes_question``` / ```likes_answer``` / ```likes_article``` 为被点赞内容的ID
* 如给文章编号为8的文章点赞 则传入 ```like_article``` 8 

### 4) 请求参数:


#### POST参数:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|access_token||string|Y|-|
|likes_question||string|N|点赞的问题ID 选填|
|likes_answer||string|N|点赞的回答ID 选填|
|likes_article||string|N|点赞的文章ID 选填|



### 5) 请求返回结果:

```
{
    "code": 0,
    "msg": "点赞成功",
    "data": []
}
```


### 6) 请求返回结果参数说明:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|code||string|Y|-|
|msg||string|Y|-|
|data||string|Y|-|
|————likes_id|点赞ID 取消点赞会用到|int|Y|-|

