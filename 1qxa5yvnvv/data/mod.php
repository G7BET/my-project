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
$list = $db->getOneRow(get_sql("select * from {pre}ziliao where id = " . $id));
//die($list);
//die($result1);
?>
<table width="1115" height="22" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc" style="margin:0 auto;padding-top:0px;">
  <form name="form" action="ok.php?act=mod" method="POST" onSubmit="return checkreg();">
        <tr>
      <td height="16" colspan="3" bgcolor="#555555"><font color="#FFFFFF">&nbsp;<strong>资料修改『第<?php echo $list['qishu']; ?>期』</strong></font></td>
    </tr>
	<tr>
      <td width="143" height="30" align="right" valign="middle" bgcolor="#f8f8f8">六肖六码：</td>
      <td width="382" height="30" align="left" valign="middle" bgcolor="#f8f8f8"><input name="liuxiao" type="text" id="liuxiao" value="<?php echo $list['liuxiao']; ?>" size="50" /></td>
      <td width="586" height="30" align="left" valign="middle" bgcolor="#f8f8f8">
		推选六肖：<input name="ziliao1" type="text" id="ziliao1" value="<?php echo $list['ziliao1']; ?>" size="50" /></td>
    </tr>
    <tr>
      <td width="143" height="24" align="right" valign="middle" bgcolor="#f8f8f8">六肖六码：</td>
      <td width="382" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="liuma" type="text" id="liuma" value="<?php echo $list['liuma']; ?>" size="50" />
      </td>
      <td width="586" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		二十四码：<input name="ziliao2" type="text" id="ziliao2" value="<?php echo $list['ziliao2']; ?>" size="50" /></td>
    </tr>
	    <tr>
      <td width="143" height="24" align="right" valign="middle" bgcolor="#f8f8f8">成语平特：</td>
      <td width="382" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="chengyu" type="text" id="chengyu" value="<?php echo $list['chengyu']; ?>" size="50" />
      </td>
      <td width="586" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		四肖四肖：<input name="ziliao3" type="text" id="ziliao3" value="<?php echo $list['ziliao3']; ?>" size="50" /></td>
    </tr>
	    <tr>
      <td width="143" height="24" align="right" valign="middle" bgcolor="#f8f8f8">单双12码：</td>
      <td width="382" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="shierma" type="text" id="shierma" value="<?php echo $list['shierma']; ?>" size="50" />
      </td>
      <td width="586" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		六码六码：<input name="ziliao4" type="text" id="ziliao4" value="<?php echo $list['ziliao4']; ?>" size="50" /></td>
    </tr>
	    <tr>
      <td width="143" height="24" align="right" valign="middle" bgcolor="#f8f8f8">规律六肖：</td>
      <td width="382" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="guilvliuxiao" type="text" id="guilvliuxiao" value="<?php echo $list['guilvliuxiao']; ?>" size="50" />
      </td>
      <td width="586" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		九肖九肖：<input name="ziliao5" type="text" id="ziliao5" value="<?php echo $list['ziliao5']; ?>" size="50" /></td>
    </tr>
	    <tr>
      <td width="143" height="24" align="right" valign="middle" bgcolor="#f8f8f8">平特一尾：</td>
      <td width="382" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="yiwei" type="text" id="yiwei" value="<?php echo $list['yiwei']; ?>" size="50" />
      </td>
      <td width="586" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		十码十码：<input name="ziliao6" type="text" id="ziliao6" value="<?php echo $list['ziliao6']; ?>" size="50" /></td>
    </tr>
	    <tr>
      <td width="143" height="24" align="right" valign="middle" bgcolor="#f8f8f8">三头中特：</td>
      <td width="382" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="santou" type="text" id="santou" value="<?php echo $list['santou']; ?>" size="50" />
      </td>
      <td width="586" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		三肖三肖：<input name="ziliao7" type="text" id="ziliao7" value="<?php echo $list['ziliao7']; ?>" size="50" /></td>
    </tr>
	    <tr>
      <td width="143" height="24" align="right" valign="middle" bgcolor="#f8f8f8">五尾中特：</td>
      <td width="382" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="wuwei" type="text" id="wuwei" value="<?php echo $list['wuwei']; ?>" size="50" />
      </td>
      <td width="586" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		三肖三肖：<input name="ziliao8" type="text" id="ziliao8" value="<?php echo $list['ziliao8']; ?>" size="50" /></td>
    </tr>
	<tr>
      <td width="143" height="24" align="right" valign="middle" bgcolor="#f8f8f8">九肖九码：</td>
      <td width="382" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="jiuxiao" type="text" id="jiuxiao" value="<?php echo $list['jiuxiao']; ?>" size="50" />
      </td>
      <td width="586" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		二尾二尾：<input name="ziliao9" type="text" id="ziliao9" value="<?php echo $list['ziliao9']; ?>" size="50" /></td>
    </tr>
		<tr>
      <td width="143" height="24" align="right" valign="middle" bgcolor="#f8f8f8">九肖九码：</td>
      <td width="382" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="jiuma" type="text" id="jiuma" value="<?php echo $list['jiuma']; ?>" size="50" />
      </td>
      <td width="586" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		五肖五肖：<input name="ziliao10" type="text" id="ziliao10" value="<?php echo $list['ziliao10']; ?>" size="50" /></td>
    </tr>
	<tr>
      <td width="143" height="24" align="right" valign="middle" bgcolor="#f8f8f8">大小中特：</td>
      <td width="382" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="daxiao" type="text" id="daxiao" value="<?php echo $list['daxiao']; ?>" size="50" /><input type="hidden" name="tjz" value="<?php echo $_SESSION['username']; ?>">
      </td>
      <td width="586" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		家禽野兽：<input name="ziliao11" type="text" id="ziliao11" value="<?php echo $list['ziliao11']; ?>" size="50" /></td>
    </tr>
	<tr>
      <td width="143" height="24" align="right" valign="middle" bgcolor="#f8f8f8">单双中特：</td>
      <td width="382" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="danshuang" type="text" id="danshuang" value="<?php echo $list['danshuang']; ?>" size="50" />
      </td>
      <td width="586" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		单双单双：<input name="ziliao12" type="text" id="ziliao12" value="<?php echo $list['ziliao12']; ?>" size="50" /></td>
    </tr>
	<tr>
      <td width="143" height="24" align="right" valign="middle" bgcolor="#f8f8f8">家野中特：</td>
      <td width="382" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="jiaye" type="text" id="jiaye" value="<?php echo $list['jiaye']; ?>" size="50" />
      </td>
      <td width="586" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		九肖九肖：<input name="ziliao13" type="text" id="ziliao13" value="<?php echo $list['ziliao13']; ?>" size="50" /></td>
    </tr>
	<tr>
      <td width="143" height="24" align="right" valign="middle" bgcolor="#f8f8f8">绝杀十码：</td>
      <td width="382" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="shama" type="text" id="shama" value="<?php echo $list['shama']; ?>" size="50" />
      </td>
      <td width="586" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
		诗句解诗：<input name="ziliao14" type="text" id="ziliao14" value="<?php echo $list['ziliao14']; ?>" size="50" /></td>
    </tr>
	<tr>
      <td width="143" height="24" align="right" valign="middle" bgcolor="#f8f8f8">玄机平特：</td>
      <td width="382" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="shiju" type="text" id="shiju" value="<?php echo $list['shiju']; ?>" size="50" />
      </td>
      <td width="586" height="24" align="left" valign="middle" bgcolor="#f8f8f8">　</td>
    </tr>
	<tr>
      <td width="143" height="24" align="right" valign="middle" bgcolor="#f8f8f8">琴棋书画：</td>
      <td width="382" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="qqsh" type="text" id="qqsh" value="<?php echo $list['qqsh']; ?>" size="50" />
      </td>
      <td width="586" height="24" align="left" valign="middle" bgcolor="#f8f8f8">　</td>
    </tr>
	<tr>
      <td width="143" height="24" align="right" valign="middle" bgcolor="#f8f8f8">男女中特：</td>
      <td width="382" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="nannv" type="text" id="nannv" value="<?php echo $list['nannv']; ?>" size="50" />
      </td>
      <td width="586" height="24" align="left" valign="middle" bgcolor="#f8f8f8">　</td>
    </tr>
	<tr>
      <td width="143" height="24" align="right" valign="middle" bgcolor="#f8f8f8">五行中特：</td>
      <td width="382" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="wuxing" type="text" id="wuxing" value="<?php echo $list['wuxing']; ?>" size="50" />
      </td>
      <td width="586" height="24" align="left" valign="middle" bgcolor="#f8f8f8">　</td>
    </tr>
	<tr>
      <td width="143" height="24" align="right" valign="middle" bgcolor="#f8f8f8">波色中特：</td>
      <td width="382" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="bose" type="text" id="bose" value="<?php echo $list['bose']; ?>" size="50" />
      </td>
      <td width="586" height="24" align="left" valign="middle" bgcolor="#f8f8f8">　</td>
    </tr>
	<tr>
      <td width="143" height="24" align="right" valign="middle" bgcolor="#f8f8f8">解诗中特：</td>
      <td width="382" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="jieshi" type="text" id="jieshi" value="<?php echo $list['jieshi']; ?>" size="50" />
      </td>
      <td width="586" height="24" align="left" valign="middle" bgcolor="#f8f8f8">　</td>
    </tr>
     <tr>
      <td height="24" bgcolor="#f8f8f8">　</td><input type="hidden" name="id" value="<?php echo $id; ?>">
      <td height="24" bgcolor="#f8f8f8" colspan="2"><input type="submit" name="button" id="button" value="提交" /></td>
    </tr>
	
  </form>
</table>

</body>
</html>
