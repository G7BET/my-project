<?php
session_start();
require '../session.php'; include '../../inc/const.php';
$page 			= $_GET ['page'] ? $_GET ['page'] : 1;
$page_size 		= 10;
$manager_type = $_SESSION['supermanager'] + 1;
$so=$_GET['sou'];
$sqlstr=get_sql("select * from {pre}ls_lottery where issue like '%{$so}%' order by id desc");
$manager_list = $db->selectLimit ( $sqlstr, $page_size, ($page - 1) * $page_size );
$total_nums = $db->getRowsNum ( $sqlstr );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="../css/admin_css.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="100%" height="101" border="0" cellpadding="3" cellspacing="1" bgcolor="#cccccc" style="margin:0 auto;padding-top:0px;">
  <form method="get" action="sou.php">
  <tr>
    <td height="22" colspan="12" bgcolor="#555555"><font color="#FFFFFF">&nbsp;<strong>所有开奖-<input type="text" name="sou" size="20" ><input type="submit" value="搜索"></strong></font></td>
  </tr>
  <tr>
  </form>
    <td width="10%" height="24" align="center" valign="middle" bgcolor="#f8f8f8">序列</td>
    <td width="10%" height="24" align="center" valign="middle" bgcolor="#f8f8f8">开奖期数</td>
	<td width="4%" height="24" align="center" valign="middle" bgcolor="#f8f8f8">第一球</td>
	<td width="4%" height="24" align="center" valign="middle" bgcolor="#f8f8f8">第二球</td>
	<td width="4%" height="24" align="center" valign="middle" bgcolor="#f8f8f8">第三球</td>
	<td width="4%" height="24" align="center" valign="middle" bgcolor="#f8f8f8">第四球</td>
	<td width="4%" height="24" align="center" valign="middle" bgcolor="#f8f8f8">第五球</td>
	<td width="4%" height="24" align="center" valign="middle" bgcolor="#f8f8f8">第六球</td>
	<td width="4%" height="24" align="center" valign="middle" bgcolor="#f8f8f8">第七球</td>
	<td width="20%" height="24" align="center" valign="middle" bgcolor="#f8f8f8">开奖时间</td>
	<td width="10%" height="24" align="center" valign="middle" bgcolor="#f8f8f8">修改/添加员</td>
    <td width="10%" align="center" valign="middle" bgcolor="#f8f8f8">操作</td>
  </tr>
  <?php
	foreach ($manager_list as $list){
  ?>
  <tr onMouseOver="this.style.background='#D7E4F7'" onMouseOut="this.style.background='#EBF2F9';"  bgcolor="#EBF2F9">
    <td width="10%" height="24" align="center" valign="middle" bgcolor="#f8f8f8"><?php echo $list['id']; ?></td>
    <td height="14" align="center" valign="middle" bgcolor="#f8f8f8"><?php echo $list['issue']; ?></td>
    <td height="14" align="center" valign="middle" bgcolor="#f8f8f8"><?php echo $list['num1']; ?></td>
    <td height="14" align="center" valign="middle" bgcolor="#f8f8f8"><?php echo $list['num2']; ?></td>
    <td height="14" align="center" valign="middle" bgcolor="#f8f8f8"><?php echo $list['num3']; ?></td>
    <td height="14" align="center" valign="middle" bgcolor="#f8f8f8"><?php echo $list['num4']; ?></td>
		<td height="14" align="center" valign="middle" bgcolor="#f8f8f8"><?php echo $list['num5']; ?></td>
		<td height="14" align="center" valign="middle" bgcolor="#f8f8f8"><?php echo $list['num6']; ?></td>
		<td height="14" align="center" valign="middle" bgcolor="#f8f8f8"><?php echo $list['num7']; ?></td>
		<td height="14" align="center" valign="middle" bgcolor="#f8f8f8"><?php echo $list['time']; ?></td>
		<td height="14" align="center" valign="middle" bgcolor="#f8f8f8"><?php 
                if (isset($list['tjz'])){
                ?>
                <?php echo $list['tjz']; ?>
                <?php 
                }else{
                ?>
              	采集来源
              	<?php 
                }
                ?></td>
    <td height="14" align="center" valign="middle" bgcolor="#f8f8f8"><a href="mod.php?id=<?php echo $list['id']; ?>"><img src="../images/edit.gif" border="0" /></a>&nbsp;&nbsp;&nbsp;<a href="k.php?id=<?php echo $list['id']; ?>&act=del" onClick="javascript:return confirm('确实要删除吗?')"><img src="../images/del.gif" border="0" /></a></td>
  </tr>
  <?php
  	}
  ?>
  <tr>
    <td height="24" colspan="12" align="center" valign="middle" bgcolor="#F8FCF6"><?php page($sqlstr,$page_size,"manage.php?page",$page);?></td>
  </tr>
</table>
</body>
</html>
