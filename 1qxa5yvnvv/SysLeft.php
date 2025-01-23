<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="css/admin_css.css" rel="stylesheet" type="text/css" />
</head>
<SCRIPT language="javascript1.2">
function showmenu(sid)
{
whichEl = eval("menuname" + sid);
if (whichEl.style.display == "none")
{
eval("menuname" + sid + ".style.display=\"\";");
}
else
{
eval("menuname" + sid + ".style.display=\"none\";");
}
}

function showsubmenu(sid)
{
whichEl = eval("submenu" + sid);
if (whichEl.style.display == "none")
{
eval("submenu" + sid + ".style.display=\"\";");
}
else
{
eval("submenu" + sid + ".style.display=\"none\";");
}
}
</SCRIPT>
<body>
<table width="199" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle"><img src="images/control.gif" width="199" height="55" /></td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100%" align="center" valign="top"><table width="100%" height="158" border="0" cellpadding="0" cellspacing="0" class="left_main_table">
        <tr>
          <td width="100%" align="center" valign="top" bgcolor="#FFFFFF"><table cellspacing="0" cellpadding="0" width="100%" align="center" >
            </table>
            <table width="99%" height="25" border="0" cellpadding="0" cellspacing="0" class="sub_table">
              <tr>
                <td height="26" align="center" valign="middle" background="images/admin_left-titlebg.gif"><table width="100%" height="26" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="45" align="center" valign="middle" background="images/admin_left-titlebg.gif"><img src="images/admin_left-tubiao.gif" width="9" height="9" /></td>
                      <td align="left" valign="middle" background="images/admin_left-titlebg.gif" class="bai12"><strong><a href="SysMain.php" target="mainFrame" class="bai"><font color=yellow>管理首页</font></a></strong></td>
                    </tr>
                  </table></td>
              </tr>
            </table>

            <table width="99%" align="center" cellpadding="0" cellspacing="0" bgcolor="#333333">
              <tbody>
                <tr>
                  <td height="25" align="center" valign="middle" background="images/admin_left-titlebg.gif" class="menu_title" id="menuTitle3" style="CURSOR: hand"  onclick="showsubmenu(9)" onmouseover="this.className='menu_title2';" onmouseout="this.className='menu_title';">
				  <table width="100%" height="24" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="45" height="24" align="center" valign="middle" background="images/admin_left-titlebg.gif"><img src="images/admin_left-tubiao.gif" width="9" height="9" /></td>
                        <td align="left" valign="middle" background="images/admin_left-titlebg.gif" class="bai12"><strong class="bai">管理员中心</strong></td>
                      </tr>
                    </table></td>
                </tr>
                <tr>
                  <td align="center" valign="middle" bgcolor="#FFFFFF" id="submenu9" style="display:none" ><table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#dde3ec" class="sub_table">
                      <tbody>
                        <tr class="sub_table_tr">
                          <td width="45" height="26" align="center" class="sub_table_td"><img src="images/jt.gif" width="6" height="5" /></td>
                          <td height="26" align="left" class="sub_table_td"><a 
                  href="manager/admin_add.php" target="mainFrame">添加管理员</a></td>
                        </tr>
                        <tr>
                          <td width="45" height="26" align="center" class="sub_table_td"><img src="images/jt.gif" width="6" height="5" /></td>
                          <td height="26" align="left" class="sub_table_td"><a 
                  href="manager/admin_manage.php" target="mainFrame">管理员管理</a></td>
                        </tr>
                      </tbody>
                      <tbody>
                      </tbody>
                    </table></td>
                </tr>
              </tbody>
            </table>			
			
			 <table cellspacing="0" cellpadding="0" width="99%" align="center" >
              <tbody>
                <tr>
                  <td height="25" align="center" valign="middle" background="images/admin_left-titlebg.gif" class="menu_title" id="menuTitle1" style="CURSOR: hand" onclick="showsubmenu(0)" onmouseover="this.className='menu_title2';" onmouseout="this.className='menu_title';">
				  <table width="100%" height="26" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="45" align="center" valign="middle" background="images/admin_left-titlebg.gif"><img src="images/admin_left-tubiao.gif" width="9" height="9" /></td>
                        <td align="left" valign="middle" background="images/admin_left-titlebg.gif" class="bai12"><strong class="bai">开奖管理</strong></td>
                      </tr>
                    </table></td>
                </tr>
                <tr>
                  <td align="center" valign="middle" id="submenu0" style="display:block"><table width="100%" align="center" cellpadding="0" cellspacing="0" class="sub_table">
                      <tbody>
                        <tr class="sub_table_tr">
                          <td width="45" height="26" align="center" class="sub_table_td"><img src="images/jt.gif" width="6" height="5" /></td>
                          <td height="26" align="left" class="sub_table_td"><a 
                  href="kaijiang/add.php" target="mainFrame">添加开奖</a></td>
                        </tr>
                        <tr>
                          <td width="45" height="26" align="center" class="sub_table_td"><img src="images/jt.gif" width="6" height="5" /></td>
                          <td height="26" align="left" class="sub_table_td"><a 
                  href="kaijiang/manage.php" target="mainFrame">开奖列表</a></td>
                        </tr>
						 <tr>
                          <td width="45" height="26" align="center" class="sub_table_td"><img src="images/jt.gif" width="6" height="5" /></td>
                          <td height="26" align="left" class="sub_table_td"><a 
                  href="../inc/kaijiang.php" target="mainFrame">采集开奖<?php echo $addkj; ?></a></td>
                        </tr>
					    <tr>
                          <td width="45" height="26" align="center" class="sub_table_td"><img src="images/jt.gif" width="6" height="5" /></td>
                          <td height="26" align="left" class="sub_table_td"><a 
                  href="?act=add" >开奖更新</a></td>
                        </tr>
                      </tbody>
                    </table></td>
                </tr>
              </tbody>
            </table>
         
            <table width="99%" align="center" cellpadding="0" cellspacing="0" bgcolor="#333333">
              <tbody>
                <tr>
                  <td height="25" align="center" valign="middle" background="images/admin_left-titlebg.gif" class="menu_title" id="menuTitle3" style="CURSOR: hand"  onclick="showsubmenu(7)" onmouseover="this.className='menu_title2';" onmouseout="this.className='menu_title';">
				  <table width="100%" height="24" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="45" height="24" align="center" valign="middle" background="images/admin_left-titlebg.gif"><img src="images/admin_left-tubiao.gif" width="9" height="9" /></td>
                        <td align="left" valign="middle" background="images/admin_left-titlebg.gif" class="bai12"><strong class="bai">资料管理</strong></td>
                      </tr>
                    </table></td>
                </tr>
                <tr>
                  <td align="center" valign="middle" bgcolor="#FFFFFF" id="submenu7" style="display:none" ><table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#dde3ec" class="sub_table">
                      <tbody>
                        <tr>
                          <td width="45" height="26" align="center" class="sub_table_td"><img src="images/jt.gif" width="6" height="5" /></td>
                          <td height="26" align="left" valign="middle" class="sub_table_td"><a href="data/web.php" target="mainFrame">首页资料</a></td>
                        </tr>
                        <tr>
                          <td width="45" height="26" align="center" class="sub_table_td"><img src="images/jt.gif" width="6" height="5" /></td>
                          <td height="26" align="left" valign="middle" class="sub_table_td"><a href="bbs/web.php" target="mainFrame">帖子资料</a></td>
                        </tr>
						 <tr>
                          <td width="45" height="26" align="center" class="sub_table_td"><img src="images/jt.gif" width="6" height="5" /></td>
                          <td height="26" align="left" valign="middle" class="sub_table_td"><a href="bbs/name.php" target="mainFrame">作者名称</a></td>
                        </tr>
                      </tbody>
                      <tbody>
                      </tbody>
                    </table></td>
                </tr>
              </tbody>
            </table>
			
		     <table width="99%" align="center" cellpadding="0" cellspacing="0" bgcolor="#333333">
              <tbody>
                <tr>
                  <td height="25" align="center" valign="middle" background="images/admin_left-titlebg.gif" class="menu_title" id="menuTitle3" style="CURSOR: hand"  onclick="showsubmenu(66)" onmouseover="this.className='menu_title2';" onmouseout="this.className='menu_title';">
				  <table width="100%" height="24" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="45" height="24" align="center" valign="middle" background="images/admin_left-titlebg.gif"><img src="images/admin_left-tubiao.gif" width="9" height="9" /></td>
                        <td align="left" valign="middle" background="images/admin_left-titlebg.gif" class="bai12"><strong class="bai"><a href="tongji.php" target="mainFrame" class="bai">网站统计</a></strong></td>
                      </tr>
                    </table></td>
                </tr>
              </tbody>
            </table>
			
			
            <table cellspacing="0" cellpadding="0" width="99%" align="center">
              <tbody>
                <tr>
                  <td height="25" align="center" valign="middle" background="images/admin_left-titlebg.gif" class="menu_title" id="menuTitle2" style="CURSOR: hand" onclick="showsubmenu(99)" onmouseover="this.className='menu_title2';" onmouseout="this.className='menu_title';">
				  <table width="100%" height="26" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="45" align="center" valign="middle" background="images/admin_left-titlebg.gif"><img src="images/admin_left-tubiao.gif" width="9" height="9" /></td>
                        <td align="left" valign="middle" background="images/admin_left-titlebg.gif" class="bai12"><strong class="bai">技术支持</strong></td>
                      </tr>
                    </table></td>
                </tr>
                <tr>
                  <td align="center" valign="middle" id="submenu99"  style="display:none">
				  <table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#dde3ec" class="sub_table">
                      <tbody>
                        <tr>
                          <td width="15" height="24" align="center" class="sub_table_td">&nbsp;</td>
                          <td width="973" height="24" align="left" valign="middle" class="sub_table_td"><span class="hui12"><a href="http://www.492130.com" target="_blank">六合彩开奖管理系统</a></span></td>
                        </tr>
                        <tr>
                          <td height="24" align="center" class="sub_table_td">&nbsp;</td>
                          <td height="24" align="left" valign="middle" class="sub_table_td"><span class="hui12">当前版本：自动采集或自开系统</span></td>
                        </tr>
                        <tr>
                          <td height="24" align="center" class="sub_table_td">&nbsp;</td>
                          <td height="24" align="left" valign="middle" class="sub_table_td"><span class="hui12">二开功能：直播.动画.文字.视频</span></td>
                        </tr>
                        <tr>
                          <td height="24" align="center" class="sub_table_td">&nbsp;</td>
                          <td height="24" align="left" valign="middle" class="sub_table_td"><span class="hui12">联系我们：<a href="http://www.492130.com" target="blank">www.492130.com</a></span></td>
                        </tr>
                        <tr>
                          <td width="15" height="24" align="center" class="sub_table_td">&nbsp;</td>
                          <td height="24" align="left" valign="middle" class="sub_table_td"><span class="hui12">专业建站，诚信第一，网络服务</span></td>
                        </tr>
                      </tbody>
                      <tbody>
                      </tbody>
                    </table></td>
                </tr>
              </tbody>
            </table>
			
            <table width="99%" height="25" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="26" align="center" valign="middle" background="images/admin_left-titlebg.gif"><table width="100%" height="26" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="45" align="center" valign="middle" background="images/admin_left-titlebg.gif"><img src="images/admin_left-tubiao.gif" width="9" height="9" /></td>
                      <td align="left" valign="middle" background="images/admin_left-titlebg.gif" class="bai12"><strong><a href="login.php?act=quit" target="_parent" class="bai" onclick="javascript:return confirm('确实要退出管理吗?')"><font color=yellow>退出管理</span></a></strong></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
      </table>
      <div style="display:none"></div></td>
  </tr>
</table>
</body>
</html>
<?php
include '../inc/const.php'; 
$act = trim($_GET['act']);
if ($act=='add') {
$weekarray=array("日","一","二","三","四","五","六");	
$list = $db->getonerow(get_sql("select * from {pre}ls_lottery where id=".$addkj." order by id desc"));
$log='{"k":"'.$list['issue'].','.$list['num1'].','.$list['num2'].','.$list['num3'].','.$list['num4'].','.$list['num5'].','.$list['num6'].','.$list['num7'].','.$list['nextissue'].','.substr($list['nextissuetime'],5,2).','.substr($list['nextissuetime'],8,2).','.$weekarray[date("w",strtotime($list['nextissuetime']))].',21:30:00,2025","t":"1000","tool":"#492130#com","url":"","lhc":"","ok":"0"}';
file_put_contents("../492130.com.json",$log);
echo "<script>alert('开奖生成成功');</script>";
}
?>