
## 发布问题与修改问题

### 1) 请求地址

> /question/publish

### 2) 调用方式：HTTP post

### 3) 接口描述：

* 发布问题与修改问题

### 4) 请求参数:


#### POST参数:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|access_token||string|Y|用户身份token|
|question_id||string|N|```如果是修改问题，此项必传！！！```|
|question_title||string|Y|问题标题|
|question_text||string|N|问题内容|
|expert_id||string|Y|专家ID，普通提问专家ID为0|
|question_classify||string|Y|提问类型，默认 4|
|question_attach||string|Y|图片附件 用逗号分隔 '1,2,3'|
|question_tags||string|Y|标签 用逗号分隔 淘宝,天猫,京东|
|question_anonymous||int|N|```是否匿名 1匿名 0正常```|



### 5) 请求返回结果:

```
{
    "code": 0,
    "msg": "提问成功！",
    "data": []
}
```


### 6) 请求返回结果参数说明:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|code||string|Y|-|
|msg||string|Y|-|
|data||string|Y|-|

