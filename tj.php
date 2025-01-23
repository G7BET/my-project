<?php 
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST,GET,OPTIONS,DELETE'); 
header('Access-Control-Allow-Headers:x-requested-with,content-type');
require_once("inc/const.php");
?>
 
<?
function get_device_type(){//获取用户终端
$agent = strtolower($_SERVER['HTTP_USER_AGENT']);
$type = '3';
if(strpos($agent, 'iphone') || strpos($agent, 'ipad') ){
$type = '1';
}
if(strpos($agent, 'android')){
$type = '2';
}
return $type;
}
$xinghao=get_device_type();

 
$lailu = $_SERVER["HTTP_REFERER"];   //获取来路域名
$removeChar = ["https://", "http://", "/"];
$lailu = str_replace($removeChar,"",$lailu);       
$lailu = explode("/",$lailu);              



$yuming=$_SERVER['SERVER_NAME'];   //获取当前域名

$ippv=str_replace(".","",get_userip());
$liulangqi=preg_replace("/\D/","",$_SERVER['HTTP_USER_AGENT']);
$liulangqi=substr($liulangqi,-6);
$weiyima=$ippv.$liulangqi;
?>


<?php

$get_ip=get_userip();
$date=date("Y-m-d");
$time=date("H:i:s");
$sel_ip=mysql_query("select * from ip where ip='$get_ip'");
$check=mysql_fetch_array($sel_ip);
$check1=$check['ip'];
if($check1==""){
mysql_query("insert into ip(ip,time) values ('$get_ip','$date')");
} 
$idip=$check['id'];
if($check1==$get_ip){
mysql_query("update ip set time='$date' where id='$idip'");		
}
$idsj=$check['time'];
if($date!==$idsj){
mysql_query("update ip set xin='2' where id='$idip'");		
}
 

$pv_spl=mysql_query("select * from pv where pv='$weiyima'");
$pvfor=mysql_fetch_array($pv_spl);
$pvfora=$pvfor['pv'];
if($pvfora==""){
mysql_query("insert into pv(pv,pvtime,xinghao,laiyuan,yuming) values ('$weiyima','$date','$xinghao','$lailu[0]','$yuming')");
mysql_query("update parameter set today=today+1");
}
 

 
mysql_query("update parameter set count=count+1");

$sel_date=mysql_query("select * from parameter where today_date='$date'");
$check_date=mysql_fetch_array($sel_date);
$check_d=$check_date['today_date'];
$that_time=$check_date['time'];
if($check_d!=$date){
mysql_query("update parameter set today_date='$date'");
mysql_query("delete from pv");
mysql_query("insert into pv(pv,pvtime,xinghao,laiyuan,yuming) values ('$weiyima','$date','$xinghao','$lailu[0]','$yuming')");
}



$ip_sql=mysql_query("select ip from online where ip='$get_ip'");
if(!list($sel_old)=mysql_fetch_row($ip_sql)){
mysql_query("insert into online(ip,onlinetime) values ('$get_ip','$time')");	
}
function conversec($datet){
$ip_h=intval(substr($datet,0,2));
$ip_m=intval(substr($datet,3,2));
$ip_s=intval(substr($datet,6,2));
$retval=$ip_h*3600+$ip_m*60+$ip_s;
return $retval;
}
$tp=conversec($time);
$tm=conversec($that_time);
$ip_c=$tp-$tm;
if($ip_c>1200 or $ip_c<0){
mysql_query("delete from online");
mysql_query("update parameter set time='$time'");
mysql_query("insert into online(ip,onlinetime) values ('$get_ip','$time')");
}
mysql_close();
?>
