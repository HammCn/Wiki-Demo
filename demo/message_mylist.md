## 获取系统消息列表接口

### 1) 请求地址

>/message/mylist

### 2) 调用方式：HTTP post

### 3) 接口描述：

* 获取系统消息列表接口，支持分页查询

### 4) 请求参数:


#### POST参数:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|access_token||string|Y|-|



### 5) 请求返回结果:

```
{
    "code": 0,
    "msg": "success",
    "data": {
        "total": 2,
        "per_page": 20,
        "current_page": 1,
        "data": [
            {
                "message_id": 2,
                "message_title": "你的问题审核被拒绝",
                "message_content": "你的问题<滚滚滚> 被拒绝审核，原因为：色情",
                "message_user": 0,
                "message_delete": 0,
                "message_createtime": 1569745828,
                "message_updatetime": 1569745828
            },
            {
                "message_id": 1,
                "message_title": "你的问题审核被拒绝",
                "message_content": "你的问题<滚滚滚> 被拒绝审核，原因为：色情",
                "message_user": 4,
                "message_delete": 0,
                "message_createtime": 1569745828,
                "message_updatetime": 1569745828
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
|————————message_id||string|Y|-|
|————————message_title||string|Y|-|
|————————message_content||string|Y|-|
|————————message_user|用户ID|string|Y|```0为公告```|
|————————message_delete||string|Y|-|
|————————message_createtime||string|Y|-|
|————————message_updatetime||string|Y|-|

