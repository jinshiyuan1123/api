基于PHP5.4 居民身份证真实性查询DEMO
===============================================
雪狼
-----------------------------------------------

### 2824030364@qq.com 


+ 命令行工具当前版本 - V1.0.0.1

+ 上传日期 - 2019-9-20 15:04:00

+ 作者 - 雪狼

+ 邮箱 - 2824030364@qq.com  



## 使用DEMO如下：


```
require 'vendor/Api.php';

# 使用DEMO
$obj = new RealIDcard();
$num = $obj->Obtain('110226198501272116');
echo '<pre>';
var_dump( $num );
````


### 返回值说明：


``` 
address : 归属地
date    : 出生日期
sex     : 性别
msg     : 描述
```
