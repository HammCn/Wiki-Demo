

## 获取系统所有错误代码

### 1) 请求地址

>/system/errors

### 2) 调用方式：HTTP post/get

### 3) 接口描述：

* 获取系统所有错误代码

### 4) 请求参数:




### 5) 请求返回结果:

```
{
    "code": 0,
    "msg": "success",
    "data": [
        {
            "code": 0,
            "msg": "success"
        },
        {
            "code": 1,
            "msg": "error"
        },
        {
            "code": 301,
            "msg": "you must update your app"
        },
        {
            "code": 302,
            "msg": "you can update your app"
        },
        {
            "code": 401,
            "msg": "Need Relogin"
        },
        {
            "code": 403,
            "msg": "Forbidden"
        },
        {
            "code": 404,
            "msg": "Api Not Found"
        },
        {
            "code": 503,
            "msg": "Node Not Found"
        }
    ]
}
```


### 6) 请求返回结果参数说明:
|字段名称       |字段说明         |类型            |必填            |备注     |
| -------------|:--------------:|:--------------:|:--------------:| ------:|
|code||string|Y|-|
|msg||string|Y|-|
|data||string|Y|-|

