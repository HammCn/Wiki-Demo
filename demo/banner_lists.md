## 获取首页Banner和图标

### 1) 请求地址

>/banner/lists

### 2) 调用方式：HTTP post

### 3) 接口描述：

* 获取首页Banner和图标

### 4) 请求参数:

### 5) 请求返回结果:

```
{
    "code": 0,
    "msg": "success",
    "data": {
        "banner": [
            {
                "banner_type": 0,
                "banner_param": "/static/img/banner.jpg",
                "banner_img": "/static/img/banner.jpg",
            },
        ],
        "navbar": [
            {
                "navbar_title": "淘宝规则",
                "navbar_icon": "taobaoguize",
                "navbar_type": 4,
                "navbar_param": 1
            },
        ],
        "version":12123
    }
}
```


### 6) 请求返回结果参数说明:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|code||string|Y|-|
|msg||string|Y|-|
|data||string|Y|-|
|————banner|BANNER|string|Y|-|
|————————banner_type|类型|string|Y|-|
|————————banner_param|参数|string|Y|-|
|————————banner_img|图片|string|Y|-|
|————navbar||string|Y|-|
|————————navbar_title|标题|string|Y|-|
|————————navbar_icon|图标|string|Y|-|
|————————navbar_type|navbar类型|string|Y|-|
|————————nav_param|参数|string|Y|-|
|————version|最后修改时间|int|Y|```请根据此字段进行缓存刷新```|

### 7) type字段类型说明:
- Banner中

```
    ["type_value" => 0,"type_name"=>"无操作"],
    ["type_value" => 1,"type_name"=>"URL内部打开"],
    ["type_value" => 2,"type_name"=>"URL外部打开"],
    ["type_value" => 3,"type_name"=>"打开指定ID的问题"],
    ["type_value" => 4,"type_name"=>"打开指定ID的文章"],
    ["type_value" => 5,"type_name"=>"打开指定的Tabbar"],

```

- Navbar中

```
    ["type_value" => 0,"type_name"=>"无操作"],
    ["type_value" => 1,"type_name"=>"URL内部打开"],
    ["type_value" => 2,"type_name"=>"URL外部打开"],
    ["type_value" => 3,"type_name"=>"打开指定分类ID的问题"],
    ["type_value" => 4,"type_name"=>"打开指定分类ID的文章"],
    ["type_value" => 5,"type_name"=>"打开指定的Tabbar"],

```
- Navbar nav_type为5时，nav_param为tabbar索引，从0开始，首页为0，向右依次+1；

