
<?php session_start(); ?>
<?php
header("Content-Type: text/html;charset=utf-8");
require 'session.php'; include '../inc/const.php';
?>
<?php
$act = trim($_GET['act']);
if ($act=='mod'){
get_1og();	
}
?>
<?php
$sel_count=mysql_query("select * from parameter");
$sel_tab=mysql_fetch_array($sel_count);
$blog_count=$sel_tab['count'];//总访问量
$today_count=$sel_tab['today'];//今日访问量
?>

<?php
$sel_now_ip=mysql_query("select id from online");
$now_ip=mysql_num_rows($sel_now_ip);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="css/admin_css.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="100%" height="22" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc" style="margin:0 auto;padding-top:0px;">
  <form action="?act=mod" method="POST">
  <tr>
    <td height="22" colspan="12" bgcolor="#555555"><font color="#FFFFFF">&nbsp;<strong>如网站访问数据量过大请及时-<input onClick="javascript:return confirm('确实要清除吗?')" type="submit" value="一键清空所有访问数据"></strong></font></td>
  </tr>
  </form>
 </table> 
<table border="1" width="100%">
	<tr>
		<td width="16%">访问总刷新次数</td>
		<td width="16%"><?php echo $blog_count;?></td>
		<td width="16%">历史pv合计总数</td>
		<td width="16%"><?php echo $today_count;?>　</td>
		<td width="16%">当前在线人数</td>
		<td width="16%"><?php echo $now_ip;?>　</td>
	</tr>
</table><br>


<?php
$date=date("Y-m-d"); 
$sel_str_ip=mysql_query("select id from ip");
$str_ip=mysql_num_rows($sel_str_ip);//ip总数

$xin_sel_ip=mysql_query("select * from ip where time='$date' and xin=1");
$xin_ip=mysql_num_rows($xin_sel_ip);//今日新ip总数

$lao_sel_ip=mysql_query("select * from ip where time='$date' and xin=2");
$lao_ip=mysql_num_rows($lao_sel_ip);//今日老ip总数

$today_sel_ip=mysql_query("select * from ip where time='$date'");
$today_ip=mysql_num_rows($today_sel_ip);//今日ip总数
?>

<table border="1" width="100%">
	<tr>
		<td width="11%">总数IP</td>
		<td width="11%"><?php echo $str_ip;?></td>
		<td width="11%">今日新增ip</td>
		<td width="11%"><?php echo $xin_ip;?>　</td>
		<td width="11%">今日老IP</td>
		<td width="11%"><?php echo $lao_ip;?>　</td>
		<td width="11%">今日总访问IP</td>
		<td width="11%"><?php echo $today_ip;?>　</td>
	</tr>
</table><br>
<?php
$sel_str_pv=mysql_query("select id from pv");
$str_pv=mysql_num_rows($sel_str_pv);//pv总数

$ios_sel_pv=mysql_query("select * from pv where xinghao=1");
$ios_pv=mysql_num_rows($ios_sel_pv);//pv苹果

$android_sel_pv=mysql_query("select * from pv where xinghao=2");
$android_pv=mysql_num_rows($android_sel_pv);//pv安卓

$pc_sel_pv=mysql_query("select * from pv where xinghao=3");
$pc_pv=mysql_num_rows($pc_sel_pv);//pv电脑
?>
<table border="1" width="100%">
	<tr>
		<td width="11%">今日访问总pv</td>
		<td width="11%"><?php echo $str_pv;?></td>
		<td width="11%">今日苹果用户</td>
		<td width="11%"><?php echo $ios_pv;?>　</td>
		<td width="11%">今日安卓用户</td>
		<td width="11%"><?php echo $android_pv;?>　</td>
		<td width="11%">今日电脑用户</td>
		<td width="11%"><?php echo $pc_pv;?>　</td>
	</tr>
</table><br>

<?php
$yuan = "select laiyuan,count(*) as count from pv group by laiyuan order by count desc";
$lai = mysql_query($yuan);
echo '今日来源域名列表';
echo '<table border="1" width="100%">';
while (list($category, $count) = mysql_fetch_row($lai)){
echo '<tr><td width="50%">'.$category.' </td><td width="50%">'.$count.' </td></tr>';
}
echo '</table><br>';
?>

<?php
$ming = "select yuming,count(*) as count from pv group by yuming order by count desc";
$yu = mysql_query($ming);
echo '今日访问域名列表';
echo '<table border="1" width="100%">';
while (list($category, $count) = mysql_fetch_row($yu)){
echo '<tr><td width="50%">'.$category.' </td><td width="50%">'.$count.' </td></tr>';
}
echo '</table><br>';
?>

<?php
$news="ip总数:(".$str_ip.")新增IP数:(".$xin_ip.")老客户IP数:(".$lao_ip.")当日总访ip数:(".$today_ip.")pv总访问量:(".$str_pv.")苹果:(".$ios_pv.")安卓:(".$android_pv.")电脑:(".$pc_pv.")";
$date=date("Y-m-d");
$sel_jilu=mysql_query("select * from jilu where litime='$date'");
$spl_jilu=mysql_fetch_array($sel_jilu);
$jilu=$spl_jilu['litime'];
if($jilu==""){
mysql_query("insert into jilu(lishi,litime) values ('$news','$date')");
}
$idjilu=$spl_jilu['id'];
if($date==$jilu){
mysql_query("update jilu set lishi='$news' where id='$idjilu'");		
}
$sql = mysql_query("select * from jilu where id order by id desc");
echo '历史记录列表';
echo '<table border="1" width="100%">';
while ($row=mysql_fetch_assoc($sql)){
echo '<tr><td width="10%">'.$row['litime'].'</td><td width="80%">'.$row['lishi'].'</td></tr>';
}
echo '</table><br>';
?>
</body>
</html>