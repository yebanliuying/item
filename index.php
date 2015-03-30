<?php
/**
 * 入口文件
 * User:yehuiwen
 * Date:15-03-27
 * Time:下午20:51
 */
//网站标识
define('IN_Q', true);	
define('IS_POST', $_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST) ? true : false);

//设置时区
date_default_timezone_set('Asia/Shanghai');	  

//设置编码
header('Content-type: text/html; charser=utf8');

include 'config.php';
include 'library/dataBase.class.php';

//初始化数据库
$mydb = new Database($dbConfig);

//控制器
$do = isset($_GET['do']) ? $_GET['do'] : 'index';
//模块
$ac = isset($_GET['ac']) ? $_GET['ac'] : 'index';

include 'common.php';

$do_list = array(
		'index'
);

!in_array($do, $do_list) && die('Module does not exist!');

require 'module/' . $do . '.php';