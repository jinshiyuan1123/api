<?php
/*
 +----------------------------------------------------------------------
 + Title        : 使用DEMO
 + Author       : 雪狼
 + Version      : V1.0.0.1
 + Initial-Time : 2019-9-20
 + Last-time    : 这个文件最后修改的时间 + 修改人的名称
 + Desc         : 
 +----------------------------------------------------------------------
*/
require 'vendor/Api.php';

# 使用DEMO
$obj = new Phone_ownership();
$num = $obj->Obtain(15992431688);
echo '<pre>';
var_dump( $num );