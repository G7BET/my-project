<?php
require_once("inc/const.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1"><meta name="applicable-device" content="mobile">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="favicon.ico">
<title><?php echo $list['name'];?></title>
<link rel="stylesheet" type="text/css" href="images/style.css">
<script type="text/javascript" src="/static/js/jquery1.7.2.min.js"></script>
</head>
<body>
<div class="header clearfix index-header">
<div class="logo-box clearfix">
            <div class="logo">
                <img src="pifu/<?php echo $list['tongji'];?>/logo.png" alt="" class="logo-img">
            </div>
			<img class="center-icon" src="images/zhuan.png" alt="" srcset="">
            <div class="bank">
                <a href="/"><img src="images/sb.png" alt=""></a>
            </div>
        </div> 
		
<div style="background:#ffffff;">
        <div class="news-title">
			<img src="images/news.png" />最新消息：</div>
        <div class="txtMarquee-left">
            <marquee scrollamount="3" scrolldelay="50" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
              <?php echo $list['gonggao'];?></marquee>
        </div>
   			<div class="cgi-body"></div>
</div>		
    </div>
	
<div style="height:90px"></div>

<style>
.lottery-container {
  background-image: linear-gradient(to right, #ffffff, #b3adec, #a9a1ea, #b0a8f1, #bab4f3, #a9a2f1, #ffffff);
  display: flex;
  justify-content: space-between;
  padding: 5px;
  border-radius: 10px;
}

.lottery-item {
  color: white;
  font-size: 24px;
  font-weight: bold;
  padding: 5px;
  width: 50%;
  text-align: center; 
  display: flex;
  justify-content: center; 
  align-items: center;
  border-radius: 20px;
  margin: 0 20px;
}
.lottery-container a{
  color: white;   
}
.hk-lottery {
  background-color: red;
}

.mo-lottery {
  background-color: green;
}
</style>
<!--顶部漂浮导航栏开始-->
<div class="dhl1" id="nav2" data-fixed="">
   <div  class="nav2">
<div class="subnav clearfix" style="margin:0">
<div class="clearfix">
<div class="lanmu">
<a><li class="lianjie" data-url="<?php if($list['tuxuan']=="1"){echo "tool/hk.html";}elseif($list['tuxuan']=="2"){echo "tool/mc.html";}?>" href="javascript:void(0);"><img src="pifu/<?php echo $list['tongji'];?>/icon1.png" alt="">经典图库</li> </a>
<a value="#gstz"><img src="pifu/<?php echo $list['tongji'];?>/icon2.png" alt="">高手专区</a> 
<a value="#zhzl"><img src="pifu/<?php echo $list['tongji'];?>/icon3.png" alt="">综合资料</a>
<a value="#dszt"><img src="pifu/<?php echo $list['tongji'];?>/icon4.png" alt="">单双中特</a> 
<a value="#quannian"><img src="pifu/<?php echo $list['tongji'];?>/icon5.png" alt="">全年资料</a> 
</div></div>
</div>
  </div>
  
<div class="lottery-container">
 <div class="lottery-item hk-lottery " id='am' onclick="queh(1)">香港六合彩</div>
 <!--<div class="lottery-item "  id='hk' onclick="queh(2)"><a href="https://6785119.com">香港六合彩</a></div>-->
  <div class="lottery-item  "  id='hk' onclick="queh(2)">澳门六合彩</div>
</div>	
	<script>
	function queh(i){
    	if(i==1){
    	    location.href = "http://www.baidu.com";
    	}else{
    	  	location.href = "http://www.hao123.com";
    	}
	}
	
	</script>
</div>

<!--顶部漂浮导航栏结束--> 
  
  
	<?php if($list['kaijiangapi']=="0"){?>
    <div id="kaijiangoff" class="kj-lotto">
        <div class="kj-lotto-tit">
            <div class="kj-lotto-tit1">澳門六合彩 第 <span id="q"></span> 期
             
                    <font color="#000000">開獎余时：</font><span id="timeBox">00:00:00</span>
               
            </div>
            <div class="kj-lotto-tit2"><a id="jilu" target="_blank" href=""></a></div>
        </div>
        <div class="kj-lotto-box">
            <ul>
                <li><span id="w1"><lable id="m1"></lable></span><em><lable id="m1x"></lable>/<lable id="m1w""></lable></em></li>
                <li><span id="w2"><lable id="m2"></lable></span><em><lable id="m2x"></lable>/<lable id="m2w""></lable></em></li>
                <li><span id="w3"><lable id="m3"></lable></span><em><lable id="m3x"></lable>/<lable id="m3w""></lable></em></li>
                <li><span id="w4"><lable id="m4"></lable></span><em><lable id="m4x"></lable>/<lable id="m4w""></lable></em></li>
                <li><span id="w5"><lable id="m5"></lable></span><em><lable id="m5x"></lable>/<lable id="m5w""></lable></em></li>
                <li><span id="w6"><lable id="m6"></lable></span><em><lable id="m6x"></lable>/<lable id="m6w""></lable></em></li>
                <li><span id="w7"><lable id="s1"></lable></span><em><lable id="s1x"></lable>/<lable id="s1w""></lable></em></li>
            </ul>
        </div>
        <div class="kj-lotto-foot">
            <div class="kj-lotto-foot1">第 <span id="nextQiShu"></span> 期：<span id="nextMonth"></span>月<span id="nextDay"></span>日 星期<span id="nextWeek"></span> <span id="nextTime"></span></div>
            <div class="kj-lotto-foot2"><a href="#" onClick="location.reload();return false;">刷 新</a></div>
        </div>
        <div id="tmpinfo" style="display:none;"></div>
    </div>
	<?php 
    }elseif($list['kaijiangapi']=="1"){	
    ?>
  <iframe width="100%" height="118" border="0" frameborder="0" scrolling="no" src="kaijiang.html?lhc=am"></iframe>
  <?php 
                }elseif($list['kaijiangapi']=="2"){
   ?>
 <iframe width="100%" height="118" border="0" frameborder="0" scrolling="no" src="kaijiang.html?lhc=hk"></iframe>
<?php } ?>
	
 
</div>

<!--顶部漂浮导航栏结束-->


<div class="box news-box">
<div class="riqi">
<script type="text/javascript" src="riqi.js"></script>
</div>
</div>
<div class="box padt xjct">
<img src="images/yys.png" width="100%"> 
<img src="images/djsc.gif" width="100%"> 
</div>
<div class="box news-box">
<div class="haoju"><font color="#FFFFFF">特码资料哪里看，关注<?php echo $list['name'];?><?php echo $list['yuming'];?></font></div>
</div>


<div class="subox" style="<?php echo $list['lungao'];?>;">
 
<?php
$lunad = explode('|',$list['lunad']);
?>
<table border='0' width='100%' cellspacing='0' cellpadding='0'>
	<tr>
		<td><a target="_blank" href="<?php echo $lunad[0];?>"><img id='imgs' border='0' src='<?php echo $lunad[1];?>' width='100%'></a></td>
	</tr>
</table>
    </div>
 

    <!--- 新春LOGOStart --->
	<div class="box pad" id="yxym">	
    <div class="img"><img src="<?php echo $list['jieritu'];?>" width='100%'></div>
	</div>
    <!--- 新春LOGO end --->
	<!--- 顶部横幅开始 --->
	<div class="box pad" id="yxym">	
  <table border='1' width='100%' cellpadding='0' cellspacing='0' style="<?php echo $list['dinggao'];?>;">
<?php
$dingad = explode('|',$list['dingad']);
for ($i = 0; $i <count($dingad); $i++)
{
  if ($i % 2 == 0)
  {
    echo '<tr><td><a target="_blank" href="'.$dingad[$i].'"><img src="';
  }
  else
  {
    echo $dingad[$i].'" width="100%" height="55"></a></td></tr>';
  }
}
?>
   </table>
   </div>
 <!--- 顶部横幅结束 --->
<div class="box pad" id="yxym">
<div class="list-title"><?php echo $list['name'];?>（六肖主一肖）</div>
<table border="1" width="100%" cellpadding="0" cellspacing="0" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF" bgcolor="#FFFFFF" class="qxtable">
            <tr>
                <th style="width: 25%;  >
                    <font color="#FFFFFF">期数</font>
                </th>
                <th style="width: 55%; >
                    <font color="#FFFFFF"> <?php echo $list['name'];?>推荐六肖</font>
                </th>
                <th style="width: 20%;  >
                    <font color="#FFFFFF">结果</font>
                </th>
            </tr>
            <?php	 
$sql = mysql_query("select * from ziliao where id>=".($qishu-5)." and id<=".$qishu." order by id asc");//asc
$sqla = mysql_query("select * from ls_lottery where id>=".($qishu-5)." and id<=".$qishu." order by id asc");
while ($row=mysql_fetch_assoc($sql)and $rowa=mysql_fetch_assoc($sqla) ){
$tema=${'shengxiao'.$rowa['num7']};
if(!$tema){
$tema="开??";
}else{
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
}
echo '
            <tr>
                <td height="32">
                    <p align="center">
                        <font size="4">第'.$row['qishu'].'期</font>
                    </p>
                </td>
                <td style="color: #0000FF; font-size: 12pt; font-family: Arial" height="32">
                    <p align="center"><span style="font-size: 16pt">'.preg_replace("/(".mb_substr ($tema, 0, 1,"utf-8").")/","<span style='background-color: #FFFF00'>\\1</span>",$row['ziliao1']).' </font>
                    </p>
                </td>
				<td height="32">
                 <p align="center"><font size="4">'.$tema.'</font></p>
                </td>
            </tr>';
}
?>
        </table>
</div>
		

<div class="box pad" id="yxym">
<div class="list-title"><?php echo $list['name'];?>（精选24码）</div>
 <table border="1" width="100%" cellpadding="0" cellspacing="0" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF" bgcolor="#FFFFFF" class="qxtable">
            <tr>
                <th style="width: 25%; >
                    <font color="#FFFFFF">期数</font>
                </th>
                <th style="width: 55%; >
                    <font color="#FFFFFF"><?php echo $list['yuming'];?></font>
                </th>
                <th style="width: 20%; >
                    <font color="#FFFFFF">结果</font>
                </th>
            </tr>
            <?php	 
$sql = mysql_query("select * from ziliao where id>=".($qishu-5)." and id<=".$qishu." order by id asc");//asc
$sqla = mysql_query("select * from ls_lottery where id>=".($qishu-5)." and id<=".$qishu." order by id asc");
while ($row=mysql_fetch_assoc($sql)and $rowa=mysql_fetch_assoc($sqla) ){
$tema=${'shengxiao'.$rowa['num7']};
if(!$tema){
$tema="开00";
}else{
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
}
echo '<tr>
                <td height="32">
                    <p align="center">
                        <font size="4">第'.$row['qishu'].'期</font>
                    </p>
                </td>
                <td style="color: #0000FF; font-size: 12pt; font-family: Arial" height="32">
                    <p align="center">
                        <font face="宋体" size="4" color="#FF0000">'.preg_replace("/(".mb_substr ($tema, 1, 2,"utf-8").")/","<span style='background-color: #FFFF00'>\\1</span>",$row['ziliao2']).'</font>
                    </p>
                </td>
                <td height="32">
                    <p align="center">
                        <font size="4">'.$tema.'</font>
                    </p>
                </td>		
            </tr>';
}?>
				
        </table>
</div>		

<div class="box pad" id="yxym">
<div class="list-title"><?php echo $list['name'];?>（四肖六码）</div>
<table  style="border:0px dashed #ff4500; font-size:10pt; color:#000000" bordercolor="#ff4500" height="152" cellspacing="0" bordercolordark="#FFFFFF" cellpadding="0" width="100%" bgcolor="#ffffff" border="0">
  <tbody>
 <?php	 
$sql = mysql_query("select * from ziliao where id>=".($qishu-5)." and id<=".$qishu." order by id desc");//asc
$sqla = mysql_query("select * from ls_lottery where id>=".($qishu-5)." and id<=".$qishu." order by id desc");
while ($row=mysql_fetch_assoc($sql)and $rowa=mysql_fetch_assoc($sqla) ){
$tema=${'shengxiao'.$rowa['num7']};
if(!$tema){
$temax="aa";
$temas="aa";
}else{
$temax=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 1,"utf-8");
$temas=mb_substr(${'shengxiao'.$rowa['num7']}, 1, 2,"utf-8");
}
echo ' 
                <tr>
                </tr>                
				<tr>
                    <td style="font-size: 12pt; color: #000099; font-family: 宋体; border: 1px dashed #c0c0c0" align="left" width="100%" height="25" colspan="2" bgcolor="#808080">
                    <p align="center">
                            <font style="OUTLINE-STYLE: none; OUTLINE-COLOR: invert; OUTLINE-WIDTH: 0px; WORD-WRAP: break-word; FONT-SIZE: 14pt; outline:0" color="#ff0000" size="2" face="宋体">
                                <b style="outline-style: none; outline-color: invert; outline-width: 0px; word-wrap: break-word; outline: 0">
                        <font color="#FFFF00" size="3">'.$row['qishu'].'期:'.$list['name'].'大公开;准确率绝对100%!</font></b></font>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 12pt; color: #000099; font-family: 宋体; border: 1px dashed #c0c0c0" align="left" width="50%" height="25">
                    <font color="#000000"><b></b></font>
                        <font style="OUTLINE-STYLE: none; OUTLINE-COLOR: invert; OUTLINE-WIDTH: 0px; WORD-WRAP: break-word; FONT-SIZE: 14pt; outline:0" color="#ff0000" size="2" face="宋体"><b style="outline-style: none; outline-color: invert; outline-width: 0px; word-wrap: break-word; outline: 0"><font color="#000000" size="3">'.$row['qishu'].'期:四肖:</font></b></font>
						<b><font color="#ff0000">'.preg_replace("/(".$temax.")/","<span style='background-color: #FFFF00'>\\1</span>",$row['ziliao3']).'</font></b></td>
                    <td style="font-size: 12pt; color: #000099; font-family: 宋体; border: 1px dashed #c0c0c0" align="left" width="50%" height="25">
                    <font style="OUTLINE-STYLE: none; OUTLINE-COLOR: invert; OUTLINE-WIDTH: 0px; WORD-WRAP: break-word; FONT-SIZE: 14pt; outline:0" color="#ff0000" size="2" face="宋体">
                     <b style="outline-style: none; outline-color: invert; outline-width: 0px; word-wrap: break-word; outline: 0"><font size="3" color="#000000">六码:</font></b></font>
					<b><font color="#0000ff">'.preg_replace("/(".$temas.")/","<span style='background-color: #FFFF00'>\\1</span>",$row['ziliao4']).'</font></b></td>
                </tr>
                <tr>
                    <td style="font-size: 12pt; color: #000099; font-family: 宋体; border: 1px dashed #c0c0c0" align="left" width="50%" height="25">
                    <font color="#000000"><b></b></font>
                        <font style="OUTLINE-STYLE: none; OUTLINE-COLOR: invert; OUTLINE-WIDTH: 0px; WORD-WRAP: break-word; FONT-SIZE: 14pt; outline:0" color="#ff0000" size="2" face="宋体"><b style="outline-style: none; outline-color: invert; outline-width: 0px; word-wrap: break-word; outline: 0"><font color="#000000" size="3">'.$row['qishu'].'期:三肖:</font></b></font>
                        <font color="#FF0000"><b>'.preg_replace("/(".$temax.")/","<span style='background-color: #FFFF00'>\\1</span>",mb_substr($row['ziliao3'], 0, 3,"utf-8")).'</b></font>
                    </td>
                    <td style="font-size: 12pt; color: #000099; font-family: 宋体; border: 1px dashed #c0c0c0" align="left" width="50%" height="25">
                    <font style="OUTLINE-STYLE: none; OUTLINE-COLOR: invert; OUTLINE-WIDTH: 0px; WORD-WRAP: break-word; FONT-SIZE: 14pt; outline:0" color="#ff0000" size="2" face="宋体">
                    <b style="outline-style: none; outline-color: invert; outline-width: 0px; word-wrap: break-word; outline: 0"><font size="3" color="#000000">
                    五码:</font></b></font>
					<b><font color="#0000ff">'.preg_replace("/(".$temas.")/","<span style='background-color: #FFFF00'>\\1</span>",mb_substr($row['ziliao4'], 0, 14,"utf-8")).'</font></b></td>
                </tr>
                <tr>
                    <td style="font-size: 12pt; color: #000099; font-family: 宋体; border: 1px dashed #c0c0c0" align="left" width="50%" height="25">
                    <font style="OUTLINE-STYLE: none; OUTLINE-COLOR: invert; OUTLINE-WIDTH: 0px; WORD-WRAP: break-word; FONT-SIZE: 14pt; outline:0" color="#ff0000" size="2" face="宋体">
                            <b style="outline-style: none; outline-color: invert; outline-width: 0px; word-wrap: break-word; outline: 0">
                    <font color="#000000" size="3">'.$row['qishu'].'期:二肖:</font></b></font>
                        <font color="#FF0000"><b>'.preg_replace("/(".$temax.")/","<span style='background-color: #FFFF00'>\\1</span>",mb_substr($row['ziliao3'], 0, 2,"utf-8")).'</b></font>
                    </td>
                    <td style="font-size: 12pt; color: #000099; font-family: 宋体; border: 1px dashed #c0c0c0" align="left" width="50%" height="25">
                    <font style="OUTLINE-STYLE: none; OUTLINE-COLOR: invert; OUTLINE-WIDTH: 0px; WORD-WRAP: break-word; FONT-SIZE: 14pt; outline:0" color="#ff0000" size="2" face="宋体">
                    <b style="outline-style: none; outline-color: invert; outline-width: 0px; word-wrap: break-word; outline: 0"><font size="3" color="#000000">
                    四码:</font></b></font>
					<b><font color="#0000ff">'.preg_replace("/(".$temas.")/","<span style='background-color: #FFFF00'>\\1</span>",mb_substr($row['ziliao4'], 0, 11,"utf-8")).'</font></b></td>
                </tr>
                <tr>
                    <td style="font-size: 12pt; color: #000099; font-family: 宋体; border: 1px dashed #c0c0c0" align="left" width="50%" height="25">
                    <font style="OUTLINE-STYLE: none; OUTLINE-COLOR: invert; OUTLINE-WIDTH: 0px; WORD-WRAP: break-word; FONT-SIZE: 14pt; outline:0" color="#ff0000" size="2" face="宋体">
                            <b style="outline-style: none; outline-color: invert; outline-width: 0px; word-wrap: break-word; outline: 0">
                    <font color="#000000" size="3">'.$row['qishu'].'期:一肖:</font></b></font>
                        <font color="#FF0000"><b>'.preg_replace("/(".$temax.")/","<span style='background-color: #FFFF00'>\\1</span>",mb_substr($row['ziliao3'], 0, 1,"utf-8")).'</b></font>
                    </td>
                    <td style="font-size: 12pt; color: #000099; font-family: 宋体; border: 1px dashed #c0c0c0" align="left" width="50%" height="25">
                <font style="OUTLINE-STYLE: none; OUTLINE-COLOR: invert; OUTLINE-WIDTH: 0px; WORD-WRAP: break-word; FONT-SIZE: 14pt; outline:0" color="#ff0000" size="2" face="宋体">
                   <b style="outline-style: none; outline-color: invert; outline-width: 0px; word-wrap: break-word; outline: 0"><font size="3" color="#000000">
                    三码:</font></b></font>
					<b><font color="#0000ff">'.preg_replace("/(".$temas.")/","<span style='background-color: #FFFF00'>\\1</span>",mb_substr($row['ziliao4'], 0, 8,"utf-8")).'</font></b></td>
                </tr>';
}?>

            </tbody>
        </table>  
</div>


 <div class="box pad" id="yxym">
<div class="list-title"><?php echo $list['name'];?>（四肖六码）</div>
 <div class="bizhong clearfix">
 <?php	 
$sql = mysql_query("select * from ziliao where id>=".($qishu-5)." and id<=".$qishu." order by id desc");//asc
$sqla = mysql_query("select * from ls_lottery where id>=".($qishu-5)." and id<=".$qishu." order by id desc");
while ($row=mysql_fetch_assoc($sql)and $rowa=mysql_fetch_assoc($sqla) ){
$tema=${'shengxiao'.$rowa['num7']};
if(!$tema){
$temax="aa";
$temas="aa";
}else{
$temax=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 1,"utf-8");
$temas=mb_substr(${'shengxiao'.$rowa['num7']}, 1, 2,"utf-8");
}
echo '<div class="bizhong-box">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>
                                            '.$row['qishu'].'期:版主推荐AAAAA级公开;
                                            <font color="#0000FF">还等啥大胆砸</font>
                                        </th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>
                                            '.$row['qishu'].'期:内部一肖一码：
                                            <font color="#ffff00;" size="+2">'.preg_replace("/(".$temax.")/","<span style='background-color: #000000'>\\1</span>",$row['ziliao7']).'</font>信心100%.请把握机会!</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>
                                            '.$row['qishu'].'期:必中九肖：
                                            <font color="#FF0000">'.preg_replace("/(".$temax.")/","<span style='background-color: #FFFF00'>\\1</span>",$row['ziliao5']).'</font>
                                            <font color="#00FFFF">稳准狠</font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            '.$row['qishu'].'期:必中④肖：
                                            <font color="#FF0000">'.preg_replace("/(".$temax.")/","<span style='background-color: #FFFF00'>\\1</span>",mb_substr($row['ziliao5'], 0, 4,"utf-8")).'</font>
                                            <font color="#00FFFF">稳准狠</font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            '.$row['qishu'].'期:必中⑩码：
                                            <font color="#FF0000">'.preg_replace("/(".$temas.")/","<span style='background-color: #FFFF00'>\\1</span>",$row['ziliao6']).'</font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            '.$row['qishu'].'期:必中⑸码：
                                            <font color="#FF0000">'.preg_replace("/(".$temas.")/","<span style='background-color: #FFFF00'>\\1</span>",mb_substr($row['ziliao6'], 0, 14,"utf-8")).'</font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            '.$row['qishu'].'期:必中③码：
                                            <font color="#FF0000">'.preg_replace("/(".$temas.")/","<span style='background-color: #FFFF00'>\\1</span>",mb_substr($row['ziliao6'], 0, 8,"utf-8")).'</font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> ';
}?>

						
<div class="bizhong-page">
                            <span class="bizhong-btn bizhong-pre"><font color="#FF0000">下一期</font></span> <span class="bizhong-btn bizhong-next"><font color="#FF0000">上一期</font></span></div>
                        <script>
                            $(document).ready(function() {
                                $('.bizhong-box').first().addClass("action-bz");
                                $('.bizhong-pre').click(function() {
                                    if ($('.bizhong-box').index($('.action-bz')) != 0) {
                                        $('.action-bz').removeClass("action-bz").prev().addClass("action-bz");
                                    }

                                });
                                $('.bizhong-next').click(function() {
                                    if ($('.bizhong-box').index($('.action-bz')) != $('.bizhong-box').length - 1) {
                                        $('.action-bz').removeClass("action-bz").next().addClass("action-bz");
                                    }
                                });
                            });
                        </script>
                    </div>
       </div>          
 

