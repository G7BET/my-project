<?php
$dbhost = "localhost"; //数据库地址 
$dbuser = "xianggang"; //MySql数据库用户名 
$dbpass = "DCNNik6NsTKZE2JT"; //MySql数据库密码 
$dbname = "xianggang"; //MySql数据库名称
$dbcharset = "utf8"; //数据库读写所采用的编码,utf8或gb2312

if(empty($dbname)){
	echo '<script>alert("程序安装有错需要技术支持");window.location="https://www.492130.com";</script>';
}

require_once 'db_function.php';	//数据库操作类
require_once 'function.php';   //引用函数
 



/*------------------------------------------------
 * 数据库连接
 *-----------------------------------------------*/
$db = new db_mysql();
$db->connect($dbhost,$dbuser,$dbpass,$dbname,$dbcharset);
mysql_query("set names utf8") ;
/*防止 PHP 5.1.x 使用时间函数报错*/
if(function_exists('date_default_timezone_set')) date_default_timezone_set('PRC');
?>