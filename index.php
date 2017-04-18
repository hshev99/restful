<?php
/**
 * Created by PhpStorm.
 * User: hshev99
 * Date: 2017/4/18
 * Time: 下午2:49
 */
//数据操作类
require('Request.php');
//输出类
require('Response.php');
//获取数据
$data = Request::getRequest();
//输出结果
Response::sendResponse($data);