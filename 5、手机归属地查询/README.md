基于PHP5.4 手机归属地查询DEMO
===============================================
雪狼
-----------------------------------------------

### 2824030364@qq.com 


+ 命令行工具当前版本 - V1.0.0.1

+ 上传日期 - 2019-9-20 12:54:00

+ 作者 - 雪狼

+ 邮箱 - 2824030364@qq.com                                                                                                                    

+ 本DEMO调用淘宝API




## 使用DEMO如下：


```
# 使用DEMO
$obj = new Phone_ownership();
$num = $obj->Obtain(15992431688);
echo '<pre>';
var_dump( $num );
````


### 返回值说明：


``` 
mts       ：手机号前7位数
province  ：归属地(省)
catName   : 运营商
carrier   ：归属地运营商
telString ：手机号
areaVid   ：无用参数
ispVid    ：无用参数

```
