## 获取区县列表接口

### 1) 请求地址

>/areas/lists

### 2) 调用方式：HTTP post

### 3) 接口描述：

* 获取区县列表接口

### 4) 请求参数:


#### POST参数:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|access_token||string|Y|-|
|areas_citys|传入城市ID|string|Y|-|



### 5) 请求返回结果:

```
{
    "code": 0,
    "msg": "success",
    "data": {
        "total": 7,
        "per_page": 20,
        "current_page": 1,
        "data": [
            {
                "areas_id": 2360,
                "areas_aid": "511421",
                "areas_area": "仁寿县",
                "areas_citys": "511400",
                "areas_delete": 0,
                "areas_createtime": 0,
                "areas_updatetime": 0
            },
            {
                "areas_id": 2359,
                "areas_aid": "511402",
                "areas_area": "东坡区",
                "areas_citys": "511400",
                "areas_delete": 0,
                "areas_createtime": 0,
                "areas_updatetime": 0
            },
            {
                "areas_id": 2358,
                "areas_aid": "511401",
                "areas_area": "市辖区",
                "areas_citys": "511400",
                "areas_delete": 0,
                "areas_createtime": 0,
                "areas_updatetime": 0
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
|————————areas_id||string|Y|-|
|————————areas_aid|区县ID|string|Y|-|
|————————areas_area|区县名称|string|Y|-|
|————————areas_citys|所属城市|string|Y|-|
|————————areas_delete||string|Y|-|
|————————areas_createtime||string|Y|-|
|————————areas_updatetime||string|Y|-|