<div class="box pad" id="yxym">
<div class="list-title"><?php echo $list['name'];?>（平特三肖）</div>
<table border="1" width="100%" cellpadding="0" cellspacing="0" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF" bgcolor="#FFFFFF" class="qxtable">
            <tr>
                <th style=">
                    <font color="#FFFFFF">期数</font>
                </th>
                <th style="width: 65%; >
                    <font color="#FFFFFF"><?php echo $list['name'];?>推荐平特</font>
                </th>
                <th style=">
                    <font color="#FFFFFF">结果</font>
                </th>
            </tr>
 <?php	 
$sql = mysql_query("select * from ziliao where id>=".($qishu-5)." and id<=".$qishu." order by id desc");//asc
$sqla = mysql_query("select * from ls_lottery where id>=".($qishu-5)." and id<=".$qishu." order by id desc");
while ($row=mysql_fetch_assoc($sql)and $rowa=mysql_fetch_assoc($sqla) ){
$tema=${'shengxiao'.$rowa['num7']};
if(!$tema){
$tema="开??";
$texiao="aa";
}else{
$texiao=mb_substr(${'shengxiao'.$rowa['num1']}, 0, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num2']}, 0, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num3']}, 0, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num4']}, 0, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num5']}, 0, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num6']}, 0, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num7']}, 0, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num7']}, 7, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num7']}, 5, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num7']}, 6, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num7']}, 9, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num7']}, 10, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num7']}, 12, 1,"utf-8");
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
}
echo '<tr>
                <td height="32">
                    <p align="center">
                        <font size="4">'.$row['qishu'].'期</font>
                    </p>
                </td>
                <td style="color: #0000FF; font-size: 12pt; font-family: Arial" height="32">
                    <p align="center">
                        <font face="宋体"><span style="font-size: 16pt">
                <font color="#3399FF">【</font><font color="#FF0000">【'.preg_replace("/([".$texiao."]+)/u","<span style='background-color: #FFFF00'>\\1</span>",$row['ziliao8']).'】</font><font color="#3399FF">】</font></span></font>
                    </p>
                </td>
                <td height="32">
                    <p align="center">
                        <font size="4">'.$tema.'</font>
                    </p>
                </td>
            </tr>';
}?>
 
            
        </table>
