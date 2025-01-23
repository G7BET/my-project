<?php
require_once("inc/const.php");
$id=$_GET['id'];
$sql = "select * from zuozhe where id=".$id." order by id limit 1 ";
$rs = mysql_query($sql);
$bbs=mysql_fetch_assoc($rs);
if(!$id){
$name="欢迎使用六合彩建站系统 自动跟新资料 自动对错比 自动开奖 www.492130.com";	
}else{
$name=$bbs['name'];
$date=date("Y-m-d");
$datatime=$bbs['shijian'];
mysql_query("update zuozhe set liulang=liulang+1,shijian='".$date."' where id=".$id."");
}
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
		<title><?php echo $list['name'];?>-<?php echo $list['title'];?>﻿</title>
<link rel="stylesheet" type="text/css" href="images/style.css">
<script type="text/javascript" src="/static/js/jquery1.7.2.min.js"></script>
	</head>

	<body>

		<div class="header clearfix index-header" id="tz">

			<div class="logo-box clearfix">

				<div class="logo">

					<img src="pifu/<?php echo $list['tongji'];?>/logo.png" alt="" class="logo-img">

				</div>

				<div class="bank">

				 <div class="icon"><a href="javascript:historyBack();"><img src="images/cfl1.png" alt="" class="logo-img"></a></div>

				</div>

			</div>
           <div class="nav clearfix">
				<table border="1" width="100%" cellspacing="0" cellpadding="0">
					<tr>
						<td>
							<iframe width="100%" height="168" border="0" frameborder="0" scrolling="no"
							src="kaijiang.html" target="_blank">
							</iframe>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div style="height:128px"></div>

		<div class="nullbox"></div>
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

			<div class="list-title"><?php echo $list['yuming'];?>：因为我们专业,所以精彩不断！</div>

			<table border="1" width="100%" class="duilianpt" bgcolor="#ffffff" cellspacing="0" bordercolor="#FFFFFF" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF" cellpadding="2">

				<tr>

					<td>
<span class="zz" id="datatime">更新：<?php echo $datatime; ?></span><div class="avatar">作者：﻿<font color="#FF0000" id="name"><?php echo $name; ?></font> 浏览:<font color="#FF0000" id="liulang"><?php echo $bbs['liulang']; ?></font>
<div class="content">
                <span style="font-size: 12pt; word-break:normal;display:block;word-wrap:break-word;overflow: hidden;">
	<br>
<?php $sql = mysql_query("select * from bbs where id>=".($qishu-5)." and id<=".$qishu." order by id asc");//asc
$sqla = mysql_query("select * from ls_lottery where id>=".($qishu-5)." and id<=".$qishu." order by id asc");
while ($row=mysql_fetch_assoc($sql)and $rowa=mysql_fetch_assoc($sqla) ){
if($id=="7" or $id=="8" or $id=="9" or $id=="10" or $id=="11" or $id=="12"){
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 1, 2,"utf-8");
if(!$tema){
$tema="？？？";
$zhong= '';
$duibi= preg_replace("/(".$tema.")/u","<span style='background-color: #FFFF00'>\\1</span>","".$row['bbs'.$id.'']."");
}else{
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 1, 2,"utf-8");	
$jiexi= preg_replace("/(".$tema.")/u","中","".$row['bbs'.$id.'']."");
$duibi= preg_replace("/(".$tema.")/u","<span style='background-color: #FFFF00'>\\1</span>","".$row['bbs'.$id.'']."");
if(strstr($jiexi,"中"))
{
$zhong= '<font color="#FF0000"><span style="background-color: #FFFF00">中</span></font>';
}
else
{
$zhong= '<span style="background-color: #C0C0C0">错</span>';
}				
}}

elseif($id=="13" or $id=="14" or $id=="15" or $id=="16" ){
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 1,"utf-8");
if(!$tema){
$tema="？？？";
$zhong= '';
$duibi= preg_replace("/(".$tema.")/u","<span style='background-color: #C0C0C0'>\\1</span>","".$row['bbs'.$id.'']."");
}else{
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
$xiao=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 1,"utf-8");	
$jiexi= preg_replace("/(".$xiao.")/u","错","".$row['bbs'.$id.'']."");
$duibi= preg_replace("/(".$xiao.")/u","<span style='background-color: #C0C0C0'>\\1</span>","".$row['bbs'.$id.'']."");
if(strstr($jiexi,"错"))
{
$zhong= '<font color="#FF0000"><span style="background-color: #C0C0C0">错</span></font>';
}
else
{
$zhong= '<span style="background-color: #FFFF00">中</span>';
}				
}}

