## 我的积分历史记录接口

### 1) 请求地址

>/scorelog/mylist

### 2) 调用方式：HTTP post

### 3) 接口描述：

* 我的积分历史记录接口

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
                "scorelog_id": 3,
                "scorelog_user": 6,
                "scorelog_score": 20,
                "scorelog_title": "登录送积分",
                "scorelog_content": "登录送积分",
                "scorelog_delete": 0,
                "scorelog_createtime": 1569661511,
                "scorelog_updatetime": 1569661511
            },
            {
                "scorelog_id": 1,
                "scorelog_user": 6,
                "scorelog_score": 10,
                "scorelog_title": "登录送积分",
                "scorelog_content": "登录送积分",
                "scorelog_delete": 0,
                "scorelog_createtime": 1569660885,
                "scorelog_updatetime": 1569660885
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
|————————scorelog_id||string|Y|-|
|————————scorelog_user||string|Y|-|
|————————scorelog_score||string|Y|-|
|————————scorelog_title||string|Y|-|
|————————scorelog_content||string|Y|-|
|————————scorelog_delete||string|Y|-|
|————————scorelog_createtime||string|Y|-|
|————————scorelog_updatetime||string|Y|-|

