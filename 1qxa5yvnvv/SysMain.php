<?php session_start(); ?>
<?php
require 'session.php'; include '../inc/const.php';
?>
<?php 


$act = trim($_GET['act']);
$id = getvar('id');

if ($act=='mod'){
	
	$record = array(
'name'=>$_POST ['name'],	
'title'=>$_POST ['title'],
'yuming'=>$_POST ['yuming'],
'tuzhi'=>$_POST ['tuzhi'],
'tuxuan'=>$_POST ['tuxuan'],
'tuwen'=>$_POST ['tuwen'],
'kaijiangapi'=>$_POST ['kaijiangapi'],
'dinggao'=>$_POST ['dinggao'],
'dingad'=>$_POST ['dingad'],
'tongji'=>$_POST ['tongji'],
'gonggao'=>$_POST ['gonggao'],
'zhongad'=>$_POST ['zhongad'],
'zhonggao'=>$_POST ['zhonggao'],
'digao'=>$_POST ['digao'],
'diad'=>$_POST ['diad'],
'heigao'=>$_POST ['heigao'],
'heiad'=>$_POST ['heiad'],
'tougao'=>$_POST ['tougao'],
'touad'=>$_POST ['touad'],
'tangao'=>$_POST ['tangao'],
'tanad'=>$_POST ['tanad'],
'jieritu'=>$_POST ['jieritu'],
'app'=>$_POST ['app'],
'biaoti'=>$_POST ['biaoti'],
'youqing'=>$_POST ['youqing'],
'weigao'=>$_POST ['weigao'],
'weixin'=>$_POST ['weixin'],
'lungao'=>$_POST ['lungao'],
'lunad'=>$_POST ['lunad'],
	);
	
	$db->update($GLOBALS[databasePrefix].'config',$record,'id=1');
	echo "<script>alert('修改成功!');window.location='SysMain.php';</script>";
}

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="css/admin_css.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<script>
function checksubmit()
{
if (document.form1.sitename.value=="") {
	window.alert("站点名称不能为空！！");
	document.form1.sitename.focus();		
	 return (false);
	}
if (document.form1.httpurl.value=="") {
	window.alert("站点域名不能为空！！");
	document.form1.httpurl.focus();		
	 return (false);
	}
if (document.form1.installdir.value=="") {
	window.alert("安装目录不能为空！！");
	document.form1.installdir.focus();		
	 return (false);
	}
	return true;
}
</script>
<body>
<?php
$list = $db->getOneRow(get_sql("select * from {pre}config where id =1"));
//die($list);
//die($result1);
?>
<table width="100%" border="0" cellpadding="1" cellspacing="1" bgcolor="#cccccc" style="margin:0 auto;padding-top:0px;">

  <form action="upload_file.php" method="post" enctype="multipart/form-data">
  <tr>
    <td height="22" colspan="12" bgcolor="#555555"><font color="#FFFFFF">&nbsp;<strong>图片上传-<label for="file">文件名：</label><input type="file" name="file" id="file"><input type="submit" name="submit" value="上传"></strong></font></td>
  </tr>
  </form>

   <form name="myform" action="?act=mod" method="POST" onSubmit="return checkreg();">
  <tr>
    <td height="24" colspan="2" align="left" valign="middle" bgcolor="#f1f1f1" class="sys_title">
	　　<span class="hong">站点基本信息<font color="#0000FF"></font></span></td>
  </tr>
  <tr>
    <td width="150" height="24" align="right" valign="middle" bgcolor="#f1f1f1"> 
	　站点标题：</td>
    <td width="1101" height="24" bgcolor="#f1f1f1"><input name="biaoti" type="text" class="login_text" id="biaoti"  value="<?php echo $list['biaoti'];?>"/>
      </td>
  </tr>
    <tr>
    <td width="150" height="24" align="right" valign="middle" bgcolor="#f1f1f1"> 
	　站点名称：</td>
    <td width="1101" height="24" bgcolor="#f1f1f1"><input name="title" type="text" class="login_text" id="title"  value="<?php echo $list['title'];?>"/>
      </td>
  </tr>
  <tr>
    <td width="150" height="24" align="right" valign="middle" bgcolor="#f1f1f1"> 
	　站点简称：</td>
    <td width="1101" height="24" bgcolor="#f1f1f1"><input name="name" type="text" class="login_text" id="name"  value="<?php echo $list['name'];?>"/>
     <span class="hong">*</span>　<span class="hui"> 选择什么皮肤就填什么名称</span> </td>
  </tr>
  <tr>
    <td width="150" height="24" align="right" valign="middle" bgcolor="#f1f1f1">
	　本站域名：</td>
    <td width="1101" height="24" bgcolor="#f1f1f1"><input name="yuming" type="text" class="login_text" id="yuming" value="<?php echo $list['yuming'];?>"/>
    </td>
  </tr>
    <tr>
    <td width="150" height="24" align="right" valign="middle" bgcolor="#f1f1f1">
	　图库地址：</td>
    <td width="1101" height="24" bgcolor="#f1f1f1"><input name="tuzhi" type="text" class="login_text" id="tuzhi" value="<?php echo $list['tuzhi'];?>"/>
    <span class="hong">*</span>　<span class="hui">第三方图地址接口（建议有能力自主采集图库调用以免第三方带广告）</span></td>
  </tr>

  	<tr>
    <td width="150" height="24" align="right" valign="middle" bgcolor="#f1f1f1">
	　图库类型：</td>
    <td width="1101" height="24" bgcolor="#f1f1f1">
	<select size="1" id="tuxuan" name="tuxuan">
	<option value="<?php echo $list['tuxuan']; ?>"><?php 
                if ($list['tuxuan']=="1"){
                ?>
                香港图库
                <?php 
                }elseif($list['tuxuan']=="2"){
                ?>
              	澳门图库
              	<?php 
                }
                ?></option>
	<option value="1">香港图库</option>
	<option value="2">澳门图库</option>
	</select>
    <span class="hong">*</span>　<span class="hui"> 免费api图库调用700多套无水印</span></td>
  </tr>
  
  
  
  
      <tr>
    <td width="150" height="24" align="right" valign="middle" bgcolor="#f1f1f1">
	　本站统计：</td>
    <td width="1101" height="24" bgcolor="#f1f1f1"><input maxlength="25" name="tuwen" type="text" class="login_text" id="tuwen" value="<?php echo $list['tuwen'];?>"/>
    <span class="hong">*</span>　<span class="hui"> 本站内部网站统计流量数据</span></td>
  </tr>
  <tr>
    <td width="150" height="24" align="right" valign="middle" bgcolor="#f1f1f1">
	　开奖地址：</td>
    <td width="1101" height="24" bgcolor="#f1f1f1">
	<select size="1" id="kaijiangapi" name="kaijiangapi">
	<option value="<?php echo $list['kaijiangapi']; ?>"><?php 
                if ($list['kaijiangapi']=="0"){
                ?>
                本站开奖
                <?php 
                }elseif($list['kaijiangapi']=="1"){
                ?>
              	外部开奖澳门
				<?php 
                }elseif($list['kaijiangapi']=="2"){
                ?>
				外部开奖香港
              	<?php 
                }
                ?></option>
	<option value="0">本站开奖</option>
	<option value="1">外部开奖澳门</option>
	<option value="2">外部开奖香港</option>
	</select>  <span class="hong">*</span>　<span class="hui">本站调用是按自主或采集时间显示开奖结果，外部调用是时时展示开奖结果</span></td>
  </tr>
    <tr>
    <td width="150" height="24" align="right" valign="middle" bgcolor="#f1f1f1">
	　网站公告：</td>
    <td width="1101" height="24" bgcolor="#f1f1f1">
	<input name="gonggao" type="text" class="login_text" id="gonggao" value="<?php echo $list['gonggao'];?>"/>
    </td>
  </tr>
    <tr>
    <td width="150" height="24" align="right" valign="middle" bgcolor="#f1f1f1">
	　节日图：</td>
    <td width="1101" height="24" bgcolor="#f1f1f1">
	<input name="jieritu" type="text" class="login_text" id="jieritu" value="<?php echo $list['jieritu'];?>"/>
	 <span class="hong">*</span>　<span class="hui"> 
	地址都是tuku/上传图片名称.(jpg/pnf/gif)可调用外链可做域名收藏图</span></td>
  </tr>
      <tr>
    <td width="150" height="24" align="right" valign="middle" bgcolor="#f1f1f1">
	　友情链接：</td>
    <td width="1101" height="24" bgcolor="#f1f1f1">
	<input style="width:500px" name="youqing" type="text" class="login_text" id="youqing" value='<?php echo $list['youqing'];?>'/>
    <span class="hong">*</span>　<span class="hui"> <a target="_blank" href="sm.html"><font color="#FF0000">
	重要说明文档</font></a></span></td>
  </tr>
	<tr>
    <td width="150" height="24" align="right" valign="middle" bgcolor="#f1f1f1">
	　幻灯广告：</td>
    <td width="1101" height="24" bgcolor="#f1f1f1">
	<select size="1" id="lungao" name="lungao">
	<option value="<?php echo $list['lungao']; ?>"><?php 
                if ($list['lungao']==" "){
                ?>
                广告运行
                <?php 
                }elseif($list['lungao']=="display: none"){
                ?>
              	广告关闭
              	<?php 
                }
                ?></option>
	<option value=" ">运行</option>
	<option value="display: none">关闭</option>
	</select>
    <input style="width:500px" name="lunad" type="text" class="login_text" id="lunad" value='<?php echo $list['lunad'];?>'/>
    <span class="hong">*</span>　<span class="hui"><a href="javascript:void(0);" onclick="guanggao()">页面广告说明</a></span>
	</td>
  </tr>
      <td width="150" height="24" align="right" valign="middle" bgcolor="#f1f1f1">
	　顶部广告：</td>
    <td width="1101" height="24" bgcolor="#f1f1f1">
	<select size="1" id="dinggao" name="dinggao">
	<option value="<?php echo $list['dinggao']; ?>"><?php 
                if ($list['dinggao']==" "){
                ?>
                广告运行
                <?php 
                }elseif($list['dinggao']=="display: none"){
                ?>
              	广告关闭
              	<?php 
                }
                ?></option>
	<option value=" ">运行</option>
	<option value="display: none">关闭</option>
	</select>
    <input style="width:500px" name="dingad" type="text" class="login_text" id="dingad" value='<?php echo $list['dingad'];?>'/>
	<span class="hong">*</span>　<span class="hui">附带在帖子页面</span>
	</td>
  </tr>
  	<tr>
    <td width="150" height="24" align="right" valign="middle" bgcolor="#f1f1f1">
	　中部广告：</td>
    <td width="1101" height="24" bgcolor="#f1f1f1">
	<select size="1" id="zhonggao" name="zhonggao">
	<option value="<?php echo $list['zhonggao']; ?>"><?php 
                if ($list['zhonggao']==" "){
                ?>
                广告运行
                <?php 
                }elseif($list['zhonggao']=="display: none"){
                ?>
              	广告关闭
              	<?php 
                }
                ?></option>
	<option value=" ">运行</option>
	<option value="display: none">关闭</option>
	</select>
    <input style="width:500px" name="zhongad" type="text" class="login_text" id="zhongad" value='<?php echo $list['zhongad'];?>'/></td>
  </tr>
    <tr>
    <td width="150" height="24" align="right" valign="middle" bgcolor="#f1f1f1">
	　低部广告：</td>
    <td width="1101" height="24" bgcolor="#f1f1f1">
	<select size="1" id="digao" name="digao">
	<option value="<?php echo $list['digao']; ?>"><?php 
                if ($list['digao']==" "){
                ?>
                广告运行
                <?php 
                }elseif($list['digao']=="display: none"){
                ?>
              	广告关闭
              	<?php 
                }
                ?></option>
	<option value=" ">运行</option>
	<option value="display: none">关闭</option>
	</select>
    <input style="width:500px" name="diad" type="text" class="login_text" id="diad" value='<?php echo $list['diad'];?>'/></td>
  </tr>
  <tr>
    <td width="150" height="24" align="right" valign="middle" bgcolor="#f1f1f1">
	　黑条广告：</td>
    <td width="1101" height="24" bgcolor="#f1f1f1">
	<select size="1" id="heigao" name="heigao">
	<option value="<?php echo $list['heigao']; ?>"><?php 
                if ($list['heigao']==" "){
                ?>
                广告运行
                <?php 
                }elseif($list['heigao']=="display: none"){
                ?>
              	广告关闭
              	<?php 
                }
                ?></option>
	<option value=" ">运行</option>
	<option value="display: none">关闭</option>
	</select>
    <input style="width:500px" name="heiad" type="text" class="login_text" id="heiad" value='<?php echo $list['heiad'];?>'/>
		<span class="hong">*</span>　<span class="hui"><a href="javascript:void(0);" onclick="hei()">黑条广告说明</a></span>
	</td>
  </tr>
    <tr>
    <td width="150" height="24" align="right" valign="middle" bgcolor="#f1f1f1">
	　投注广告：</td>
    <td width="1101" height="24" bgcolor="#f1f1f1">
	<select size="1" id="tougao" name="tougao">
	<option value="<?php echo $list['tougao']; ?>"><?php 
                if ($list['tougao']==" "){
                ?>
                广告运行
                <?php 
                }elseif($list['tougao']=="display: none"){
                ?>
              	广告关闭
              	<?php 
                }
                ?></option>
	<option value=" ">运行</option>
	<option value="display: none">关闭</option>
	</select>
    <input style="width:500px" name="touad" type="text" class="login_text" id="touad" value='<?php echo $list['touad'];?>'/>
	<span class="hong">*</span>　<span class="hui"><a href="javascript:void(0);" onclick="tou()">投注广告说明</a></span>
	</td>
  </tr>
  <tr>
    <td width="150" height="24" align="right" valign="middle" bgcolor="#f1f1f1">
	　弹出广告：</td>
    <td width="1101" height="24" bgcolor="#f1f1f1">
	<select size="1" id="tangao" name="tangao">
	<option value="<?php echo $list['tangao']; ?>"><?php 
                if ($list['tangao']==" "){
                ?>
                广告运行
                <?php 
                }elseif($list['tangao']=="display: none"){
                ?>
              	广告关闭
              	<?php 
                }
                ?></option>
	<option value=" ">开启</option>
	<option value="display: none">关闭</option>
	</select>
	<textarea rows="2" name="tanad" type="text" class="login_text" id="tanad" style="width: 500px; height: 45px;"><?php echo $list['tanad'];?></textarea>
   <a target="_blank" href="sm.html">←代码获取</a><span class="hong">*</span>　<span class="hui"><a href="javascript:void(0);" onclick="tan()">弹出广告说明</a></span></td>
  </tr>
  <tr>
    <td width="150" height="24" align="right" valign="middle" bgcolor="#f1f1f1">
	　弹出微信：</td>
    <td width="1101" height="24" bgcolor="#f1f1f1">
	<select size="1" id="weigao" name="weigao">
	<option value="<?php echo $list['weigao']; ?>"><?php 
                if ($list['weigao']=="1"){
                ?>
                广告运行
                <?php 
                }elseif($list['weigao']==" "){
                ?>
              	广告关闭
              	<?php 
                }
                ?></option>
	<option value="1">开启</option>
	<option value=" ">关闭</option>
	</select>
	<input style="width:500px" name="weixin" type="text" class="login_text" id="weixin" value='<?php echo $list['weixin'];?>'/>
    <span class="hong">*</span>　<span class="hui"><a href="javascript:void(0);" onclick="weixin()">微信帮助说明</a></span></td>
  </tr>
  	<tr>
    <td width="150" height="24" align="right" valign="middle" bgcolor="#f1f1f1">
	　网站皮肤：</td>
    <td width="1101" height="24" bgcolor="#f1f1f1">
	<select size="1" id="tongji" name="tongji">
	<option value="<?php echo $list['tongji']; ?>"><?php 
                if ($list['tongji']=="0"){
                echo "王中王";
                }elseif($list['tongji']=="1"){
                echo "摇钱树"; 
                }elseif($list['tongji']=="2"){
                echo "中特网"; 
                }elseif($list['tongji']=="3"){
                echo "大联盟"; 
                }elseif($list['tongji']=="4"){
                echo "广东会"; 
                }elseif($list['tongji']=="5"){
                echo "慈善网"; 
                }elseif($list['tongji']=="6"){
                echo "大赢家"; 
                }elseif($list['tongji']=="7"){
                echo "彩霸王"; 
                }elseif($list['tongji']=="8"){
                echo "金光佛"; 
                }elseif($list['tongji']=="9"){
                echo "彩民网"; 
                }elseif($list['tongji']=="10"){
                echo "聚宝盆"; 
                }elseif($list['tongji']=="11"){
                echo "状元红"; 
                }elseif($list['tongji']=="12"){
                echo "九点半"; 
                }elseif($list['tongji']=="13"){
                echo "钱多多"; 
                }elseif($list['tongji']=="14"){
                echo "大三巴"; 
                }elseif($list['tongji']=="15"){
                echo "妈祖阁"; 
                }
                ?></option>
	<option value="0">王中王</option>
	<option value="1">摇钱树</option>
	<option value="2">中特网</option>
	<option value="3">大联盟</option>
	<option value="4">广东会</option>
	<option value="5">慈善网</option>
	<option value="6">大赢家</option>
	<option value="7">彩霸王</option>
	<option value="8">金光佛</option>
	<option value="9">彩民网</option>
	<option value="10">聚宝盆</option>
	<option value="11">状元红</option>
	<option value="12">九点半</option>
	<option value="13">钱多多</option>
	<option value="14">大三巴</option>
	<option value="15">妈祖阁</option>
	</select>
	<span class="hong">*</span>　<span class="hui">群站皮肤以及网站名称</span></td>
  </tr>
  <tr>
    <td width="150" height="24" align="right" valign="middle" bgcolor="#f1f1f1">
	&nbsp;</td>
    <td width="1101" height="24" bgcolor="#f1f1f1"><input name="button" type="submit" class="login_text" style="width:50px;" id="button" value="确定"/></td>
  </tr>
  </form>
</table>
 <script>
function weixin() {
alert("微信号填写 以 | 符号隔开\n相对应的微信图片必须和微信号名称一样\n后台上传tuku文件即可\n图片格式统一.jpg格式 200*200大小\n多个微信号是随机展示");
    }
function tan() {
alert("如果你是运行文字弹窗,请关闭微信广告\n如果是你运行微信弹窗引粉请替换文字代码\n两者都不运行请选择关闭");
    }
function hei() {
alert("黑条广告是运行在底部\n三个内个都以 | 符合隔开\n格式如下：\n做六合彩网站就上492130.com|https://492130.com|下载APP");
    }
function tou() {
alert("右侧投注广告是两个内容以 | 符合隔开\n格式如下：\n投注|连接地址");
    }
function guanggao() {
alert("顶中底三个广告必须有是双内容\n 内容是以 | 符号隔开对应可以添加多条\n图片可以外链地址格式如下\n 连接地址|图片地址|连接地址|图片地址");
    }	
</script>
</body>
</html>
