<?php
/**
 * 首页控制器
 * User:yehuiwen
 * Date:15-03-27
 * Time:下午20:52
 */
!defined('IN_Q') && die('Access denied!');

$ac_list = array(
	'index'
);

!in_array($ac, $ac_list) && die('Module does not exist!');

if ($ac == 'index') {
	display('index');
}