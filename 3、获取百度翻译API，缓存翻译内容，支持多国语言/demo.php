<?php
/*
 +----------------------------------------------------------------------
 + Title        : 使用DEMO
 + Author       : 雪狼
 + Version      : V1.0.0.1
 + Initial-Time : 2019-9-18
 + Last-time    : 2019-9-19 + 雪狼
 + Desc         : 
 +----------------------------------------------------------------------
*/
require 'vendor/Api.php';

# 使用DEMO
$obj = new Fanyi();
$res = $obj->Obtain('Little ox, I love you', '英语', '韩语');
echo '<pre>';
var_dump( $res );