elseif($id=="17" or $id=="18" or $id=="19" or $id=="20" ){
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 1, 2,"utf-8");
if(!$tema){
$tema="？？？";
$zhong= '';
$duibi= preg_replace("/(".$tema.")/u","<span style='background-color: #C0C0C0'>\\1</span>","".$row['bbs'.$id.'']."");
}else{
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
$xiao=mb_substr(${'shengxiao'.$rowa['num7']}, 1, 2,"utf-8");	
$jiexi= preg_replace("/(".$xiao.")/u","错","".$row['bbs'.$id.'']."");
$duibi= preg_replace("/(".$xiao.")/u","<span style='background-color: #C0C0C0'>\\1</span>","".$row['bbs'.$id.'']."");
if(strstr($jiexi,"错"))
{
$zhong= '<font color="#FF0000"><span style="background-color: #C0C0C0">错</span></font>';
}
else
{
$zhong= '<span style="background-color: #FFFF00">中</span>';
}				
}}

elseif($id=="21" or $id=="22" or $id=="23" or $id=="24" ){
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 7, 2,"utf-8");
if(!$tema){
$tema="？？？";
$zhong= '';
$duibi= preg_replace("/(".$tema.")/u","<span style='background-color: #C0C0C0'>\\1</span>","".$row['bbs'.$id.'']."");
}else{
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
$xiao=mb_substr(${'shengxiao'.$rowa['num7']}, 7, 2,"utf-8");	
$jiexi= preg_replace("/(".$xiao.")/u","错","".$row['bbs'.$id.'']."");
$duibi= preg_replace("/(".$xiao.")/u","<span style='background-color: #C0C0C0'>\\1</span>","".$row['bbs'.$id.'']."");
if(strstr($jiexi,"错"))
{
$zhong= '<font color="#FF0000"><span style="background-color: #C0C0C0">错</span></font>';
}
else
{
$zhong= '<span style="background-color: #FFFF00">中</span>';
}				
}}

elseif($id=="25" or $id=="26" or $id=="27" or $id=="28" ){
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 7, 2,"utf-8");
if(!$tema){
$tema="？？？";
$zhong= '';
$duibi= preg_replace("/(".$tema.")/u","<span style='background-color: #FFFF00'>\\1</span>","".$row['bbs'.$id.'']."");
}else{
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
$xiao=mb_substr(${'shengxiao'.$rowa['num7']}, 7, 2,"utf-8");	
$jiexi= preg_replace("/(".$xiao.")/u","中","".$row['bbs'.$id.'']."");
$duibi= preg_replace("/(".$xiao.")/u","<span style='background-color: #FFFF00'>\\1</span>","".$row['bbs'.$id.'']."");
if(strstr($jiexi,"中"))
{
$zhong= '<font color="#FF0000"><span style="background-color: #FFFF00">中</span></font>';
}
else
{
$zhong= '<span style="background-color: #C0C0C0">错</span>';
}				
}}

elseif($id=="29" or $id=="30" or $id=="31" or $id=="32" ){
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 3, 2,"utf-8");
if(!$tema){
$tema="？？？";
$zhong= '';
$duibi= preg_replace("/(".$tema.")/u","<span style='background-color: #FFFF00'>\\1</span>","".$row['bbs'.$id.'']."");
}else{
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
$xiao=mb_substr(${'shengxiao'.$rowa['num7']}, 3, 2,"utf-8");	
$jiexi= preg_replace("/(".$xiao.")/u","中","".$row['bbs'.$id.'']."");
$duibi= preg_replace("/(".$xiao.")/u","<span style='background-color: #FFFF00'>\\1</span>","".$row['bbs'.$id.'']."");
if(strstr($jiexi,"中"))
{
$zhong= '<font color="#FF0000"><span style="background-color: #FFFF00">中</span></font>';
}
else
{
$zhong= '<span style="background-color: #C0C0C0">错</span>';
}				
}}