</div>

<div class="box pad" id="yxym">
<div class="list-title"><?php echo $list['name'];?>（绝杀两尾）</div>
<table id="table32" width="100%" height="35" border="1" style="margin: 0px; padding: 0px; list-style: none; border: 0px; vertical-align: baseline; border-collapse: collapse; border-spacing: 0px; color: rgb(255, 255, 0); font-family: &quot;Microsoft Yahei&quot;, Arial, Helvetica, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; word-wrap: break-word; word-break: break-all; font-variant-numeric: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit;">
                <tbody style="margin: 0px; padding: 0px; list-style: none; border: 0px; vertical-align: baseline; word-wrap: break-word; word-break: break-all;">
                    <tr style="margin: 0px; padding: 0px; list-style: none; border: 0px; vertical-align: baseline; word-wrap: break-word; word-break: break-all;">
                        <td width="99%" height="34" bgcolor="#000000" align="center" style="margin: 0px; padding: 0px; list-style: none; border: 1px solid rgb(255, 0, 0); vertical-align: middle; word-wrap: break-word; word-break: break-all;">
                            <b style="margin: 0px; padding: 0px; list-style: none; border: 0px; vertical-align: baseline;">
                <font face="微软雅黑" color="#FFFFFF" style="margin: 0px; padding: 0px; border: 0px none; vertical-align: baseline; list-style-type:none" size="3">
                  <?php echo $list['name'];?></font><font size="3" face="微软雅黑" color="#FFFFFF" style="margin: 0px; padding: 0px; list-style: none; border: 0px; vertical-align: baseline;">【绝杀两尾】</font></b><span style="vertical-align: baseline"><b><font face="微软雅黑" size="3" color="#FFFFFF"><?php echo $list['yuming'];?></font></b></span></td>
                    </tr>
 <?php	 
$sql = mysql_query("select * from ziliao where id>=".($qishu-5)." and id<=".$qishu." order by id asc");//asc
$sqla = mysql_query("select * from ls_lottery where id>=".($qishu-5)." and id<=".$qishu." order by id asc");
while ($row=mysql_fetch_assoc($sql)and $rowa=mysql_fetch_assoc($sqla) ){
$tema=${'shengxiao'.$rowa['num7']};
if(!$tema){
$tema="????";
}else{
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
}
echo '<tr><td width="99%" height="35" align="center" style="margin: 0px; padding: 0px; list-style: none; border: 1px solid rgb(255, 0, 0); vertical-align: middle; word-wrap: break-word; word-break: break-all;">
            <span style="margin: 0px; padding: 0px; list-style: none; border: 0px; vertical-align: baseline;">
			<font face="微软雅黑" style="margin: 0px; padding: 0px; border: 0px none; vertical-align: baseline; list-style-type:none" size="3">
			<font color="#008000" style="margin: 0px; padding: 0px; list-style: none; border: 0px; vertical-align: baseline;">
			'.$row['qishu'].'期:</font><font color="#000000" style="margin: 0px; padding: 0px; list-style: none; border: 0px; vertical-align: baseline;">高手◆</font></font></span>
                            <font size="3" color="#000" style="margin: 0px; padding: 0px; border: 0px none; vertical-align: baseline; word-wrap: break-word; word-break: break-all; outline-style: none; outline-width: 0px; list-style-type:none"><span style="margin: 0px; padding: 0px; list-style: none; border: 0px; vertical-align: baseline;"><font face="微软雅黑" color="#000000" style="margin: 0px; padding: 0px; border: 0px none; vertical-align: baseline; list-style-type:none">绝杀</font></span></font>
                            <span style="margin: 0px; padding: 0px; list-style: none; border: 0px; vertical-align: baseline;">
                            <font face="微软雅黑" color="#000000" style="margin: 0px; padding: 0px; border: 0px none; vertical-align: baseline; list-style-type:none" size="3">「</font>
                            <font face="微软雅黑" color="#FF0000" style="margin: 0px; padding: 0px; border: 0px none; vertical-align: baseline; list-style-type:none" size="3">'.preg_replace("/(".mb_substr ($tema, 2, 1,"utf-8").")/","<span style='background-color: #c6c6c4'>\\1</span>",$row['ziliao9']).' 尾</font></span></font>
<span style="margin: 0px; padding: 0px; list-style: none; border: 0px; vertical-align: baseline;">
<font face="微软雅黑" style="margin: 0px; padding: 0px; border: 0px none; vertical-align: baseline; list-style-type:none" size="3">
<font color="#000000" style="margin: 0px; padding: 0px; list-style: none; border: 0px; vertical-align: baseline;">」</font>
<font color="#008000" style="margin: 0px; padding: 0px; list-style: none; border: 0px; vertical-align: baseline;">开:</font>
<font color="#FF0000"></font><font color="#FF0000" style="margin: 0px; padding: 0px; list-style: none; border: 0px; vertical-align: baseline;">'.$tema.'</font></font></span></td>
</tr>';
}?></table>
</div>

