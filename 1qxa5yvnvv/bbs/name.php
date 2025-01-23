<?php session_start(); ?>
<?php
require '../session.php'; include '../../inc/const.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="../css/admin_css.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
$page 			= $_GET ['page'] ? $_GET ['page'] : 1;
$page_size 		= 70;
$manager_type = $_SESSION['supermanager'] + 1;
$sqlstr=get_sql("select * from {pre}zuozhe order by id asc");
//$sqlstr=get_sql("select * from {pre}user where username like'%11%' order by id desc");
$manager_list = $db->selectLimit ( $sqlstr, $page_size, ($page - 1) * $page_size );
$total_nums = $db->getRowsNum ( $sqlstr )
?>
<table width="100%" height="22" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc" style="margin:0 auto;padding-top:0px;">

    <tr>
    <td height="22" colspan="7" bgcolor="#555555"><font color="#FFFFFF">&nbsp;<strong>作者及名称修改</strong></font></td>
    </tr>
	<tr>
    <td height="22" colspan="7" align="center" bgcolor="#0000FF"><font  color="#FFFFFF">&nbsp;<strong>全部内容</strong></font></td>
    </tr>
	<?php
	foreach ($manager_list as $list){
  ?>	
	<form name="form" action="nameok.php?act=mod" method="POST" onSubmit="return checkreg();">
	<tr>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">作者名称：</td>
      <td width="10%" height="24" align="left" bgcolor="#f8f8f8"><input name="name" type="text" id="name" value="<?php echo $list['name']; ?>" size="20" /></td>
      
	  <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">帖子名称：</td>
      <td width="10%" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="mingcheng" type="text" id="mingcheng" value="<?php echo $list['mingcheng']; ?>" size="20" /></td>
     
	  <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">浏览数量：</td>
      <td width="10%" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="liulang" type="text" id="liulang" value="<?php echo $list['liulang']; ?>" size="20" /></td>
     
	 <td width="10%" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input type="hidden" name="id" value="<?php echo $list['id']; ?>"><input type="submit" name="button" id="button" value="修改" /></td>
    </tr>
  </form>
    <?php
  	}
  ?>	
</table>

</body>
</html>
