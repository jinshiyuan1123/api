基于PHP5.4 快递查询DEMO
===============================================
雪狼
-----------------------------------------------

### 2824030364@qq.com 


+ 命令行工具当前版本 - V1.0.0.1

+ 上传日期 - 2019-9-21 10:27:00

+ 作者 - 雪狼

+ 邮箱 - 2824030364@qq.com                                                                                                                    



## 使用DEMO如下：


```
require 'vendor/Api.php';

// 使用DEMO
$obj = new Express();
$num = $obj->Obtain('536625023920');
echo '<pre>';
var_dump( $num );
````


### $this->Obtain()的参数说明：


``` 
$obj->Obtain(单号, 中文类型：如韵达快递);
当不输入中文类型的时候，将自动识别快递类型，准确率：90%
```