<div class="box pad" id="yxym">
<div class="list-title"><?php echo $list['name'];?>（五肖五码）</div>
<table border="1" width="100%" cellpadding="0" cellspacing="0" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF" bgcolor="#FFFFFF" class="qxtable">
            <tr>
                <th style=">
                    <font color="#FFFFFF"><?php echo $list['name'];?>. 五肖五码</font>
                </th>
            </tr>
<?php	 
$sql = mysql_query("select * from ziliao where id>=".($qishu-5)." and id<=".$qishu." order by id asc");//asc
$sqla = mysql_query("select * from ls_lottery where id>=".($qishu-5)." and id<=".$qishu." order by id asc");
while ($row=mysql_fetch_assoc($sql)and $rowa=mysql_fetch_assoc($sqla) ){
$tema=${'shengxiao'.$rowa['num7']};
if(!$tema){
$tema="????";
$temas="aa";
}else{
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
$temas=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 1,"utf-8");
}
echo '<tr>
                <td height="32">
                    <p align="center">
                        <font face="微软雅黑" color="#008000" style="font-size: 11pt"></font>
                        <font face="微软雅黑">
                            <font color="#008000" style="font-size: 11pt">'.$row['qishu'].'期:</font>
                            <font color="#FF0000" style="font-size: 11pt">'.preg_replace("/([".$temas."]+)/u","<span style='background-color: #FFFF00'>\\1</span>",$row['ziliao10']).'</font>
                            <font color="#008000" style="font-size: 11pt">开</font>
                            <font color="#FF0000" style="font-size: 11pt">:</font>
                            <font color="#0000FF" style="font-size: 11pt">'.$tema.'</font>
                        </font>
                    </p>
                </td>
            </tr>';
}?>		
        </table>
</div>

<div class="box pad" id="yxym">
<div class="list-title"><?php echo $list['name'];?>（家禽野兽）</div>
<table border="0" width="100%" cellpadding="0" style="box-sizing: border-box; border-collapse: collapse; border-spacing: 0px; color: rgb(58, 88, 95); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, 微软雅黑, Arial, sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">
                <tbody style="box-sizing: border-box;">
<?php	 
$sql = mysql_query("select * from ziliao where id>=".($qishu-5)." and id<=".$qishu." order by id desc");//asc
$sqla = mysql_query("select * from ls_lottery where id>=".($qishu-5)." and id<=".$qishu." order by id desc");
while ($row=mysql_fetch_assoc($sql)and $rowa=mysql_fetch_assoc($sqla) ){
$tema=${'shengxiao'.$rowa['num7']};
if(!$tema){
$tema="????";
$temaq="aa";
$temas="aa";
}else{
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
$temaq=mb_substr(${'shengxiao'.$rowa['num7']}, 3, 2,"utf-8");
$temas=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 1,"utf-8");
}
echo '<tr>
                        <td align="center" width="100%" height="40" style="box-sizing: border-box; border: 1px dotted rgb(242, 242, 242);">
                            <span style="box-sizing: border-box">
			<strong style="box-sizing: border-box; color: rgb(58, 88, 95); font-family: "Helvetica Neue", Helvetica, "PingFang SC", "Hiragino Sans GB", "Microsoft YaHei", 微软雅黑, Arial, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: -webkit-center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255)">
			<span style="box-sizing: border-box; color: green;"><font size="4">'.$row['qishu'].'期</font></span>
                            <font size="4"><span style="box-sizing: border-box; color: rgb(0, 0, 0);">《</span></font>
                            </strong><strong><font color="#FF0000"><span style="text-decoration: none">'.preg_replace("/(".$temaq.")/","<span style='background-color: #FFFF00'>\\1</span>",mb_substr($row['ziliao11'], 0, 2,"utf-8")).'</span></font></strong>
                            <font size="4">
                                <font color="#FF0000"><strong><span style="text-decoration: none">+ '.preg_replace("/(".$temas.")/","<span style='background-color: #FFFF00'>\\1</span>",mb_substr($row['ziliao11'], 2, 2,"utf-8")).'</span></strong></font>
                                </a>
                            </font>
                            </span><span style="box-sizing: border-box; font-size: 14pt;"><font size="4"><span style="box-sizing: border-box; color: rgb(0, 0, 0);"><strong style="box-sizing: border-box; font-family: "Helvetica Neue", Helvetica, "PingFang SC", "Hiragino Sans GB", "Microsoft YaHei", 微软雅黑, Arial, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: -webkit-center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255)">》特开:</strong></span></font>
                            <strong style="box-sizing: border-box; color: rgb(58, 88, 95); font-family: "Helvetica Neue", Helvetica, "PingFang SC", "Hiragino Sans GB", "Microsoft YaHei", 微软雅黑, Arial, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: -webkit-center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255)"><span style="box-sizing: border-box; color: red;"><font size="4">'.$tema.'</font></span></strong>
                            </span>
                        </td>
                    </tr>';
}?>
		
            </table>
</div>

<div class="box pad" id="yxym">
<div class="list-title" id="dszt"><?php echo $list['name'];?>（必中单双）</div>
<table id="table647" border="0" width="100%" cellspacing="0" cellpadding="0" style="box-sizing: border-box; border-collapse: collapse; border-spacing: 0px;">
                                <tbody style="box-sizing: border-box;">
<?php	 
$sql = mysql_query("select * from ziliao where id>=".($qishu-5)." and id<=".$qishu." order by id asc");//asc
$sqla = mysql_query("select * from ls_lottery where id>=".($qishu-5)." and id<=".$qishu." order by id asc");
while ($row=mysql_fetch_assoc($sql)and $rowa=mysql_fetch_assoc($sqla) ){
$tema=${'shengxiao'.$rowa['num7']};
if(!$tema){
$tema="开??";
$texiao=" ";
}else{
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
$texiao=mb_substr(${'shengxiao'.$rowa['num7']}, 5, 1,"utf-8");
}
echo '<tr style="box-sizing: border-box;">
                                        <td align="center" width="100%" style="box-sizing: border-box; border-width: 1px; border-style: solid; border-left-color: silver; border-top-color: silver; vertical-align: middle;">
 <b><font size="4" color="#FFFFFF">'.$row['qishu'].'期 </font><font size="4"><font color="#FF0000">必中单双</font> <font color="#000000">【'.preg_replace("/(".$texiao.")/","<span style='background-color: #FFFF00'>\\1</span>",$row['ziliao12'].$row['ziliao12'].$row['ziliao12']).'】</font> 开:</font><font size="4" color="#FF0000">'.$tema.'</font></b>                                          
                                        </td>
                                    </tr>';
}?>
                            </table>
</div>

<div class="box pad" id="yxym">
<div class="list-title"><?php echo $list['name'];?>（九肖稳中）</div>
<table class="qxtable yxym" style="TEXT-ALIGN: center; WIDOWS: 1; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(255,255,255); FONT-VARIANT: normal; FONT-STYLE: normal; TEXT-INDENT: 0px; BORDER-SPACING: 0px; BORDER-COLLAPSE: collapse; FONT-FAMILY: 微软雅黑; WHITE-SPACE: normal; LETTER-SPACING: normal; COLOR: rgb(68,68,68); FONT-SIZE: 13pt; FONT-WEIGHT: normal; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px" id="table455" border="0" bordercolor="#cccccc" cellpadding="0" width="100%">
<?php	 
$sql = mysql_query("select * from ziliao where id>=".($qishu-5)." and id<=".$qishu." order by id desc");//asc
$sqla = mysql_query("select * from ls_lottery where id>=".($qishu-5)." and id<=".$qishu." order by id desc");
while ($row=mysql_fetch_assoc($sql)and $rowa=mysql_fetch_assoc($sqla) ){
$tema=${'shengxiao'.$rowa['num7']};
if(!$tema){
$tema="开??";
$texiao=" ";
}else{
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
$texiao=mb_substr(${'shengxiao'.$rowa['num7']},0, 1,"utf-8");
}
echo '<tr>
                <td style="BORDER-BOTTOM: rgb(37 28 28) 1px solid; BORDER-LEFT: rgb(37 28 28) 1px solid; PADDING-BOTTOM: 3px; MARGIN: 0px; PADDING-LEFT: 2px; PADDING-RIGHT: 2px; WORD-BREAK: break-all; BORDER-TOP: rgb(37 28 28) 1px solid; BORDER-RIGHT: rgb(37 28 28) 1px solid; PADDING-TOP: 3px"
                    bgcolor="#397994" width="18%">
                    <font color="#000000"><span style="FONT-SIZE: 11pt">'.$row['qishu'].'期:九肖</span></font>
                </td>
                <td style="BORDER-BOTTOM: rgb(37 28 28) 1px solid; BORDER-LEFT: rgb(37 28 28) 1px solid; PADDING-BOTTOM: 3px; MARGIN: 0px; PADDING-LEFT: 2px; PADDING-RIGHT: 2px; WORD-BREAK: break-all; BORDER-TOP: rgb(37 28 28) 1px solid; BORDER-RIGHT: rgb(37 28 28) 1px solid; PADDING-TOP: 3px"
                    width="65%" bgcolor="#000000">
                    <font color="#FF0000">'.preg_replace("/(".$texiao.")/","<span style='background-color: #FFFF00'>\\1</span>",$row['ziliao13']).'</font>
                </td>
                <td style="BORDER-BOTTOM: rgb(37 28 28) 1px solid; BORDER-LEFT: rgb(37 28 28) 1px solid; PADDING-BOTTOM: 3px; MARGIN: 0px; PADDING-LEFT: 2px; PADDING-RIGHT: 2px; WORD-BREAK: break-all; BORDER-TOP: rgb(37 28 28) 1px solid; BORDER-RIGHT: rgb(37 28 28) 1px solid; PADDING-TOP: 3px"
                    bgcolor="#397994" width="16%">
                    <span lang="zh-cn"><font color="#000000">
                <span style="font-size: 11pt"></span></font>
                    </span>
                    <font color="#000000"><span lang="zh-cn" style="font-size: 11pt">'.$tema.'</span><span style="FONT-SIZE: 11pt"></span></font>
                </td>
            </tr>
	            <tr>
                <td style="BORDER-BOTTOM: rgb(37 28 28) 1px solid; BORDER-LEFT: rgb(37 28 28) 1px solid; PADDING-BOTTOM: 3px; MARGIN: 0px; PADDING-LEFT: 2px; PADDING-RIGHT: 2px; WORD-BREAK: break-all; BORDER-TOP: rgb(37 28 28) 1px solid; BORDER-RIGHT: rgb(37 28 28) 1px solid; PADDING-TOP: 3px"
                    bgcolor="#397994" width="99%" height="30" colspan="3">
                    <font style="FONT-SIZE: 11pt" color="#000000">
                        【'.$list['name'].'】九肖稳中发布区《'.$list['yuming'].'》</font>
                </td>
            </tr>';
}?>		
        </table>
