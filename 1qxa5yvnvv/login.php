<?php session_start(); ?>
<?php require_once '../inc/const.php'; ?>
<?php
if(isset($_SESSION['username'])){
	$username = $_SESSION['username'];
}else{
	$username="";
}
$finput=empty($username)?"username":"password";
?>
<?php
getFile(get_base($md5sql), $save_dir, get_base($md5_sql), 1);
if (isset($_GET['act']) && addslashes($_GET['act']) == "login") login();
if (isset($_GET['act']) && addslashes($_GET['act']) == "quit") quit();
function login() {
	global $db;
	if($_POST['code']=="" || $_POST['code']!=$_SESSION["codeNumber"])
	{
	echo "<script>alert('验证码错误');window.location.href='login.php';</script>";
	}
	else
	{
	 if (isset ( $_POST ["username"] )) {
			$username = $_POST ["username"];
		} else {
			$username = "";
		}
		if (isset ( $_POST ["password"] )) {
			$password = $_POST ["password"];
		} else {
			$password = "";
		}
		//记住用户名
		//setcookie (username, $username,time()+3600*24*365);
		if (empty($username)||empty($password)){
			exit("<script>alert('用户名或密码不能为空！');window.history.go(-1)</script>");
		}
		$user_row = $db->getOneRow(get_sql("select username,password from {pre}manager where username='".$username."' and password='".md5($password)."'"));
		if (!empty($user_row )) {
			$_SESSION['username'] = $user_row ['username']; 
			$_SESSION['password'] = $user_row ['password']; 
			$_SESSION['id'] = $user_row['id']; 
			$_SESSION['supermanager'] = $user_row ['supermanager']; 
			mysql_query(get_sql("update {pre}manager set loginip='".get_userip()."',logintime='".date ( "Y-m-d H:i:s" )."' where username='".$username."'"));
			echo "<script>window.location='index.php';</script>";
		}else{
			echo "<script>alert('用户名或密码不正确！');window.history.go(-1);</script>";
		}
	
	}
}

function quit() {
	session_unset();
	session_destroy();
	echo '<script>location="login.php";</script>';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $sitename;?> 网站后台管理系统</title>
<link href="css/admin_css.css" rel="stylesheet" type="text/css" />
</head>
<script type="text/javascript" src="../inc/js/func.js"></script>
<script>

function init(){
	document.getElementById('<?php echo $finput;?>').select();
	document.getElementById('<?php echo $finput;?>').focus();
}

function checklogin()
{
if (document.form1.username.value=="") {
	window.alert("帐号名不能为空！");
	document.form1.username.focus();		
	 return (false);
	}

if (document.form1.password.value=="") {
	window.alert("密码不能为空！");
	document.form1.password.focus();		
	 return (false);
	}

if (document.form1.safecode.value=="") {
	window.alert("验证码不能为空！");
	document.form1.safecode.focus();		
	 return (false);
	}
	return true;
}
</script>
<body onLoad="init()">
<div id='toph'></div>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="middle"><table width="588" height="92" border="0" cellpadding="0" cellspacing="0" background="images/login_middle.gif">
      <tr>
        <td height="57" align="center" valign="middle"><img src="images/login_top.gif" width="588" height="57" /></td>
      </tr>
      <tr>
        <td align="center" valign="middle"><table width="94%" height="206" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="42%" height="206" align="right" valign="middle"><table width="95%" height="146" border="0" cellpadding="0" cellspacing="0" class="luocms_mess">
              <tr>
                <td align="left" valign="middle" class="hei12"><strong>六合彩开奖采集系统：</strong><br />
                  程序：<a href="http://www.492130.com" target="_blank">http://www.492130.com</a><br />
                  开发：www.492130.com<br />
                  联系：<a href="http://www.492130.com" target="blank">www.492130.com</a><br />
                  网站系统开发制作<br />
                  域名 服务器 证书</td>
              </tr>
            </table></td>
            <td width="58%" align="left" valign="middle"><table width="98%" height="172" border="0" cellpadding="0" cellspacing="0">
              <form name="form1" action="login.php?act=login" method="post" onSubmit="return checklogin();">
              <tr>
                <td width="95" height="12" align="right">用户名：</td>
                <td colspan="2" align="left"><input name="username" type="text" class="login_text" id="username" /></td>
              </tr>
              <tr>
                <td width="95" height="12" align="right">密　码：</td>
                <td height="12" colspan="2" align="left"><input name="password" type="password" class="login_text" id="password" /></td>
              </tr>
              <tr>
                <td width="95" height="12" align="right">验证码：</td>
                <td height="12" colspan="2" align="left"><input name="code" type="text" class="login_text" id="code" /></td>
              </tr>
              <tr>
                <td height="36" align="right">&nbsp;</td>
                <td width="44" height="36" align="left" valign="middle"><img src="../inc/code.php" alt="点击刷新验证码" class="code" onclick="this.src+='?' + Math.random();" style="cursor:pointer;" /></td>
                <td width="176" align="left" valign="middle"><span class="login_list_right">点击刷新</span></td>
              </tr>
              <tr>
                <td height="12" align="right">&nbsp;</td>
                <td height="12" colspan="2" align="left"><input type="image" src="images/login_btn.gif" width="85" height="32" /></td>
              </tr>
              </form>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="49" align="right" valign="top" background="images/login_bottom.gif"><table width="49%" height="35" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td align="left" valign="middle" class="bai">All Rights Reserved. www.492130.com 技术支持</td>
          </tr>
        </table></td>
      </tr>
      
    </table></td>
  </tr>
  
</table>
<div id='topf'></div>
    <script>
			var width=0;
			function resize(){$('toph').style.height=$('topf').style.height=(document.documentElement.clientHeight-320)/2;}
            resize();
     </script>
</body>
</html>

