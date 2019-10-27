

## 获取热搜词接口

### 1) 请求地址

> /hotkey/lists

### 2) 调用方式：HTTP post

### 3) 接口描述：

* 获取热搜词接口

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
        "total": 3,
        "per_page": 20,
        "current_page": 1,
        "data": [
            {
                "hotkey_id": 1,
                "hotkey_keyword": "误区",
                "hotkey_count": 2,
                "hotkey_delete": 0,
                "hotkey_createtime": 0,
                "hotkey_updatetime": 0
            },
            {
                "hotkey_id": 2,
                "hotkey_keyword": "首先尽量",
                "hotkey_count": 0,
                "hotkey_delete": 0,
                "hotkey_createtime": 0,
                "hotkey_updatetime": 0
            },
            {
                "hotkey_id": 3,
                "hotkey_keyword": "店铺因虚假",
                "hotkey_count": 0,
                "hotkey_delete": 0,
                "hotkey_createtime": 0,
                "hotkey_updatetime": 0
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
|————————hotkey_id||string|Y|-|
|————————hotkey_keyword||string|Y|-|
|————————hotkey_count||string|Y|-|
|————————hotkey_delete||string|Y|-|
|————————hotkey_createtime||string|Y|-|
|————————hotkey_updatetime||string|Y|-|

