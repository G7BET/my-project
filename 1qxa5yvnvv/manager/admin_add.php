<?php session_start(); ?>
<?php
require '../session.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script>
function checkreg()
{
if (document.myform.username.value=="") {
	window.alert("用户名不能为空！！");
	document.myform.username.focus();		
	 return (false);
	}
if (document.myform.password.value=="") {
	window.alert("密码不能为空！！");
	document.myform.password.focus();		
	 return (false);
	}
if (document.myform.password1.value==""){
	window.alert("新密码不能为空!!");
	document.myform.password1.focus();		
	return (false);
	}
if (document.myform.password.value!=document.myform.password1.value){
	window.alert("两次输入的密码不一样!!");
	document.myform.password.focus();
	document.myform.password1.value=="";	
	return (false);
}
	return true;
}
</script>
<link href="../css/admin_css.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="100%" height="101" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC" style="margin:0 auto;padding-top:0px;">
  <form name="myform" action="admin_ok.php?act=add" method="post" onSubmit="return checkreg();">
    <tr>
      <td height="22" colspan="2" bgcolor="#555555"><font color="#FFFFFF">&nbsp;<strong>管理员添加</strong></font></td>
    </tr>
    <tr>
      <td width="13%" height="24" align="right" valign="middle" bgcolor="#f8f8f8">用户名：</td>
      <td width="87%" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="username" type="text" id="username" size="50" value="" /></td>
    </tr>
    <tr>
      <td width="13%" height="24" align="right" valign="middle" bgcolor="#f8f8f8">请输入密码：</td>
      <td width="87%" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="password" type="password" id="password" size="50" value="" /></td>
    </tr>
    <tr>
      <td width="13%" height="24" align="right" valign="middle" bgcolor="#f8f8f8">请再次输入密码：</td>
      <td width="87%" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="password1" type="password" id="password1" value=""  size="50" />
      </td>
    </tr>
    <tr>
      <td height="24" bgcolor="#f8f8f8">&nbsp;</td>
      <td height="24" bgcolor="#f8f8f8"><input type="submit" name="button" id="button" value="提交" /></td>
    </tr>
  </form>
</table>
</body>
</html>