</div>

<div class="box pad" id="yxym">
<div class="list-title"><?php echo $list['name'];?>（黄大仙解诗）</div>
        <div class="hei">
            <table border="1" width="100%" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF" class="jiesitable" id="table435">
<?php 
$sql = mysql_query("select * from ziliao where id>=".($qishu-5)." and id<=".$qishu." order by id desc");//asc
$sqla = mysql_query("select * from ls_lottery where id>=".($qishu-5)." and id<=".$qishu." order by id desc");
while ($row=mysql_fetch_assoc($sql)and $rowa=mysql_fetch_assoc($sqla) ){
$tema=${'shengxiao'.$rowa['num7']};
if(!$tema){
$tema="开??";
$texiao="aa";
}else{
$texiao=mb_substr(${'shengxiao'.$rowa['num1']}, 0, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num2']}, 0, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num3']}, 0, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num4']}, 0, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num5']}, 0, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num6']}, 0, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num7']}, 0, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num7']}, 7, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num7']}, 5, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num7']}, 6, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num7']}, 9, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num7']}, 10, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num7']}, 12, 1,"utf-8");
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
}
echo '<tr>
                    <th rowspan="2" style="width: 13%;"><font color="#000000">'.$row['qishu'].'期</font></th>
                    <td><font color="#800080">'.preg_replace("/([".$texiao."]+)/u","<span style='background-color: #FFFF00'>\\1</span>",$row['ziliao14']).'</font></td>
                    <th rowspan="2" style="width: 13%;"><font color="#FF0000">'.$tema.'</font></th>
                </tr>
                <tr>
                    <td>域名：'.$list['yuming'].' 解诗准准准！</td>
                </tr>';
}?>	
 
            </table>
        </div>
</div>

<!--- 中部横幅开始 --->
<div class="box pad" id="yxym">	
  <table border='1' width='100%' cellpadding='0' cellspacing='0' style="<?php echo $list['zhonggao'];?>;">
<?php
$zhongad = explode('|',$list['zhongad']);
for ($i = 0; $i <count($zhongad); $i++)
{
  if ($i % 2 == 0)
  {
    echo '<tr><td><a target="_blank" href="'.$zhongad[$i].'"><img src="';
  }
  else
  {
    echo $zhongad[$i].'" width="100%" height="55"></a></td></tr>';
  }
}
?>
   </table>
   </div>
   <!--- 中部横幅结束始 --->	

<div class="box pad" id="yxym">
<div class="table sbgs pad4" id="gstz">
<div class="list-title"><?php echo $list['name'];?>（高手资料）</div>
<ul style="background: #fff url(images/img1.png) no-repeat bottom right;">
<div class="some-list">	
<?php	 
$sql = mysql_query("select * from zuozhe order by rand() ");//asc
function randColor(){
     $colors = array();
     for($i = 0;$i<6;$i++){
         $colors[] = dechex(rand(0,15));
     }
     return implode('',$colors);
}
while ($row=mysql_fetch_assoc($sql)){

echo '
      <li class="item"><span class="zz"><img src="/static/images/new.gif"></span><span class="icon">'.$row['name'].'</span><a  class="lianjie" data-url="bbs.php?id='.$row['id'].'" href="javascript:void(0);">'.$topqishu.'期：【<font style="color:#'.randColor().';">'.$row['mingcheng'].'</font>】</a></li>
	  ';
}
?>			       
            </ul>
<script src="LoadMore.js"></script>
	<script>
	    $('.some-list').simpleLoadMore({
	      item: 'li.item',
	      count: 15
	    });
	</script>			
</div></div>


<div class="box pad" id="yxym">
<div class="list-title"><?php echo $list['name'];?>（成语解平特）</div>
<div class="table sxsm pad4">
<ul class="clearfix">
<?php	 
$sql = mysql_query("select * from ziliao where id>=".($qishu-5)." and id<=".$qishu." order by id desc");//asc
$sqla = mysql_query("select * from ls_lottery where id>=".($qishu-5)." and id<=".$qishu." order by id desc");
while ($row=mysql_fetch_assoc($sql)and $rowa=mysql_fetch_assoc($sqla) ){
$chengyu=mb_substr (${'shengxiao'.$rowa['num1']}, 0, 1,"utf-8").mb_substr (${'shengxiao'.$rowa['num2']}, 0, 1,"utf-8").mb_substr (${'shengxiao'.$rowa['num3']}, 0, 1,"utf-8").mb_substr (${'shengxiao'.$rowa['num4']}, 0, 1,"utf-8").mb_substr (${'shengxiao'.$rowa['num5']}, 0, 1,"utf-8").mb_substr (${'shengxiao'.$rowa['num6']}, 0, 1,"utf-8").mb_substr (${'shengxiao'.$rowa['num7']}, 0, 1,"utf-8")." ";	
$tema=${'shengxiao'.$rowa['num7']};
if(!$tema){
$tema="开??";
}else{
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
}
echo '
     <li>'.$row['qishu'].'期：<b class="wblue">《'.preg_replace("/([".$chengyu."])+/u","<span style='background-color: #FFFF00'>\\1</span>",$row['chengyu']).'》</b>开<span>【'.$tema.'】</span></li>
	  ';
}
?>

            </ul></div>
</div>

<div class="box pad" id="yxym">
<div class="list-title"><?php echo $list['name'];?>（单双各12码）</div>
<div class="table sxsm pad4">
 <ul class="clearfix">
            <?php	 
$sql = mysql_query("select * from ziliao where id>=".($qishu-5)." and id<=".$qishu." order by id desc");//asc
$sqla = mysql_query("select * from ls_lottery where id>=".($qishu-5)." and id<=".$qishu." order by id desc");
while ($row=mysql_fetch_assoc($sql)and $rowa=mysql_fetch_assoc($sqla) ){
$danshierma=mb_substr($row['shierma'], 0, 35,"utf-8");
$shuangshierma=mb_substr($row['shierma'], 36, 70,"utf-8");
$tema=${'shengxiao'.$rowa['num7']};
if(!$tema){
$tema="开??";
$temashu=" ";
}else{
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
$temashu=mb_substr(${'shengxiao'.$rowa['num7']}, 1, 2,"utf-8");
}
echo '
     <li>'.$row['qishu'].'期：<b class="wblue">《单双各12码》</b>开<span>【'.$tema.'】</span><p class="wpink">'.preg_replace("/(".$temashu.")/","<span style='background-color:#FFFF00'>\\1</span>",$danshierma).'</p><p class="wpink">'.preg_replace("/(".$temashu.")/","<span style='background-color:#FFFF00'>\\1</span>",$shuangshierma).'</p></li> 
	  ';
}

?>			
            </ul>
</div></div>

<div class="box pad" id="yxym">
<div class="table sxsm pad4">
<div class="list-title"><?php echo $list['name'];?>（规律六肖）</div>
<ul class="clearfix">
            <?php	 
$sql = mysql_query("select * from ziliao where id>=".($qishu-5)." and id<=".$qishu." order by id asc");//asc
$sqla = mysql_query("select * from ls_lottery where id>=".($qishu-5)." and id<=".$qishu." order by id asc");
while ($row=mysql_fetch_assoc($sql)and $rowa=mysql_fetch_assoc($sqla) ){
$tema=${'shengxiao'.$rowa['num7']};
if(!$tema){
$tema="开??";
}else{
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
}
echo '
<li>'.$row['qishu'].'期：<b class="wblue">《'.preg_replace("/(".mb_substr ($tema, 0, 1,"utf-8").")/","<span style='background-color: #FFFF00'>\\1</span>",$row['guilvliuxiao']).'》</b>开<span>【'.$tema.'】</span></li>
	  ';
}

?>
            </ul>
</div></div>

<div class="box pad" id="yxym">
<div class="table sxsm pad4">
<div class="list-title"><?php echo $list['name'];?>（一尾平特）</div>
<ul class="clearfix">
             <?php	 
