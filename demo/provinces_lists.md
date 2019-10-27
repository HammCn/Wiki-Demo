## 获取省份信息列表接口

### 1) 请求地址

>/provinces/lists

### 2) 调用方式：HTTP post

### 3) 接口描述：

* 获取省份信息列表接口

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
        "total": 34,
        "per_page": 20,
        "current_page": 1,
        "data": [
            {
                "provinces_id": 34,
                "provinces_pid": 820000,
                "provinces_province": "澳门特别行政区",
                "provinces_delete": 0,
                "provinces_createtime": 0,
                "provinces_updatetime": 0
            },
            {
                "provinces_id": 33,
                "provinces_pid": 810000,
                "provinces_province": "香港特别行政区",
                "provinces_delete": 0,
                "provinces_createtime": 0,
                "provinces_updatetime": 0
            },
            {
                "provinces_id": 16,
                "provinces_pid": 410000,
                "provinces_province": "河南省",
                "provinces_delete": 0,
                "provinces_createtime": 0,
                "provinces_updatetime": 0
            },
            {
                "provinces_id": 15,
                "provinces_pid": 370000,
                "provinces_province": "山东省",
                "provinces_delete": 0,
                "provinces_createtime": 0,
                "provinces_updatetime": 0
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
|————————provinces_id||string|Y|-|
|————————provinces_pid|地区ID|string|Y|-|
|————————provinces_province|地区名称|string|Y|-|
|————————provinces_delete||string|Y|-|
|————————provinces_createtime||string|Y|-|
|————————provinces_updatetime||string|Y|-|

