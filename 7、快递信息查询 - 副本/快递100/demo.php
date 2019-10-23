<?php
/*
 +----------------------------------------------------------------------
 + Title        : 使用DEMO
 + Author       : 雪狼
 + Version      : V1.0.0.1
 + Initial-Time : 2019-9-20
 + Last-time    : 2019-9-21 + 雪狼
 + Desc         : 
 +----------------------------------------------------------------------
*/
require 'vendor/Api.php';

# 使用DEMO
$obj = new Express();
$num = $obj->Obtain('536625023920');
echo '<pre>';
var_dump( $num );