$sql = mysql_query("select * from ziliao where id>=".($qishu-5)." and id<=".$qishu." order by id asc");//asc
$sqla = mysql_query("select * from ls_lottery where id>=".($qishu-5)." and id<=".$qishu." order by id asc");
while ($row=mysql_fetch_assoc($sql)and $rowa=mysql_fetch_assoc($sqla) ){
$tema=${'shengxiao'.$rowa['num7']};
if(!$tema){
$tema="开??";
$temaa=" ";
}else{
if($tema=mb_substr(${'shengxiao'.$rowa['num7']}, 2, 1,"utf-8")==mb_substr($row['yiwei'],1,1)){
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");	
}elseif($tema=mb_substr(${'shengxiao'.$rowa['num1']}, 2, 1,"utf-8")==mb_substr($row['yiwei'],1,1)){
$tema=mb_substr(${'shengxiao'.$rowa['num1']}, 0, 3,"utf-8");	
}elseif($tema=mb_substr(${'shengxiao'.$rowa['num2']}, 2, 1,"utf-8")==mb_substr($row['yiwei'],1,1)){
$tema=mb_substr(${'shengxiao'.$rowa['num2']}, 0, 3,"utf-8");	
}elseif($tema=mb_substr(${'shengxiao'.$rowa['num3']}, 2, 1,"utf-8")==mb_substr($row['yiwei'],1,1)){
$tema=mb_substr(${'shengxiao'.$rowa['num3']}, 0, 3,"utf-8");	
}elseif($tema=mb_substr(${'shengxiao'.$rowa['num4']}, 2, 1,"utf-8")==mb_substr($row['yiwei'],1,1)){
$tema=mb_substr(${'shengxiao'.$rowa['num4']}, 0, 3,"utf-8");	
}elseif($tema=mb_substr(${'shengxiao'.$rowa['num5']}, 2, 1,"utf-8")==mb_substr($row['yiwei'],1,1)){
$tema=mb_substr(${'shengxiao'.$rowa['num5']}, 0, 3,"utf-8");	
}elseif($tema=mb_substr(${'shengxiao'.$rowa['num6']}, 2, 1,"utf-8")==mb_substr($row['yiwei'],1,1)){
$tema=mb_substr(${'shengxiao'.$rowa['num6']}, 0, 3,"utf-8");	
}else{
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");	
}
$temaa=mb_substr(${'shengxiao'.$rowa['num1']}, 2, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num2']}, 2, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num3']}, 2, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num4']}, 2, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num5']}, 2, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num6']}, 2, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num7']}, 2, 1,"utf-8");
}
echo '
<li>'.$row['qishu'].'期：<b class="wblue">《'.preg_replace("/([".$temaa."])/","<span style='background-color: #FFFF00'>\\1</span>",$row['yiwei']).'》</b>开<span>【'.$tema.'】</span></li>
	  ';
}

?>              
            </ul>
</div></div>


<div class="box pad" id="yxym">
<div class="table sxsm pad4">
<div class="list-title"><?php echo $list['name'];?>（三头中特）</div>
<ul class="clearfix">
            <?php	 
$sql = mysql_query("select * from ziliao where id>=".($qishu-5)." and id<=".$qishu." order by id asc");//asc
$sqla = mysql_query("select * from ls_lottery where id>=".($qishu-5)." and id<=".$qishu." order by id asc");
while ($row=mysql_fetch_assoc($sql)and $rowa=mysql_fetch_assoc($sqla) ){
$tema=${'shengxiao'.$rowa['num7']};
if(!$tema){
$tema="开??";
}else{
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
}
echo '
<li>'.$row['qishu'].'期：<b class="wblue">《'.preg_replace("/(".mb_substr ($tema, 1, 1,"utf-8").")/","<span style='background-color: #FFFF00'>\\1</span>",$row['santou']).'》</b>开<span>【'.$tema.'】</span></li>
	  ';
}

?>
                
            </ul>
</div></div>


<div class="box pad" id="yxym">
<div class="table sxsm pad4">
<div class="list-title"><?php echo $list['name'];?>（五尾中特）</div>
 <ul class="clearfix">
            <?php	 
$sql = mysql_query("select * from ziliao where id>=".($qishu-5)." and id<=".$qishu." order by id asc");//asc
$sqla = mysql_query("select * from ls_lottery where id>=".($qishu-5)." and id<=".$qishu." order by id asc");
while ($row=mysql_fetch_assoc($sql)and $rowa=mysql_fetch_assoc($sqla) ){
$tema=${'shengxiao'.$rowa['num7']};
if(!$tema){
$tema="开??";
}else{
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
}
echo '
<li>'.$row['qishu'].'期：<b class="wblue">《'.preg_replace("/(".mb_substr ($tema, 2, 1,"utf-8").")/","<span style='background-color: #FFFF00'>\\1</span>",$row['wuwei']).'》</b>开<span>【'.$tema.'】</span></li>
	  ';
}

?>
            </ul>
</div></div>


<div class="box pad" id="yxym">
<div class="table yxym pad4">
<div class="list-title"><?php echo $list['name'];?>（九肖九码）</div>
<?php
//$sql = mysql_query("select * from ziliao where id order by id=3 desc limit 5");//展示第三条第一 加载4条
//echo preg_replace("/([Love]+)/","<font color=red>\\1</font>",$string); 匹配相同的多个词	 
$sql = mysql_query("select * from ziliao where id>=".($qishu-5)." and id<=".$qishu." order by id desc");//asc
$sqla = mysql_query("select * from ls_lottery where id>=".($qishu-5)." and id<=".$qishu." order by id desc");
while ($row=mysql_fetch_assoc($sql)and $rowa=mysql_fetch_assoc($sqla) ){
$tema=${'shengxiao'.$rowa['num7']};
if(!$tema){
$tema="开??准";
$texiao=" ";
}else{
$tema="开:".mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
$texiao=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
}	
echo '
<table width="100%" cellspacing="0" cellpadding="0">
                <tr align="center" height="36" style="font-size: 12pt; ">
                    <td width="100%" bgcolor="#000000">
                        <font color="#FFFFFF">【'.$row['qishu'].'期】</font><font color="#00FF00">→关注长跟必赢←</font>
                    </td>
                </tr>
            </table>
            <table width="100%" cellspacing="0" cellpadding="0">
                <tr align="center" height="36" style="font-size: 12pt; ">
                    <td width="25%" >⑨码</td>
                    <td width="50%" bgcolor="#fff"><b class="wblue">'.preg_replace("/(".mb_substr (${'shengxiao'.$rowa['num7']}, 1, 2,"utf-8").")/","<span style='background-color: #FFFF00'>\\1</span>",$row['jiuma']).'</b></td>
                    <td width="25%" >'.$tema.'</td>
                </tr>
                <tr align="center" height="36" style="font-size: 12pt; ">
                    <td width="25%" >⑤码</td>
                    <td width="50%" bgcolor="#fff"><b class="wblue">'.preg_replace("/(".mb_substr (${'shengxiao'.$rowa['num7']}, 1, 2,"utf-8").")/","<span style='background-color: #FFFF00'>\\1</span>",mb_substr($row['jiuma'], 0, 14,"utf-8")).'</b></td>
                    <td width="25%" >'.$tema.'</td>
                </tr>
                <tr align="center" height="36" style="font-size: 12pt; ">
                    <td width="25%" >③码</td>
                    <td width="50%" bgcolor="#fff"><b class="wblue">'.preg_replace("/(".mb_substr (${'shengxiao'.$rowa['num7']}, 1, 2,"utf-8").")/","<span style='background-color: #FFFF00'>\\1</span>",mb_substr($row['jiuma'], 0, 8,"utf-8")).'</b></td>
                    <td width="25%" >'.$tema.'</td>
                </tr>
                <tr align="center" height="36" style="font-size: 12pt; ">
                    <td width="25%" >①码</td>
                    <td width="50%" bgcolor="#fff"><b class="wblue">'.preg_replace("/(".mb_substr (${'shengxiao'.$rowa['num7']}, 1, 2,"utf-8").")/","<span style='background-color: #FFFF00'>\\1</span>",mb_substr($row['jiuma'], 0, 2,"utf-8")).'</b></td>
                    <td width="25%" >'.$tema.'</td>
                </tr>
                <tr align="center" height="36" style="font-size: 12pt; ">
                    <td width="25%" >九肖</td>
                    <td width="50%" bgcolor="#fff"><b class="wblue">'.preg_replace("/(".mb_substr ($texiao, 0, 1,"utf-8").")/","<span style='background-color: #FFFF00'>\\1</span>",$row['jiuxiao']).'</b></td>
                    <td width="25%" >'.$tema.'</td>
                </tr>
                <tr align="center" height="36" style="font-size: 12pt; ">
                    <td width="25%" >七肖</td>
                    <td width="50%" bgcolor="#fff"><b class="wblue">'.preg_replace("/(".mb_substr ($texiao, 0, 1,"utf-8").")/","<span style='background-color: #FFFF00'>\\1</span>",mb_substr($row['jiuxiao'], 0, 7,"utf-8")).'</b></td>
                    <td width="25%" >'.$tema.'</td>
                </tr>
                <tr align="center" height="36" style="font-size: 12pt; ">
                    <td width="25%" >五肖</td>
                    <td width="50%" bgcolor="#fff"><b class="wblue">'.preg_replace("/(".mb_substr ($texiao, 0, 1,"utf-8").")/","<span style='background-color: #FFFF00'>\\1</span>",mb_substr($row['jiuxiao'], 0, 5,"utf-8")).'</b></td>
                    <td width="25%" >'.$tema.'</td>
                </tr>
                <tr align="center" height="36" style="font-size: 12pt; ">
                    <td width="25%" >三肖</td>
                    <td width="50%" bgcolor="#fff"><b class="wblue">'.preg_replace("/(".mb_substr ($texiao, 0, 1,"utf-8").")/","<span style='background-color: #FFFF00'>\\1</span>",mb_substr($row['jiuxiao'], 0, 3,"utf-8")).'</b></td>
                    <td width="25%" >'.$tema.'</td>
                </tr>
                <tr align="center" height="36" style="font-size: 12pt; ">
                    <td width="25%" >二肖</td>
                    <td width="50%" bgcolor="#fff"><b class="wblue">'.preg_replace("/(".mb_substr ($texiao, 0, 1,"utf-8").")/","<span style='background-color: #FFFF00'>\\1</span>",mb_substr($row['jiuxiao'], 0, 2,"utf-8")).'</b></td>
                    <td width="25%" >'.$tema.'</td>
                </tr>
                <tr align="center" height="36" style="font-size: 12pt; ">
                    <td width="25%" >一肖</td>
                    <td width="50%" bgcolor="#fff"><b class="wblue">'.preg_replace("/(".mb_substr ($texiao, 0, 1,"utf-8").")/","<span style='background-color: #FFFF00'>\\1</span>",mb_substr($row['jiuxiao'], 0, 1,"utf-8")).'</b></td>
                    <td width="25%" >'.$tema.'</td>
                </tr>
            </table>
	  ';
}
?>           
</div></div>


