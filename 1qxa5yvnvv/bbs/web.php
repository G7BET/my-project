<?php
session_start();
require '../session.php'; include '../../inc/const.php';

$page 			= $_GET ['page'] ? $_GET ['page'] : 1;
$page_size 		= 70;
$manager_type = $_SESSION['supermanager'] + 1;
$sqlstr=get_sql("select * from {pre}bbs order by id asc");
//$sqlstr=get_sql("select * from {pre}user where username like'%11%' order by id desc");
$manager_list = $db->selectLimit ( $sqlstr, $page_size, ($page - 1) * $page_size );
$total_nums = $db->getRowsNum ( $sqlstr );
?>
<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<title>全年资料</title>
</head>
<body>
<style>
.nav2 { width: 100%;  margin: 0 auto; box-sizing: border-box; padding: 2px; font-size: 13px; background: #fff;}
 li{ list-style: none; }
.nav2 ul {overflow:hidden;width:100%; padding-inline-start: 0px;}
.nav2 ul li { padding: 4px 0; width:20%;float:left;}
.nav2 ul li a { display: block; padding: 3px 0; text-align: center; color: #fff; border-radius: 50px; background: #0a5cda;}
.nav2 ul li a:hover { background: #da183b;}
 
</style>
<link href="../css/admin_css.css" rel="stylesheet" type="text/css" />
<table width="100%" height="22" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc" style="margin:0 auto;padding-top:0px;">
  <form method="get" action="sou.php">
  <tr>
    <td height="22" colspan="12" bgcolor="#555555"><font color="#FFFFFF">&nbsp;<strong>帖子资料-<input type="text" name="sou" size="20" ><input type="submit" value="搜索"></strong></font></td>
  </tr>
  </form>
 </table> 
<div class="nav2">
	
   	<ul>
	<?php
	foreach ($manager_list as $list){
  ?>
    	<li><a  href="mod.php?id=<?php echo $list['id']; ?>">第<?php echo $list['qishu']; ?>期帖子</a></li>
  <?php
  	}
  ?>		
    </ul>
</div>
<?php page($sqlstr,$page_size,"web.php?page",$page);?>

</body>
</html>
