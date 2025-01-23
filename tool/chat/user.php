<?php 
header("Content-Type: text/html;charset=utf-8");
$user=mt_rand(999, 9999);
$lifeTime = 72 * 3600; 
session_set_cookie_params($lifeTime); 
session_start();
$yonghu=$_SESSION["user"];
if(isset($yonghu)){
echo "游客".$yonghu;
}else{
$_SESSION["user"] = $user;
}
?>