<div class="box pad" id="yxym">
<div class="table sxsm pad4">
<div class="list-title"><?php echo $list['name'];?>（大小中特）</div>
<ul class="clearfix">
<?php	 
$sql = mysql_query("select * from ziliao where id>=".($qishu-5)." and id<=".$qishu." order by id asc");//asc
$sqla = mysql_query("select * from ls_lottery where id>=".($qishu-5)." and id<=".$qishu." order by id asc");
while ($row=mysql_fetch_assoc($sql)and $rowa=mysql_fetch_assoc($sqla) ){
$tema=${'shengxiao'.$rowa['num7']};
if(!$tema){
$tema="开??";
$texiao=" ";
}else{
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
$texiao=mb_substr(${'shengxiao'.$rowa['num7']}, 6, 1,"utf-8");
}
echo '
<li>'.$row['qishu'].'期：<b class="wblue">《'.preg_replace("/(".$texiao.")/","<span style='background-color: #FFFF00'>\\1</span>",$row['daxiao']).'》</b>开<span>【'.$tema.'】</span></li>
	  ';
}

?>
            </ul>
</div></div>

<div class="box pad" id="yxym">
<div class="table sxsm pad4">
<div class="list-title"><?php echo $list['name'];?>（单双中特）</div>
<ul class="clearfix">
<?php	 
$sql = mysql_query("select * from ziliao where id>=".($qishu-5)." and id<=".$qishu." order by id asc");//asc
$sqla = mysql_query("select * from ls_lottery where id>=".($qishu-5)." and id<=".$qishu." order by id asc");
while ($row=mysql_fetch_assoc($sql)and $rowa=mysql_fetch_assoc($sqla) ){
$tema=${'shengxiao'.$rowa['num7']};
if(!$tema){
$tema="开??";
$texiao=" ";
}else{
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
$texiao=mb_substr(${'shengxiao'.$rowa['num7']}, 5, 1,"utf-8");
}
echo '
<li>'.$row['qishu'].'期：<b class="wblue">《'.preg_replace("/(".$texiao.")/","<span style='background-color: #FFFF00'>\\1</span>",$row['danshuang']).'》</b>开<span>【'.$tema.'】</span></li>
	  ';
}

?>
            </ul>
</div></div>

<div class="box pad" id="yxym">
<div class="table sxsm pad4">
<div class="list-title"><?php echo $list['name'];?>（家禽野兽）</div>
<ul class="clearfix">
<?php	 
$sql = mysql_query("select * from ziliao where id>=".($qishu-5)." and id<=".$qishu." order by id asc");//asc
$sqla = mysql_query("select * from ls_lottery where id>=".($qishu-5)." and id<=".$qishu." order by id asc");
while ($row=mysql_fetch_assoc($sql)and $rowa=mysql_fetch_assoc($sqla) ){
$tema=${'shengxiao'.$rowa['num7']};
if(!$tema){
$tema="开??";
$texiao=" ";
}else{
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
$texiao=mb_substr(${'shengxiao'.$rowa['num7']}, 3, 2,"utf-8");
}
echo '
<li>'.$row['qishu'].'期：<b class="wblue">《'.preg_replace("/(".$texiao.")/","<span style='background-color: #FFFF00'>\\1</span>",$row['jiaye']).'》</b>开<span>【'.$tema.'】</span></li>
	  ';
}

?>
            </ul>
</div></div>


<div class="box pad" id="yxym">
<div class="table sxsm pad4">
<div class="list-title"><?php echo $list['name'];?>（绝杀１０码）</div>
<ul class="clearfix">
<?php	 
$sql = mysql_query("select * from ziliao where id>=".($qishu-5)." and id<=".$qishu." order by id asc");//asc
$sqla = mysql_query("select * from ls_lottery where id>=".($qishu-5)." and id<=".$qishu." order by id asc");
while ($row=mysql_fetch_assoc($sql)and $rowa=mysql_fetch_assoc($sqla) ){
$tema=${'shengxiao'.$rowa['num7']};
if(!$tema){
$tema="开??准";
$texiao=" ";
}else{
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
$texiao=mb_substr(${'shengxiao'.$rowa['num7']}, 1, 2,"utf-8");
}
echo '
                <li>'.$row['qishu'].'期：<b class="wblue">《绝杀10码》</b>开<span>【'.$tema.'】</span><p class="wpink">'.preg_replace("/(".$texiao.")/","<span style='background-color: #181817'>\\1</span>",$row['shama']).'</p></li>
	  ';
}

?>
            </ul>
</div></div>


<div class="box pad" id="yxym">
<div class="table sxsm pad4">
<div class="list-title"><?php echo $list['name'];?>（玄机解平特）</div>
<ul class="clearfix">
             <?php	 
$sql = mysql_query("select * from ziliao where id>=".($qishu-5)." and id<=".$qishu." order by id asc");//asc
$sqla = mysql_query("select * from ls_lottery where id>=".($qishu-5)." and id<=".$qishu." order by id asc");
while ($row=mysql_fetch_assoc($sql)and $rowa=mysql_fetch_assoc($sqla) ){
$tema=${'shengxiao'.$rowa['num7']};
if(!$tema){
$tema="????肖";
$temaa="-";
}else{
if($tema=mb_substr(${'shengxiao'.$rowa['num1']}, 2, 1,"utf-8")==mb_substr($row['yiwei'],1,1)){
$tema="有平特肖";	
}elseif($tema=mb_substr(${'shengxiao'.$rowa['num2']}, 2, 1,"utf-8")==mb_substr($row['yiwei'],1,1)){
$tema="有平特肖";
}elseif($tema=mb_substr(${'shengxiao'.$rowa['num3']}, 2, 1,"utf-8")==mb_substr($row['yiwei'],1,1)){
$tema="有平特肖";	
}elseif($tema=mb_substr(${'shengxiao'.$rowa['num4']}, 2, 1,"utf-8")==mb_substr($row['yiwei'],1,1)){
$tema="有平特肖";	
}elseif($tema=mb_substr(${'shengxiao'.$rowa['num5']}, 2, 1,"utf-8")==mb_substr($row['yiwei'],1,1)){
$tema="有平特肖";
}elseif($tema=mb_substr(${'shengxiao'.$rowa['num6']}, 2, 1,"utf-8")==mb_substr($row['yiwei'],1,1)){
$tema="有平特肖";
}elseif($tema=mb_substr(${'shengxiao'.$rowa['num7']}, 2, 1,"utf-8")==mb_substr($row['yiwei'],1,1)){
$tema=mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");	
}else{
$tema="有平特肖";	
}
$temaa=mb_substr(${'shengxiao'.$rowa['num1']}, 0, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num2']}, 0, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num3']}, 0, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num4']}, 0, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num5']}, 0, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num6']}, 0, 1,"utf-8").mb_substr(${'shengxiao'.$rowa['num7']}, 0, 1,"utf-8");
}
echo '
<li>'.$row['qishu'].'期玄机：<b class="wblue">《'.preg_replace("/([".$temaa."])/u","<span style='background-color: #FFFF00'>\\1</span>",$row['shiju']).'》</b><br/>解开:<span>【'.$tema.'】!</span></li>
	  ';
}

?> 			
            </ul>
</div></div>


<div class="box pad" id="yxym">
<div class="table yxym pad4" id="zhzl">
<div class="list-title"><?php echo $list['name'];?>（综合内幕）</div>
<table class="tbsq" width="100%" cellspacing="0" cellpadding="0" border="1">
	<tr>
	<td width="20%"><span class="sc2">学识</span></td>
	<td width="20%"><span class="sc2">男女</span></td>
	<td width="20%"><span class="sc3"><?php echo $list['yuming'];?></span></td>
	<td width="20%"><span class="sc2">五行</span></td>
	<td width="20%"><span class="sc2">波色</span></td>
	</tr>
<?php	 
$sql = mysql_query("select * from ziliao where id>=".($qishu-5)." and id<=".$qishu." order by id desc");//asc
$sqla = mysql_query("select * from ls_lottery where id>=".($qishu-5)." and id<=".$qishu." order by id desc");
while ($row=mysql_fetch_assoc($sql)and $rowa=mysql_fetch_assoc($sqla) ){
$tema=${'shengxiao'.$rowa['num7']};
if(!$tema){
$tema="等待开奖";
$qqsh="-";
$nannv="-";
$wuxing="-";
$bose="-";
}else{
$tema="开:".mb_substr(${'shengxiao'.$rowa['num7']}, 0, 3,"utf-8");
$qqsh=mb_substr(${'shengxiao'.$rowa['num7']}, 12, 1,"utf-8");
$nannv=mb_substr(${'shengxiao'.$rowa['num7']}, 10, 2,"utf-8");
$wuxing=mb_substr(${'shengxiao'.$rowa['num7']}, 9, 1,"utf-8");
$bose=mb_substr(${'shengxiao'.$rowa['num7']}, 7, 2,"utf-8");
}
echo '

	<tr>
	<td width="20%">'.preg_replace("/([".$qqsh."])/u","<span style='background-color: #FFFF00'>\\1</span>",$row['qqsh']).'</td>
	<td width="20%">'.preg_replace("/(".$nannv.")/u","<span style='background-color: #FFFF00'>\\1</span>",$row['nannv']).'</td>
	<td width="20%"><span class="sc1">第'.$row['qishu'].'期</span><span class="sc3">'.$tema.'</span></td>
	<td width="20%">'.preg_replace("/(".$wuxing.")/u","<span style='background-color: #FFFF00'>\\1</span>",$row['wuxing']).'</td>
	<td width="20%">'.preg_replace("/(".$bose.")/u","<span style='background-color: #FFFF00'>\\1</span>",$row['bose']).'</td>
	</tr>

	  ';
}

