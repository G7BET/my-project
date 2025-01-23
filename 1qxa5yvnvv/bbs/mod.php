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
$id = getvar('id');
$list = $db->getOneRow(get_sql("select * from {pre}bbs where id = " . $id));
//die($list);
//die($result1);
?>
<table width="100%" height="22" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc" style="margin:0 auto;padding-top:0px;">
  <form name="form" action="ok.php?act=mod" method="POST" onSubmit="return checkreg();">
    <tr>
    <td height="22" colspan="4" bgcolor="#555555"><font color="#FFFFFF">&nbsp;<strong>帖子修改『第<?php echo $list['qishu']; ?>期』</strong></font></td>
    </tr>
	<tr>
    <td height="22" colspan="4" align="center" bgcolor="#0000FF"><font  color="#FFFFFF">&nbsp;<strong>生肖贴子内容</strong></font></td>
    </tr>
	<tr>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">九肖中特：</td>
      <td width="40%" height="24" align="left" bgcolor="#f8f8f8">
	  <input name="bbs1" type="text" id="bbs1" value="<?php echo $list['bbs1']; ?>" size="50" /></td>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">八肖中特：</td>
      <td width="40%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		<input name="bbs2" type="text" id="bbs2" value="<?php echo $list['bbs2']; ?>" size="50" /></td>
    </tr>
	<tr>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">七肖中特：</td>
      <td width="40%" height="24" align="left" bgcolor="#f8f8f8">
	  <input name="bbs3" type="text" id="bbs3" value="<?php echo $list['bbs3']; ?>" size="50" /></td>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">六肖中特：</td>
      <td width="40%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		<input name="bbs4" type="text" id="bbs4" value="<?php echo $list['bbs4']; ?>" size="50" /></td>
    </tr>
	<tr>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">五肖中特：</td>
      <td width="40%" height="24" align="left" bgcolor="#f8f8f8">
	  <input name="bbs5" type="text" id="bbs5" value="<?php echo $list['bbs5']; ?>" size="50" /></td>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">四肖中特：</td>
      <td width="40%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		<input name="bbs6" type="text" id="bbs6" value="<?php echo $list['bbs6']; ?>" size="50" /></td>
    </tr>
	
	<tr>
    <td height="22" colspan="4" align="center" bgcolor="#0000FF"><font  color="#FFFFFF">&nbsp;<strong>特码贴子内容</strong></font></td>
    </tr>
    <tr>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">三十八码：</td>
      <td width="40%" height="24" align="left" bgcolor="#f8f8f8">
	  <input name="bbs7" type="text" id="bbs7" value="<?php echo $list['bbs7']; ?>" size="50" /></td>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">三十特码：</td>
      <td width="40%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		<input name="bbs8" type="text" id="bbs8" value="<?php echo $list['bbs8']; ?>" size="50" /></td>
    </tr>
	<tr>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">二十四码：</td>
      <td width="40%" height="24" align="left" bgcolor="#f8f8f8">
	  <input name="bbs9" type="text" id="bbs9" value="<?php echo $list['bbs9']; ?>" size="50" /></td>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">二十特码：</td>
      <td width="40%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		<input name="bbs10" type="text" id="bbs10" value="<?php echo $list['bbs10']; ?>" size="50" /></td>
    </tr>
	<tr>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">十八特码：</td>
      <td width="40%" height="24" align="left" bgcolor="#f8f8f8">
	  <input name="bbs11" type="text" id="bbs11" value="<?php echo $list['bbs11']; ?>" size="50" /></td>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">十六特码：</td>
      <td width="40%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		<input name="bbs12" type="text" id="bbs12" value="<?php echo $list['bbs12']; ?>" size="50" /></td>
    </tr>
	
	<tr>
    <td height="22" colspan="4" align="center" bgcolor="#0000FF"><font  color="#FFFFFF">&nbsp;<strong>杀肖贴子内容</strong></font></td>
    </tr>
    <tr>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">杀三肖：</td>
      <td width="40%" height="24" align="left" bgcolor="#f8f8f8">
	  <input name="bbs13" type="text" id="bbs13" value="<?php echo $list['bbs13']; ?>" size="50" /></td>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">杀二肖：</td>
      <td width="40%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		<input name="bbs14" type="text" id="bbs14" value="<?php echo $list['bbs14']; ?>" size="50" /></td>
    </tr>
	<tr>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">杀一肖：</td>
      <td width="40%" height="24" align="left" bgcolor="#f8f8f8">
	  <input name="bbs15" type="text" id="bbs15" value="<?php echo $list['bbs15']; ?>" size="50" /></td>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">杀四肖：</td>
      <td width="40%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		<input name="bbs16" type="text" id="bbs16" value="<?php echo $list['bbs16']; ?>" size="50" /></td>
    </tr>
	
	<tr>
    <td height="22" colspan="4" align="center" bgcolor="#0000FF"><font  color="#FFFFFF">&nbsp;<strong>杀码贴子内容</strong></font></td>
    </tr>
    <tr>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">杀十码：</td>
      <td width="40%" height="24" align="left" bgcolor="#f8f8f8">
	  <input name="bbs17" type="text" id="bbs17" value="<?php echo $list['bbs17']; ?>" size="50" /></td>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">杀十二码：</td>
      <td width="40%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		<input name="bbs18" type="text" id="bbs18" value="<?php echo $list['bbs18']; ?>" size="50" /></td>
    </tr>
	<tr>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">杀十五码：</td>
      <td width="40%" height="24" align="left" bgcolor="#f8f8f8">
	  <input name="bbs19" type="text" id="bbs19" value="<?php echo $list['bbs19']; ?>" size="50" /></td>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">杀十八码：</td>
      <td width="40%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		<input name="bbs20" type="text" id="bbs20" value="<?php echo $list['bbs20']; ?>" size="50" /></td>
    </tr>
	
	<tr>
    <td height="22" colspan="4" align="center" bgcolor="#0000FF"><font  color="#FFFFFF">&nbsp;<strong>杀波贴子内容</strong></font></td>
    </tr>
    <tr>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">杀一波：</td>
      <td width="40%" height="24" align="left" bgcolor="#f8f8f8">
	  <input name="bbs21" type="text" id="bbs21" value="<?php echo $list['bbs21']; ?>" size="50" /></td>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">杀二波：</td>
      <td width="40%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		<input name="bbs22" type="text" id="bbs22" value="<?php echo $list['bbs22']; ?>" size="50" /></td>
    </tr>
	<tr>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">杀一波：</td>
      <td width="40%" height="24" align="left" bgcolor="#f8f8f8">
	  <input name="bbs23" type="text" id="bbs23" value="<?php echo $list['bbs23']; ?>" size="50" /></td>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">杀一波：</td>
      <td width="40%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		<input name="bbs24" type="text" id="bbs24" value="<?php echo $list['bbs24']; ?>" size="50" /></td>
    </tr>	

	<tr>
    <td height="22" colspan="4" align="center" bgcolor="#0000FF"><font  color="#FFFFFF">&nbsp;<strong>波色贴子内容</strong></font></td>
    </tr>
    <tr>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">一波中特：</td>
      <td width="40%" height="24" align="left" bgcolor="#f8f8f8">
	  <input name="bbs25" type="text" id="bbs25" value="<?php echo $list['bbs25']; ?>" size="50" /></td>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">二波中特：</td>
      <td width="40%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		<input name="bbs26" type="text" id="bbs26" value="<?php echo $list['bbs26']; ?>" size="50" /></td>
    </tr>
	<tr>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">一波中特：</td>
      <td width="40%" height="24" align="left" bgcolor="#f8f8f8">
	  <input name="bbs27" type="text" id="bbs27" value="<?php echo $list['bbs27']; ?>" size="50" /></td>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">二波中特：</td>
      <td width="40%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		<input name="bbs28" type="text" id="bbs28" value="<?php echo $list['bbs28']; ?>" size="50" /></td>
    </tr>

    <td height="22" colspan="4" align="center" bgcolor="#0000FF"><font  color="#FFFFFF">&nbsp;<strong>家野贴子内容</strong></font></td>
    </tr>
    <tr>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">家野中特：</td>
      <td width="40%" height="24" align="left" bgcolor="#f8f8f8">
	  <input name="bbs29" type="text" id="bbs29" value="<?php echo $list['bbs29']; ?>" size="50" /></td>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">家野中特：</td>
      <td width="40%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		<input name="bbs30" type="text" id="bbs30" value="<?php echo $list['bbs30']; ?>" size="50" /></td>
    </tr>
	<tr>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">家野中特：</td>
      <td width="40%" height="24" align="left" bgcolor="#f8f8f8">
	  <input name="bbs31" type="text" id="bbs31" value="<?php echo $list['bbs31']; ?>" size="50" /></td>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">家野中特：</td>
      <td width="40%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		<input name="bbs32" type="text" id="bbs32" value="<?php echo $list['bbs32']; ?>" size="50" /></td>
    </tr>

    <td height="22" colspan="4" align="center" bgcolor="#0000FF"><font  color="#FFFFFF">&nbsp;<strong>单双贴子内容</strong></font></td>
    </tr>
    <tr>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">单双中特：</td>
      <td width="40%" height="24" align="left" bgcolor="#f8f8f8">
	  <input name="bbs33" type="text" id="bbs33" value="<?php echo $list['bbs33']; ?>" size="50" /></td>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">单双中特：</td>
      <td width="40%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		<input name="bbs34" type="text" id="bbs34" value="<?php echo $list['bbs34']; ?>" size="50" /></td>
    </tr>
	<tr>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">单双中特：</td>
      <td width="40%" height="24" align="left" bgcolor="#f8f8f8">
	  <input name="bbs35" type="text" id="bbs35" value="<?php echo $list['bbs35']; ?>" size="50" /></td>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">单双中特：</td>
      <td width="40%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		<input name="bbs36" type="text" id="bbs36" value="<?php echo $list['bbs36']; ?>" size="50" /></td>
    </tr>

    <td height="22" colspan="4" align="center" bgcolor="#0000FF"><font  color="#FFFFFF">&nbsp;<strong>大小贴子内容</strong></font></td>
    </tr>
    <tr>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">大小中特：</td>
      <td width="40%" height="24" align="left" bgcolor="#f8f8f8">
	  <input name="bbs37" type="text" id="bbs37" value="<?php echo $list['bbs37']; ?>" size="50" /></td>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">大小中特：</td>
      <td width="40%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		<input name="bbs38" type="text" id="bbs38" value="<?php echo $list['bbs38']; ?>" size="50" /></td>
    </tr>
	<tr>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">大小中特：</td>
      <td width="40%" height="24" align="left" bgcolor="#f8f8f8">
	  <input name="bbs39" type="text" id="bbs39" value="<?php echo $list['bbs39']; ?>" size="50" /></td>
    </tr>
	 <tr>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">五行中特：</td>
      <td width="40%" height="24" align="left" bgcolor="#f8f8f8">
	  <input name="bbs40" type="text" id="bbs40" value="<?php echo $list['bbs40']; ?>" size="50" /></td>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">五行中特：</td>
      <td width="40%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		<input name="bbs41" type="text" id="bbs41" value="<?php echo $list['bbs41']; ?>" size="50" /></td>
    </tr>
	 <tr>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">男女中特：</td>
      <td width="40%" height="24" align="left" bgcolor="#f8f8f8">
	  <input name="bbs42" type="text" id="bbs42" value="<?php echo $list['bbs42']; ?>" size="50" /></td>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">男女中特：</td>
      <td width="40%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		<input name="bbs43" type="text" id="bbs43" value="<?php echo $list['bbs43']; ?>" size="50" /></td>
    </tr>
	 <tr>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">琴棋书画：</td>
      <td width="40%" height="24" align="left" bgcolor="#f8f8f8">
	  <input name="bbs44" type="text" id="bbs44" value="<?php echo $list['bbs44']; ?>" size="50" /></td>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">琴棋书画：</td>
      <td width="40%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		<input name="bbs45" type="text" id="bbs45" value="<?php echo $list['bbs45']; ?>" size="50" /></td>
    </tr>
	
	  <td height="22" colspan="4" align="center" bgcolor="#0000FF"><font  color="#FFFFFF">&nbsp;<strong>诗句贴子内容</strong></font></td>
    </tr>
    <tr>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">三肖平特：</td>
      <td width="40%" height="24" align="left" bgcolor="#f8f8f8">
	  <input name="bbs46" type="text" id="bbs46" value="<?php echo $list['bbs46']; ?>" size="50" /></td>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">一肖平特：</td>
      <td width="40%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		<input name="bbs47" type="text" id="bbs47" value="<?php echo $list['bbs47']; ?>" size="50" /></td>
    </tr>
	<tr>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">诗句平特：</td>
      <td width="40%" height="24" align="left" bgcolor="#f8f8f8">
	  <input name="bbs48" type="text" id="bbs48" value="<?php echo $list['bbs48']; ?>" size="50" /></td>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">诗句平特：</td>
      <td width="40%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		<input name="bbs49" type="text" id="bbs49" value="<?php echo $list['bbs49']; ?>" size="50" /></td>
    </tr>
	<tr>
      <td width="7%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">诗句平特：</td>
      <td width="40%" height="24" align="left" bgcolor="#f8f8f8">
	  <input name="bbs50" type="text" id="bbs50" value="<?php echo $list['bbs50']; ?>" size="50" /></td>
    </tr>
	
	
	 <tr>
      <td height="24" bgcolor="#f8f8f8">　</td><input type="hidden" name="id" value="<?php echo $id; ?>">
      <td height="24" bgcolor="#f8f8f8" colspan="3"><input type="submit" name="button" id="button" value="提交" /></td>
    </tr>
	
  </form>
</table>

</body>
</html>