elseif($id=="33" or $id=="34" or $id=="35" or $id=="36" ){
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 5, 1,"utf-8");
if(!$tema){
$tema="？？？";
$zhong= '';
$duibi= preg_replace("/(".$tema.")/u","<span style='background-color: #FFFF00'>\\1</span>","".$row['bbs'.$id.'']."");
}else{
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
$xiao=mb_substr(${'shengxiao'.$rowa['num7']}, 5, 1,"utf-8");	
$jiexi= preg_replace("/(".$xiao.")/u","中","".$row['bbs'.$id.'']."");
$duibi= preg_replace("/(".$xiao.")/u","<span style='background-color: #FFFF00'>\\1</span>","".$row['bbs'.$id.'']."");
if(strstr($jiexi,"中"))
{
$zhong= '<font color="#FF0000"><span style="background-color: #FFFF00">中</span></font>';
}
else
{
$zhong= '<span style="background-color: #C0C0C0">错</span>';
}				
}}

elseif($id=="37" or $id=="38" or $id=="39" ){
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 6, 1,"utf-8");
if(!$tema){
$tema="？？？";
$zhong= '';
$duibi= preg_replace("/(".$tema.")/u","<span style='background-color: #FFFF00'>\\1</span>","".$row['bbs'.$id.'']."");
}else{
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
$xiao=mb_substr(${'shengxiao'.$rowa['num7']}, 6, 1,"utf-8");	
$jiexi= preg_replace("/(".$xiao.")/u","中","".$row['bbs'.$id.'']."");
$duibi= preg_replace("/(".$xiao.")/u","<span style='background-color: #FFFF00'>\\1</span>","".$row['bbs'.$id.'']."");
if(strstr($jiexi,"中"))
{
$zhong= '<font color="#FF0000"><span style="background-color: #FFFF00">中</span></font>';
}
else
{
$zhong= '<span style="background-color: #C0C0C0">错</span>';
}				
}}

elseif($id=="40" or $id=="41"){
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 9, 1,"utf-8");
if(!$tema){
$tema="？？？";
$zhong= '';
$duibi= preg_replace("/(".$tema.")/u","<span style='background-color: #FFFF00'>\\1</span>","".$row['bbs'.$id.'']."");
}else{
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
$xiao=mb_substr(${'shengxiao'.$rowa['num7']}, 9, 1,"utf-8");	
$jiexi= preg_replace("/(".$xiao.")/u","中","".$row['bbs'.$id.'']."");
$duibi= preg_replace("/(".$xiao.")/u","<span style='background-color: #FFFF00'>\\1</span>","".$row['bbs'.$id.'']."");
if(strstr($jiexi,"中"))
{
$zhong= '<font color="#FF0000"><span style="background-color: #FFFF00">中</span></font>';
}
else
{
$zhong= '<span style="background-color: #C0C0C0">错</span>';
}				
}}

elseif($id=="42" or $id=="43"){
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 10, 2,"utf-8");
if(!$tema){
$tema="？？？";
$zhong= '';
$duibi= preg_replace("/(".$tema.")/u","<span style='background-color: #FFFF00'>\\1</span>","".$row['bbs'.$id.'']."");
}else{
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
$xiao=mb_substr(${'shengxiao'.$rowa['num7']}, 10, 2,"utf-8");	
$jiexi= preg_replace("/(".$xiao.")/u","中","".$row['bbs'.$id.'']."");
$duibi= preg_replace("/(".$xiao.")/u","<span style='background-color: #FFFF00'>\\1</span>","".$row['bbs'.$id.'']."");
if(strstr($jiexi,"中"))
{
$zhong= '<font color="#FF0000"><span style="background-color: #FFFF00">中</span></font>';
}
else
{
$zhong= '<span style="background-color: #C0C0C0">错</span>';
}				
}}