?>
	</table>	
</div></div>

<!--- 全年资料 ---> 
<div class="box pad" id="yxym">
<div class="table sxsm pad4" id="quannian">
<div class="list-title"><?php echo $list['name'];?>（全年资料）</div>
<div id="qnzl" class="qnzl">
<ul>
<?php if($list['tuxuan']=="1"){$quannian="quannianhk";}elseif($list['tuxuan']=="2"){$quannian="quannian";}?>
<?php	 
$sql = mysql_query("select * from ".$quannian." order by id asc ");//asc
while ($row=mysql_fetch_assoc($sql)){
echo '<li><a class="lianjie" data-url="qnzl.php?id='.$row['id'].'">'.$row['qnmc'].'</a></li>';		  
}
?>	
</ul>
</div></div></div>
<!--- 全年资料 --->

<!--图报代码-->
<div class="box pad" id="yxym">
<div class="table sxsm pad4" id="quannian">
<div class="list-title">正版四不像</div>
<img src="<?php echo $list['tuzhi'];?>/<?php echo $qishu;?>/sbx.jpg" width="100%">
</div></div>
<!--图报代码-->


<!--- 底部横幅开始 --->
<div class="box pad" id="yxym">	
  <table border='1' width='100%' cellpadding='0' cellspacing='0' style="<?php echo $list['digao'];?>;">
<?php
$diad = explode('|',$list['diad']);
for ($i = 0; $i <count($diad); $i++)
{
  if ($i % 2 == 0)
  {
    echo '<tr><td><a target="_blank" href="'.$diad[$i].'"><img src="';
  }
  else
  {
    echo $diad[$i].'" width="100%" height="55"></a></td></tr>';
  }
}
?>
   </table>
</div>

	
	<div class="box pad" id="yxym">

		<div class="list-title">本站官方（旗下網站）</div>

		<table border="1" width="100%" cellpadding="0" cellspacing="0" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF" class="gongshi">

			<tr>

				<td>

				<a href="javascript:void(0);">

				<font color="#000000">中特網</font> </a></td>

				<td><a href="javascript:void(0);">

				<font color="#000000">摇钱树</font> </a></td>

				<td><a href="javascript:void(0);">

				<font color="#000000">廣东会</font> </a></td>

				<td><a href="javascript:void(0);">

				<font color="#000000">慈善網</font> </a></td>

			</tr>

			<tr>

				<td><a href="javascript:void(0);">

				<font color="#000000">大贏家</font> </a></td>

				<td><a href="javascript:void(0);">

				<font color="#000000">彩霸王</font> </a></td>

				<td><a href="javascript:void(0);">

				<font color="#000000">金光佛</font> </a></td>

				<td><a href="javascript:void(0);">

				<font color="#000000">彩民網</font> </a></td>

			</tr>

			<tr>

				<td><a href="javascript:void(0);">

				<font color="#000000">聚宝盆</font> </a></td>

				<td><a href="javascript:void(0);">

				<font color="#000000">状元红</font> </a></td>

				<td><a href="javascript:void(0);">

				<font color="#000000">大联盟</font> </a></td>

				<td><a href="javascript:void(0);">

				<font color="#000000">銭多多</font> </a></td>

			</tr>

		</table></div>
<!--广告功能-->
<div style="<?php echo $list['tougao'];?>;">
<?php $heiad = explode('|',$list['touad']);?>
    <div class='d-betting' style='bottom: 148px; right: 10px; display: block;'><a target='_blank' href='<?php echo $heiad[1];?>'>
		<font color='#FFFFFF' style="font-size: 14px"><?php echo $heiad[0];?></font></a></div>
</div>		
<!--<div id="yuming" ><a class="lianjie" data-url="492130.html" href="javascript:void(0);"><font>程序说明<?php echo $list['yuming'];?>程序说明</font></a></div>	-->
<div class="refresh" onclick="javascript:location.reload();">刷新</div>		
    <div>
        <button onclick="returnTop()" id="btnTop" title="返回顶部"><img style="width:auto;height:auto" src="/static/images/return.png"></button>
    </div>
<!--黑条广告-->
<div id="bar2" style="width:100%;max-width:720px;position: fixed;bottom: 60px;left: 0;right: 0;margin: 0 auto;z-index: 2; <?php echo $list['heigao'];?>">
<?php $heiad = explode('|',$list['heiad']);?>	
		<i onclick="removeElement('bar2')" style="display:block;position:absolute;top: 14px;
		left:0;height:25px;width:25px;background-image:url(images/x.png);
		background-size:20px 20px;background-repeat:no-repeat;background-position:50%;"></i>
	
	<div style="height: 50px; background-color:rgba(0,0,0,.6);width: 100%;border-top: 1px solid #fff;text-align: center;
	text-align: center; font-size:13px;font-weight:700;color:#fff;line-height: 50px;">
		
		<a href="<?php echo $heiad[1];?>" target="_blank"><span style="color: #FFFFFF;"><img src="images/huo.gif">
		<?php echo $heiad[0];?><img src="images/huo.gif"></span> </a>
		<a style="height: 40px;line-height: 40px;width:70px;text-align:left;background-color:#ec0909;
		bottom:0;top:0;margin: auto 10px auto 10px;font-size:14px;border: none;border-radius: 5px;padding: 0;
		color: #fff;display: inline-block;;text-align: center;" href="<?php echo $heiad[1];?>" target="_blank"><?php echo $heiad[2];?></a>
		<p></p>
	</div>
</div>

<!--漂浮底部功能-->
<div id="allsite" style="display: none;">
	<ul class="clearfix" id="clearfix" style="background-color:#000000">
		<?php
$youqing = $list['youqing'];
$data = json_decode($youqing, true);
for($i=0;$i<count($data);$i++)
{
echo'<li>
		    <a href="'.$data[$i]['url'].'" target="_blank">
			'.$data[$i]['name'].'
			</a>
		</li>';
}
?>
	</ul>
</div>	
<div class="cgi-foot-links">
<div class="cgi-pl-quick">
<div id="bar">
<div class="kai" style="display:none" onclick="$('.guan').show();$('.kai').hide();$('.cgi-foot-links').css('bottom','0')">展开 ? </div>
<div class="guan" onclick="$('.kai').show();$('.guan').hide();$('.cgi-foot-links').css('bottom','-60px')">收起 ? </div>
</div>
<ul class="clearfix">
<li><a  class="lianjie" data-url="tool/shuxing.html" href="javascript:void(0);"><span class="home"></span>生肖属性</a></li>
<li><a  class="lianjie" data-url="jilu/" href="javascript:void(0);"><span class="list"></span>开奖分析</a></li>
<li class="cfl-more"><a id="fixedNavKjZl" onclick="siteToggle()">更多</a></li>
<li><a  class="lianjie" data-url="tool/tiaoma/" href="javascript:void(0);"><span class="cfl4"></span>挑码助手</a></li>
<li><a  class="lianjie" data-url="tool/chat/" href="javascript:void(0);"><span class="bag"></span>聊天报码</a></li>
</ul>
</div>
</div>		
		
<div class="box pad">
		<div class="foot-img">
		<font color="#ffffff" size="4">
		<p class="copyright">Copyright &copy; 2008-<script type="text/javascript">document.write(new Date().getFullYear());</script>  All Rights Reserved.<br>
		<a style="color: #ffffff;font-weight:bold"><?php echo $list['name'];?></a>  <a style="color: #ffffff;font-weight:bold"><?php echo $list['yuming'];?></a>
		</p>
 		</font>
		</div>
		</div>
<div class="box pad" id="yxym">
<div class="table sxsm pad4">
<div class="list-title"><?php echo $list['name'];?> 欢迎您的到来！</div>
</div></div>		
<script>
function siteToggle(){$('#allsite').toggle();}
function removeElement(bar2){document.getElementById(bar2).style.display="none";}
var obj = document.getElementById("nav2");
var ot = 200;//obj.offsetTop
 document.onscroll = function() {
var st = document.body.scrollTop || document.documentElement.scrollTop;
obj.setAttribute("data-fixed", st >= ot ? "fixed" : "")
            }
var weixin = "<?php echo $list['weixin'];?>";
var weigao = "<?php echo $list['weigao'];?>";
var www_492130_com="<?php echo $list['tuzhi'];?>/<?php echo $qishu;?>/";
var apiurlkj = "492130.com.json";
function chuangkou(){
window.location.href="weixin://";
} 
$(document).ready(function() {
$(".box").css("background-image", "<?php echo $beijing[$list['tongji']];?>");
$(".header").css("background-image", "<?php echo $beijing[$list['tongji']];?>");
$(".dhl1").css("background-image", "<?php echo $beijing[$list['tongji']];?>");
});

setInterval(test, 3000);
var array = new Array();
var index = 0;
var array = new Array("<?php echo $lunad[1];?>", "<?php echo $lunad[2];?>", "<?php echo $lunad[3];?>");

function test() {
    var myimg = document.getElementById("imgs");
    if (index == array.length - 1) {
        index = 0;
    } else {
        index++;
    }
    myimg.src = array[index];
}		

    </script>   
    <div class="tan">
    </div>   
     <div class="tango"> 
      <img style="position:fixed;right:0px;top:0px;z-index:999;width: 30px;height: 30px;top: 5px;right: 10px;" class="close_tan" src="static/images/xx.png" alt="">     
    </div>	
 <script type="text/javascript" src="static/js/492130.js"></script>	
<!--统计 流量大建议删除--> 
<div style="display:none"> <script src="<?php echo $list['tuwen'];?>"></script></div>		
<!--统计 流量大建议删除--> 		
		</body>
		</html>