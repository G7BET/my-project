<?php session_start(); ?>
<?php
require '../session.php'; include '../../inc/const.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script>
function checkreg()
{
if (document.form.issue.value=="") {
	window.alert("开奖期数不能为空");
	document.form.issue.focus();		
	 return (false);
	}
if (document.form.num1.value=="") {
	window.alert("开奖号码第一球不能为空");
	document.form.num1.focus();		
	 return (false);
	}
if (document.form.num2.value=="") {
	window.alert("开奖号码第二球不能为空");
	document.form.num2.focus();		
	 return (false);
	}
if (document.form.num3.value=="") {
	window.alert("开奖号码第三球不能为空");
	document.form.num3.focus();		
	 return (false);
	}
if (document.form.num4.value=="") {
	window.alert("开奖号码第四球不能为空");
	document.form.num4.focus();		
	 return (false);
	}
if (document.form.num5.value=="") {
	window.alert("开奖号码第五球不能为空");
	document.form.num5.focus();		
	 return (false);
	}
if (document.form.num6.value=="") {
	window.alert("开奖号码第六球不能为空");
	document.form.num6.focus();		
	 return (false);
	}
if (document.form.num7.value=="") {
	window.alert("开奖号码第七球不能为空");
	document.form.num7.focus();		
	 return (false);
	}
if (document.form.time.value=="") {
	window.alert("开奖时间不能为空");
	document.form.time.focus();		
	 return (false);
	}	
if (document.form.nextissue.value=="") {
	window.alert("下一期期数不能为空");
	document.form.nextissue.focus();		
	 return (false);
	}	
	return true;
}
</script>

<link href="../css/admin_css.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
$id = getvar('id');
$list = $db->getOneRow(get_sql("select * from {pre}ls_lottery where id = " . $id));
//die($list);
//die($result1);
?>
<table width="98%" height="101" border="0" cellpadding="3" cellspacing="1" bgcolor="#cccccc" style="margin:0 auto;padding-top:0px;">
  <form name="form" action="ok.php?act=mod" method="POST" onSubmit="return checkreg();">
        <tr>
      <td height="22" colspan="2" bgcolor="#555555"><font color="#FFFFFF">&nbsp;<strong>修改开奖</strong></font></td>
    </tr>
	<tr>
      <td width="13%" height="24" align="right" valign="middle" bgcolor="#f8f8f8">开奖期数：</td>
      <td width="87%" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="issue" type="text" id="issue" value="<?php echo $list['issue']; ?>" size="50" /></td>
    </tr>
    <tr>
      <td width="13%" height="24" align="right" valign="middle" bgcolor="#f8f8f8">开奖一球：</td>
      <td width="87%" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="num1" type="text" id="num1" value="<?php echo $list['num1']; ?>" size="50" />
      </td>
    </tr>
	    <tr>
      <td width="13%" height="24" align="right" valign="middle" bgcolor="#f8f8f8">开奖二球：</td>
      <td width="87%" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="num2" type="text" id="num2" value="<?php echo $list['num2']; ?>" size="50" />
      </td>
    </tr>
	    <tr>
      <td width="13%" height="24" align="right" valign="middle" bgcolor="#f8f8f8">开奖三球：</td>
      <td width="87%" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="num3" type="text" id="num3" value="<?php echo $list['num3']; ?>" size="50" />
      </td>
    </tr>
	    <tr>
      <td width="13%" height="24" align="right" valign="middle" bgcolor="#f8f8f8">开奖四球：</td>
      <td width="87%" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="num4" type="text" id="num4" value="<?php echo $list['num4']; ?>" size="50" />
      </td>
    </tr>
	    <tr>
      <td width="13%" height="24" align="right" valign="middle" bgcolor="#f8f8f8">开奖五球：</td>
      <td width="87%" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="num5" type="text" id="num5" value="<?php echo $list['num5']; ?>" size="50" />
      </td>
    </tr>
	    <tr>
      <td width="13%" height="24" align="right" valign="middle" bgcolor="#f8f8f8">开奖六球：</td>
      <td width="87%" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="num6" type="text" id="num6" value="<?php echo $list['num6']; ?>" size="50" />
      </td>
    </tr>
	    <tr>
      <td width="13%" height="24" align="right" valign="middle" bgcolor="#f8f8f8">开奖七球：</td>
      <td width="87%" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="num7" type="text" id="num7" value="<?php echo $list['num7']; ?>" size="50" />
      </td>
    </tr>
	<tr>
      <td width="13%" height="24" align="right" valign="middle" bgcolor="#f8f8f8">开奖时间：</td>
      <td width="87%" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="time" type="text" id="time" value="<?php echo $list['time']; ?>" size="50" />
      </td>
    </tr>
	<tr>
      <td width="13%" height="24" align="right" valign="middle" bgcolor="#f8f8f8">视频地址：</td>
      <td width="87%" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="videoUrl" type="text" id="videoUrl" value="<?php echo $list['videoUrl']; ?>" size="50" /><input type="hidden" name="tjz" value="<?php echo $_SESSION['username']; ?>">
      </td>
    </tr>
	<tr>
      <td width="13%" height="24" align="right" valign="middle" bgcolor="#f8f8f8">下一期数：</td>
      <td width="87%" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="nextissue" type="text" id="nextissue" value="<?php echo $list['nextissue']; ?>" size="50" />
      </td>
    </tr>
	<tr>
      <td width="13%" height="24" align="right" valign="middle" bgcolor="#f8f8f8">下一期时间：</td>
      <td width="87%" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="nextissuetime" type="text" id="nextissuetime" value="<?php echo $list['nextissuetime']; ?>" size="50" />
      </td>
    </tr>
    <tr>
      <td height="24" bgcolor="#f8f8f8">&nbsp;</td>
      <td height="24" bgcolor="#f8f8f8"><input type="hidden" name="id" value="<?php echo $list['id']; ?>">
       <input type="submit" name="button" value="确定好修改数据 (3 秒后激活此按钮)" id="agreeb">&nbsp;&nbsp;&nbsp;<input type="button" class="btn"  value="返回" onclick="javascript:history.go(-1);"/></td>
    </tr>
  </form>
</table>
<SCRIPT language=javascript>
<!--
var secs = 3;
document.getElementById('agreeb').disabled=true;
for(i=1;i<=secs;i++) {
window.setTimeout("update(" + i + ")", i * 1000);
}
function update(num) {
if(num == secs) {
document.getElementById('agreeb').value ="提交";
document.getElementById('agreeb').disabled=false;
}
else {
printnr = secs-num;
document.getElementById('agreeb').value = "确定好修改数据 (" + printnr +" 秒后激活此按钮)";
}
}
//-->
</SCRIPT>

<script type="text/javascript">
 function sum(obj) {
var a = document.getElementById("a");
var b = document.getElementById("b");
if(a.value!='')
{
jinbi.value=parseInt(a.value);
}
if(a.value!=''&&b.value!='')
{
jinbi.value=parseInt(b.value)+parseInt(a.value);
} }
</script>

</body>
</html>
