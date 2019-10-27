## 获取分类列表接口

### 1) 请求地址

>/classify/lists

### 2) 调用方式：HTTP post

### 3) 接口描述：

* 支持classify_type进行筛选的分类列表查询接口。

### 4) 请求参数:


#### POST参数:
|字段名称       |字段说明         |类型            |必填            |默认值     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|access_token||string|Y|-|
|order|排序 请传入默认值|string|Y|```classify_order desc```|
|classify_type|类型|string|N|```1文章``` ```2问题``` ```不传为所有```|



### 5) 请求返回结果:

```
{
    "code": 0,
    "msg": "success",
    "data": {
        "total": 8,
        "per_page": 20,
        "current_page": 1,
        "data": [
            {
                "classify_id": 8,
                "classify_name": "专家在线",
                "classify_type": 2,
                "classify_icon": "",
                "classify_order": 0,
                "classify_delete": 0,
                "classify_createtime": 0,
                "classify_updatetime": 0
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
|————————classify_id||string|Y|-|
|————————classify_name||string|Y|-|
|————————classify_type||string|Y|-|
|————————classify_icon||string|Y|-|
|————————classify_order||string|Y|-|
|————————classify_delete||string|Y|-|
|————————classify_createtime||string|Y|-|
|————————classify_updatetime||string|Y|-|