elseif($id=="44" or $id=="45"){
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 12, 1,"utf-8");
if(!$tema){
$tema="？？？";
$zhong= '';
$duibi= preg_replace("/(".$tema.")/u","<span style='background-color: #FFFF00'>\\1</span>","".$row['bbs'.$id.'']."");
}else{
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
$xiao=mb_substr(${'shengxiao'.$rowa['num7']}, 12, 1,"utf-8");	
$jiexi= preg_replace("/(".$xiao.")/u","中","".$row['bbs'.$id.'']."");
$duibi= preg_replace("/(".$xiao.")/u","<span style='background-color: #FFFF00'>\\1</span>","".$row['bbs'.$id.'']."");
if(strstr($jiexi,"中"))
{
$zhong= '<font color="#FF0000"><span style="background-color: #FFFF00">中</span></font>';
}
else
{
$zhong= '<span style="background-color: #C0C0C0">错</span>';
}				
}}

elseif($id=="1" or $id=="2" or $id=="3" or $id=="4" or $id=="5" ){	
$tema=${'shengxiao'.$rowa['num7']};
if(!$tema){
$tema="？？？";
$zhong= '';
$duibi= preg_replace("/([".$tema."]+)/u","<span style='background-color: #FFFF00'>\\1</span>","".$row['bbs'.$id.'']."");
}else{
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
$xiao=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 1,"utf-8");	
$jiexi= preg_replace("/([".$xiao."]+)/u","中","".$row['bbs'.$id.'']."");	
$duibi= preg_replace("/([".$xiao."]+)/u","<span style='background-color: #FFFF00'>\\1</span>","".$row['bbs'.$id.'']."");
if(strstr($jiexi,"中"))
{
$zhong= '<font color="#FF0000"><span style="background-color: #FFFF00">中</span></font>';
}
else
{
$zhong= '<span style="background-color: #C0C0C0">错</span>';
}}}

else{	
$tema=${'shengxiao'.$rowa['num7']};
if(!$tema){
$tema="？？？";
$zhong= '';
$duibi= preg_replace("/([".$tema."]+)/u","<span style='background-color: #FFFF00'>\\1</span>","".$row['bbs'.$id.'']."");
}else{
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
$xiao=mb_substr(${'shengxiao'.$rowa['num1']}, 0, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num2']}, 0, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num3']}, 0, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num4']}, 0, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num5']}, 0, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num6']}, 0, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num7']}, 0, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num7']}, 7, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num7']}, 5, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num7']}, 6, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num7']}, 9, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num7']}, 10, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num7']}, 12, 1,"utf-8");	
$jiexi= preg_replace("/([".$xiao."]+)/u","中","".$row['bbs'.$id.'']."");	
$duibi= preg_replace("/([".$xiao."]+)/u","<span style='background-color: #FFFF00'>\\1</span>","".$row['bbs'.$id.'']."");
if(strstr($jiexi,"中"))
{
$zhong= '<font color="#FF0000"><span style="background-color: #FFFF00">中</span></font>';
}
else
{
$zhong= '<span style="background-color: #C0C0C0">错</span>';
}}}
  	
echo "第".$row['qishu']."期【".$bbs['mingcheng']."】【".$duibi."】开:".$tema."".$zhong."<br>";
}
?>
					</td>

				</tr>

			</table>

		</div>

<div class="box pad" id="yxym">
 <div class="table sbgs pad4">
<div class="list-title">（精准推荐高手资料）</div>
<ul style="background: #fff url(images/img1.png) no-repeat bottom right;">
<?php	 
$sql = mysql_query("select * from zuozhe order by rand() LIMIT 15 ");//asc
function randColor(){
     $colors = array();
     for($i = 0;$i<6;$i++){
         $colors[] = dechex(rand(0,15));
     }
     return implode('',$colors);
}
while ($row=mysql_fetch_assoc($sql)){

echo '
      <li class="item"><span class="zz"><img src="/static/images/new.gif"></span><span class="icon">'.$row['name'].'</span><a  href="bbs.php?id='.$row['id'].'">'.$topqishu.'期：【<font style="color:#'.randColor().';">'.$row['mingcheng'].'</font>】</a></li>
	  ';
}
?>			       
</ul>		
</div>


		<div class="box pad" id="yxym">

			<table border="1" width="100%" class="gongshi" bgcolor="#ffffff" cellspacing="0" bordercolor="#FFFFFF" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF" cellpadding="2">

				<tr>

					<td>

						<iframe height="1575" border="0" frameBorder="0" width="100%" name="I9" marginwidth="1" marginheight="1" scrolling="no" target="_blank" src="sx.html"></iframe>

					</td>

				</tr>

			</table>

		</div>

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