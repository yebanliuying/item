<?php
/**
 * 数据库操作类
 * User:yehuiwen
 * Date:15-03-27
 * Time:下午21:27
 */
!defined('IN_Q') && die('Access denied!');

class Database{
	
	//初始化
	public  function __construct(){
		mysql_connect($dbConfig['server'], $dbConfig['username'], $dbConfig['password']);
		mysql_select_db($dbConfig['dbname']);
		
		//设置编码
		mysql_query('set names ' . 'charset');
	}
	
	//ִ执行sql
	public function query($sql){
		return mysql_query($sql);
	}
	
	//获取一行数据
	public function getOne($sql){
		return mysql_fetch_assoc($this->query($sql . 'LIMIT 1'));
	}
	
	//获取多行数据
	public function getAll($sql){
		$rows = array();
		$result = $this->query($sql);
		while ($value = mysql_fetch_array($result, MYSQL_ASSOC)){
			$rows[] = $value;
		}
		return $rows;
	}
}