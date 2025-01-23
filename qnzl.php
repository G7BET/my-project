<?php
include 'inc/const.php';
if($list['tuxuan']=="1"){$quannian="quannianhk";}elseif($list['tuxuan']=="2"){$quannian="quannian";}
?>
<?php
$id = $_GET['id'];
$qnzl = $db->getOneRow(get_sql("select * from ".$quannian." where id = " .$id));
//die($list);
//die($result1);
?>
<!DOCTYPE html>

<html lang="en">

	<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1">

		<meta name="applicable-device" content="mobile">

		<meta name="apple-mobile-web-app-capable" content="yes">

		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<link href="favicon.ico">
<title><?php echo $qnzl['qnmc'];?>-<?php echo $qnzl['xinmc'];?>﻿</title>
<link rel="stylesheet" type="text/css" href="images/style.css">
<script type="text/javascript" src="/static/js/jquery1.7.2.min.js"></script>

<body>
<style type="text/css">
.STYLE1 {
	font-size: 20px;
	color: #FF0000;
	font-family: "微软雅黑";
}
.STYLE2 {
	font-size: 20px;
	color: #000000;
	font-family: "微软雅黑";
}
.STYLE3 {
	font-size: 18px;
	color: #FF00FF;
	font-family: "微软雅黑";
}
.content{
	font-size: 18px;
	color: #FF00FF;
	font-family: "微软雅黑";
}

</style>
  <body>

		<div class="header clearfix index-header" style="height: 58px;"id="tz">

			<div class="logo-box clearfix">

				<div class="logo">

					<img src="pifu/<?php echo $list['tongji'];?>/logo.png" alt="" class="logo-img">

				</div>

				<div class="bank">

				 <div class="icon"><a href="javascript:historyBack();"><img src="images/cfl1.png" alt="" class="logo-img"></a></div>

				</div>

			</div>
		</div>
		<div style="height:60px"></div>
<!--- 顶部横幅开始 --->
	<div class="box pad" id="yxym">	
  <table border='1' width='100%' cellpadding='0' cellspacing='0' style="<?php echo $list['dinggao'];?>;">
<?php
$dingad = explode('|',$list['dingad']);
for ($i = 0; $i <count($dingad); $i++)
{
  if ($i % 2 == 0)
  {
    echo '<tr><td><a target="_blank" href="'.$dingad[$i].'"><img src="';
  }
  else
  {
    echo $dingad[$i].'" width="100%" height="55"></a></td></tr>';
  }
}
?>
   </table>
   </div>
 <!--- 顶部横幅结束 --->
		<div class="box pad" id="yxym">

			<div class="list-title"><?php echo $list['name'];?><font color="#FF0000">全年</font><font color="#00FF00">书本</font><font color="#0000FF">资料</font></div>

			<table border="1" width="100%" class="duilianpt" bgcolor="#ffffff" cellspacing="0" bordercolor="#FFFFFF" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF" cellpadding="2">

				<tr>

					<td>
   <div class="content">
<?php echo str_replace("2022","2025",$qnzl['qnnr']); ?>
</td>

				</tr>

			</table>

		</div>	</div>
 	
<div class="box pad">
		<div class="foot-img">
		<font color="#ffffff" size="4">
		<p class="copyright">Copyright &copy; 2008-<script type="text/javascript">document.write(new Date().getFullYear());</script>  All Rights Reserved.<br>
		<a style="color: #ffffff;font-weight:bold"><?php echo $list['name'];?></a>  <a style="color: #ffffff;font-weight:bold"><?php echo $list['yuming'];?></a>
		</p>
 		</font>
		</div>
		</div>
<script>
function historyBack(){
	var ref = document.referrer;
	if (ref.length > 0) {
		window.history.back(-1);
	}else{
		window.location.href="/"
	}
}	
$(document).ready(function() {
$(".box").css("background-image", "<?php echo $beijing[$list['tongji']];?>");
$(".header").css("background-image", "<?php echo $beijing[$list['tongji']];?>");
$(".dhl1").css("background-image", "<?php echo $beijing[$list['tongji']];?>");
});
</script>
	   

</body>

</html>