## 给指定的内容收藏接口

### 1) 请求地址

> /favorite/add

### 2) 调用方式：HTTP post

### 3) 接口描述：

* 参数中的 ```favorite_question``` / ```favorite_answer``` / ```favorite_article``` 为被收藏内容的ID
* 如给文章编号为8的文章收藏 则传入 ```like_article``` 8 

### 4) 请求参数:


#### POST参数:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|access_token||string|Y|-|
|favorite_question||string|N|收藏的问题ID 选填|
|favorite_answer||string|N|收藏的回答ID 选填|
|favorite_article||string|N|收藏的文章ID 选填|



### 5) 请求返回结果:

```
{
    "code": 0,
    "msg": "收藏成功",
    "data": []
}
```


### 6) 请求返回结果参数说明:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|code||string|Y|-|
|msg||string|Y|-|
|data||string|Y|-|
|————favorite_id|收藏ID 取消收藏会用到|int|Y|-|

