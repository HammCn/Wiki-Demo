## 获取城市信息列表接口

### 1) 请求地址

>/citys/lists

### 2) 调用方式：HTTP post

### 3) 接口描述：

* 获取城市信息列表接口

### 4) 请求参数:


#### POST参数:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|access_token||string|Y|-|
|citys_province|传入省份信息|string|Y|-|



### 5) 请求返回结果:

```
{
    "code": 0,
    "msg": "success",
    "data": {
        "total": 21,
        "per_page": 20,
        "current_page": 1,
        "data": [
            {
                "citys_id": 255,
                "citys_cid": "511700",
                "citys_city": "达州市",
                "citys_province": "510000",
                "citys_delete": 0,
                "citys_createtime": 0,
                "citys_updatetime": 0
            },
            {
                "citys_id": 252,
                "citys_cid": "511400",
                "citys_city": "眉山市",
                "citys_province": "510000",
                "citys_delete": 0,
                "citys_createtime": 0,
                "citys_updatetime": 0
            },
            {
                "citys_id": 251,
                "citys_cid": "511300",
                "citys_city": "南充市",
                "citys_province": "510000",
                "citys_delete": 0,
                "citys_createtime": 0,
                "citys_updatetime": 0
            },
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
|————————citys_id||string|Y|-|
|————————citys_cid|城市ID|string|Y|-|
|————————citys_city|城市名称|string|Y|-|
|————————citys_province|所属省份|string|Y|-|
|————————citys_delete||string|Y|-|
|————————citys_createtime||string|Y|-|
|————————citys_updatetime||string|Y|-|

