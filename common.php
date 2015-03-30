<?php
/**
 * 常用函数库 
 * User:yehuiwen
 * Date:15-03-27
 * Time:下午20:51
 */
!defined('IN_Q') && die('Access denied!');

//模版调用
function display($tpl, $T=array()){
	!empty($T) && extract($T);
	
	$tpl_file = 'template/' . $tpl . '.tpl.php';
	if (!include_once ($tpl_file)) {
		die('找不到' . $tpl . '模版文件。');
	}
	die();
}