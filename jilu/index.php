<?php
include '../inc/const.php';
$page 			= $_GET ['page'] ? $_GET ['page'] : 1;
$page_size 		= 365;
$manager_type = $_SESSION['supermanager'] + 1;
$sqlstr=get_sql("select * from {pre}ls_lottery where id>=1 and id<=".$addkj." order by id desc");
$manager_list = $db->selectLimit ( $sqlstr, $page_size, ($page - 1) * $page_size );
$total_nums = $db->getRowsNum ( $sqlstr );
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
    <title>记录</title>
    <meta name="description" content="手机开奖直播_最快开奖直播_天空彩票与你同行_天下彩_1M六合彩_1m永久免费资料_全年开奖记录_全年彩图_齐中网" />
    <meta name="copyright" content="B3log" />
    <meta http-equiv="Window-target" content="_top" />
    <link rel="stylesheet" href="css/mobile-base.css?1623911986158" />

    <style>
        .nav,
        .cgi-head,
        .cgi-gsb ul li span.cgi-gsb-xye,
        /*.u-title-box .u-title,*/

        .u-pin-top,
        .u-pin-bot,
        .u-badge,
        .layui-m-layerbtn span[yes],
        .m-tj-wrap h4 {
            background-color: #4292EF !important;
        }

        .index .module-header h2 {
            border-top: 1px solid #4292EF !important;
            border-bottom: 1px solid #4292EF !important;
        }

        .index .module-header span svg,
        .layui-m-layerchild h3 {
            color: #4292EF !important;
        }

        button.green,
        .btn.green {
            background-color: #4292EF !important;
            border-color: #4292EF !important;
        }

        .u-title-box {
            border: 1px solid #4292EF
        }

        .u-con-border {
            box-shadow: 0 0 3px #4292EF;
        }
    </style>
    <link rel="stylesheet" href="css/theme-color.css?1623911986158" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="blank">
    <script>
        if (('standalone' in window.navigator) && window.navigator.standalone) {
            var noddy, remotes = false;
            document.addEventListener('click', function(event) {
                noddy = event.target;
                while (noddy.nodeName !== 'A' && noddy.nodeName !== 'HTML') noddy = noddy.parentNode;
                if ('href' in noddy && noddy.href.indexOf('http') !== -1) {
                    event.preventDefault();
                    document.location.href = noddy.href
                }
            }, false)
        }
    </script>
    <link href="css/six-style.css?1623911986158" rel="stylesheet" type="text/css">
    <link href="css/six-zszltk.css?1623911986158" rel="stylesheet" type="text/css">
    <link href="css/six-kj.css?1623911986158" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="cgi-tan-box-container" id="tipDialogContainer">
        <div class="cgi-tan-box">
            <div class="cgi-tan-content" id="tipDialogContainerInfo"></div>
        </div>
    </div>
    <div class="cgi-body">
        <!--头部start-->
        <header class="cgi-head">
            <a class="icon-back" href="/"></a>
            <span class="cgi-head-tit tit-center">2024年香港开奖走势</span>
            <a class="cgi-head-a" href="javascript:location.reload();">刷新</a>
        </header>
        <div class="fn-hr50"></div>
        <!--头部end-->
        <!--头部广告位start-->
        <!--头部广告位end-->
        <div class="cgi-wrap">
            <div class="mt10">
                <!--走势start-->
                <div id="tabBox1" class="cgi-zs">
                    <div class="hd">
                        <ul>
                            <li class="on"><a href="javascript:void(0)">开奖</a></li>
                            <li class=""><a href="javascript:void(0)">尾号</a></li>
                            <li class=""><a href="javascript:void(0)">头号</a></li>
                            <li class=""><a href="javascript:void(0)">波色</a></li>
                            <li class=""><a href="javascript:void(0)">五行</a></li>
                            <li class=""><a href="javascript:void(0)">生肖</a></li>
                        </ul>
                    </div>
                    <div class="tempWrap" style="overflow:hidden; position:relative;">
                        <div class="bd" id="tabBox1-bd">
<!--开奖开始-->
<div class="con">
<?php
function pin($wuxing)
{
if($wuxing=="金"){
$wxcss="jin";	
}elseif($wuxing=="木"){
$wxcss="mu";	
}elseif($wuxing=="水"){
$wxcss="shui";	
}elseif($wuxing=="火"){
$wxcss="huo";	
}elseif($wuxing=="土"){
$wxcss="tu";	
}
echo $wxcss;
}
foreach ($manager_list as $list){
?>						
 <div class="kj-tit">
六合彩开奖直播 <?php echo $list['time']; ?> 第<?php echo $list['issue']; ?>期
</div>
<div class="kj-box">
<ul class="clearfix">
<li><dl><dt class="ball-<?php echo $shuzi[(int)mb_substr(${'shengxiao'.$list['num1']}, 1, 2,"utf-8")]; ?>"><div class="num"><?php echo $list['num1']; ?></div></dt><dd><?php echo mb_substr(${'shengxiao'.$list['num1']}, 0, 1,"utf-8"); ?><font class="grey-txt">/</font><font class="wx-<?php echo pin(mb_substr(${'shengxiao'.$list['num1']}, 9, 1,"utf-8")); ?>"><?php echo mb_substr(${'shengxiao'.$list['num1']}, 9, 1,"utf-8"); ?></font></dd></dl></li>
<li><dl><dt class="ball-<?php echo $shuzi[(int)mb_substr(${'shengxiao'.$list['num2']}, 1, 2,"utf-8")]; ?>"><div class="num"><?php echo $list['num2']; ?></div></dt><dd><?php echo mb_substr(${'shengxiao'.$list['num2']}, 0, 1,"utf-8"); ?><font class="grey-txt">/</font><font class="wx-<?php echo pin(mb_substr(${'shengxiao'.$list['num2']}, 9, 1,"utf-8")); ?>"><?php echo mb_substr(${'shengxiao'.$list['num2']}, 9, 1,"utf-8"); ?></font></dd></dl></li>
<li><dl><dt class="ball-<?php echo $shuzi[(int)mb_substr(${'shengxiao'.$list['num3']}, 1, 2,"utf-8")]; ?>"><div class="num"><?php echo $list['num3']; ?></div></dt><dd><?php echo mb_substr(${'shengxiao'.$list['num3']}, 0, 1,"utf-8"); ?><font class="grey-txt">/</font><font class="wx-<?php echo pin(mb_substr(${'shengxiao'.$list['num3']}, 9, 1,"utf-8")); ?>"><?php echo mb_substr(${'shengxiao'.$list['num3']}, 9, 1,"utf-8"); ?></font></dd></dl></li>                                        
<li><dl><dt class="ball-<?php echo $shuzi[(int)mb_substr(${'shengxiao'.$list['num4']}, 1, 2,"utf-8")]; ?>"><div class="num"><?php echo $list['num4']; ?></div></dt><dd><?php echo mb_substr(${'shengxiao'.$list['num4']}, 0, 1,"utf-8"); ?><font class="grey-txt">/</font><font class="wx-<?php echo pin(mb_substr(${'shengxiao'.$list['num4']}, 9, 1,"utf-8")); ?>"><?php echo mb_substr(${'shengxiao'.$list['num4']}, 9, 1,"utf-8"); ?></font></dd></dl></li>
<li><dl><dt class="ball-<?php echo $shuzi[(int)mb_substr(${'shengxiao'.$list['num5']}, 1, 2,"utf-8")]; ?>"><div class="num"><?php echo $list['num5']; ?></div></dt><dd><?php echo mb_substr(${'shengxiao'.$list['num5']}, 0, 1,"utf-8"); ?><font class="grey-txt">/</font><font class="wx-<?php echo pin(mb_substr(${'shengxiao'.$list['num5']}, 9, 1,"utf-8")); ?>"><?php echo mb_substr(${'shengxiao'.$list['num5']}, 9, 1,"utf-8"); ?></font></dd></dl></li>
<li><dl><dt class="ball-<?php echo $shuzi[(int)mb_substr(${'shengxiao'.$list['num6']}, 1, 2,"utf-8")]; ?>"><div class="num"><?php echo $list['num6']; ?></div></dt><dd><?php echo mb_substr(${'shengxiao'.$list['num6']}, 0, 1,"utf-8"); ?><font class="grey-txt">/</font><font class="wx-<?php echo pin(mb_substr(${'shengxiao'.$list['num6']}, 9, 1,"utf-8")); ?>"><?php echo mb_substr(${'shengxiao'.$list['num6']}, 9, 1,"utf-8"); ?></font></dd></dl></li>
<li class="kj-jia"><dl><dt>➕</dt></dl></li>
<li><dl><dt class="ball-<?php echo $shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")]; ?>"><div class="num"><?php echo $list['num7']; ?></div></dt><dd><?php echo mb_substr(${'shengxiao'.$list['num7']}, 0, 1,"utf-8"); ?><font class="grey-txt">/</font><font class="wx-<?php echo pin(mb_substr(${'shengxiao'.$list['num7']}, 9, 1,"utf-8")); ?>"><?php echo mb_substr(${'shengxiao'.$list['num7']}, 9, 1,"utf-8"); ?></font></dd></dl></li>
</ul>
</div>                        
<?php
  	}
  ?>
</div>
<!--开奖结束-->
							 
<!--尾数开始-->
<div style="display: none;" class="con">
<table width="100%">
<tbody>
<tr class="tableti">
<td>期号</td><td>0</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td></tr>
<?php
$numa = 1;$numb = 1;$numc = 1;$numd = 1;$nume = 1;$numf = 1;$numg = 1;$numh = 1;$numi = 1;$numj = 1;
foreach ($manager_list as $list){
?>
<?php
if(substr($list['num7'],1,1)=="0")$numa = 0;$haoa=$numa++ ;if($haoa=="0")$haoa='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';	
if(substr($list['num7'],1,1)=="1")$numb = 0;$haob=$numb++ ;if($haob=="0")$haob='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';	
if(substr($list['num7'],1,1)=="2")$numc = 0;$haoc=$numc++ ;if($haoc=="0")$haoc='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';	
if(substr($list['num7'],1,1)=="3")$numd = 0;$haod=$numd++ ;if($haod=="0")$haod='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';	
if(substr($list['num7'],1,1)=="4")$nume = 0;$haoe=$nume++ ;if($haoe=="0")$haoe='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';
if(substr($list['num7'],1,1)=="5")$numf = 0;$haof=$numf++ ;if($haof=="0")$haof='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';	
if(substr($list['num7'],1,1)=="6")$numg = 0;$haog=$numg++ ;if($haog=="0")$haog='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';;	
if(substr($list['num7'],1,1)=="7")$numh = 0;$haoh=$numh++ ;if($haoh=="0")$haoh='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';	
if(substr($list['num7'],1,1)=="8")$numi = 0;$haoi=$numi++ ;if($haoi=="0")$haoi='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';
if(substr($list['num7'],1,1)=="9")$numj = 0;$haoj=$numj++ ;if($haoj=="0")$haoj='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';
?>	
<tr>
<td><?php echo $list['issue']; ?></td><td><i><?php echo $haoa; ?></i></td><td><i><?php echo $haob; ?></i></td><td><i><?php echo $haoc; ?></i></td><td><i><?php echo $haod; ?></i></td><td><i><?php echo $haoe; ?></i></td><td><i><?php echo $haof; ?></i></td><td><i><?php echo $haog; ?></i></td><td></i><?php echo $haoh; ?></i></td><td><i><?php echo $haoi; ?></i></td><td><i><?php echo $haoj; ?></i></td>
</tr>  
<?php
}
?>
 </tbody>
</table>
</div>
<!--尾数结束-->
							

<!--头数开始-->
<div style="display: none;" class="con">
<table width="100%">
<tbody><tr class="tableti"><td>期号</td><td>0</td><td>1</td><td>2</td><td>3</td><td>4</td></tr>
<?php
$numa = 1;$numb = 1;$numc = 1;$numd = 1;$nume = 1;
foreach ($manager_list as $list){
?>
<?php
if(substr($list['num7'],0,1)=="0")$numa = 0;$haoa=$numa++ ;if($haoa=="0")$haoa='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';	
if(substr($list['num7'],0,1)=="1")$numb = 0;$haob=$numb++ ;if($haob=="0")$haob='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';	
if(substr($list['num7'],0,1)=="2")$numc = 0;$haoc=$numc++ ;if($haoc=="0")$haoc='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';	
if(substr($list['num7'],0,1)=="3")$numd = 0;$haod=$numd++ ;if($haod=="0")$haod='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';	
if(substr($list['num7'],0,1)=="4")$nume = 0;$haoe=$nume++ ;if($haoe=="0")$haoe='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';
if(substr($list['num7'],0,1)=="5")$numf = 0;$haof=$numf++ ;if($haof=="0")$haof='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';	
?>									
<tr>
<td><?php echo $list['issue']; ?></td><td><i><?php echo $haoa; ?></i></td><td><i><?php echo $haob; ?></i></td><td><i><?php echo $haoc; ?></li></td><td><i><?php echo $haod; ?></i></td><td><i><?php echo $haoe; ?></i></td>
</tr>
<?php
}
?>                                       
</tbody>
</table>
</div>
<!--头数结束-->
							
<!--波色开始-->
<div style="display: none;" class="con">
<table width="100%">
<tbody>
<tr class="tableti"><td>期号</td><td>红波</td><td>蓝波</td><td>绿波</td></tr>
<?php
$numa = 1;$numb = 1;$numc = 1;
foreach ($manager_list as $list){
?>
<?php
if(mb_substr(${'shengxiao'.$list['num7']}, 7, 2,"utf-8")=="红波")$numa = 0;$haoa=$numa++ ;if($haoa=="0")$haoa='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';	
if(mb_substr(${'shengxiao'.$list['num7']}, 7, 2,"utf-8")=="蓝波")$numb = 0;$haob=$numb++ ;if($haob=="0")$haob='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';	
if(mb_substr(${'shengxiao'.$list['num7']}, 7, 2,"utf-8")=="绿波")$numc = 0;$haoc=$numc++ ;if($haoc=="0")$haoc='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';	
?>												
<tr>
<td><?php echo $list['issue']; ?></td><td><i><?php echo $haoa; ?></i></td><td><i><?php echo $haob; ?></i><td><i><?php echo $haoc; ?></i></td>
</tr>
<?php
}
?>										
</tbody>
</table>
</div>
<!--波色结束-->							
							
<!--五行开始-->
<div style="display: none;" class="con">
<table width="100%">
<tbody>
<tr class="tableti"><td>期号</td><td>金</td><td>木</td><td>水</td><td>火</td><td>土</td></tr>
<?php
$numa = 1;$numb = 1;$numc = 1;$numd = 1;$nume = 1;
foreach ($manager_list as $list){
?>
<?php
if(mb_substr(${'shengxiao'.$list['num7']}, 9, 1,"utf-8")=="金")$numa = 0;$haoa=$numa++ ;if($haoa=="0")$haoa='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';	
if(mb_substr(${'shengxiao'.$list['num7']}, 9, 1,"utf-8")=="木")$numb = 0;$haob=$numb++ ;if($haob=="0")$haob='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';	
if(mb_substr(${'shengxiao'.$list['num7']}, 9, 1,"utf-8")=="水")$numc = 0;$haoc=$numc++ ;if($haoc=="0")$haoc='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';	
if(mb_substr(${'shengxiao'.$list['num7']}, 9, 1,"utf-8")=="火")$numd = 0;$haod=$numd++ ;if($haod=="0")$haod='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';	
if(mb_substr(${'shengxiao'.$list['num7']}, 9, 1,"utf-8")=="土")$nume = 0;$haoe=$nume++ ;if($haoe=="0")$haoe='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';	
?>		
<tr>
<td><?php echo $list['issue']; ?></td><td><i><?php echo $haoa; ?></i></td><td><i><?php echo $haob; ?></i></td><td><i><?php echo $haoc; ?></i></td><td><i><?php echo $haod; ?></i></td><td><i><?php echo $haoe; ?></i></td>
</tr>
<?php
}
?>	
</tbody>
</table>
</div>
<!--五行结束-->

<!--生肖开始-->
<div style="display: none;" class="con">
<table width="100%">
<tbody>
<tr class="tableti">
<td>期号</td><td>鼠</td><td>牛</td><td>虎</td><td>兔</td><td>龙</td><td>蛇</td><td>马</td><td>羊</td><td>猴</td><td>鸡</td><td>狗</td><td>猪</td></tr>
<?php
$numa = 1;$numb = 1;$numc = 1;$numd = 1;$nume = 1;$numf = 1;$numg = 1;$numh = 1;$numi = 1;$numj = 1;$numk = 1;$numl = 1;
foreach ($manager_list as $list){
?>
<?php
if(mb_substr(${'shengxiao'.$list['num7']}, 0, 1,"utf-8")=="鼠")$numa = 0;$haoa=$numa++ ;if($haoa=="0")$haoa='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';	
if(mb_substr(${'shengxiao'.$list['num7']}, 0, 1,"utf-8")=="牛")$numb = 0;$haob=$numb++ ;if($haob=="0")$haob='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';	
if(mb_substr(${'shengxiao'.$list['num7']}, 0, 1,"utf-8")=="虎")$numc = 0;$haoc=$numc++ ;if($haoc=="0")$haoc='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';	
if(mb_substr(${'shengxiao'.$list['num7']}, 0, 1,"utf-8")=="兔")$numd = 0;$haod=$numd++ ;if($haod=="0")$haod='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';	
if(mb_substr(${'shengxiao'.$list['num7']}, 0, 1,"utf-8")=="龙")$nume = 0;$haoe=$nume++ ;if($haoe=="0")$haoe='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';
if(mb_substr(${'shengxiao'.$list['num7']}, 0, 1,"utf-8")=="蛇")$numf = 0;$haof=$numf++ ;if($haof=="0")$haof='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';	
if(mb_substr(${'shengxiao'.$list['num7']}, 0, 1,"utf-8")=="马")$numg = 0;$haog=$numg++ ;if($haog=="0")$haog='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';;	
if(mb_substr(${'shengxiao'.$list['num7']}, 0, 1,"utf-8")=="羊")$numh = 0;$haoh=$numh++ ;if($haoh=="0")$haoh='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';	
if(mb_substr(${'shengxiao'.$list['num7']}, 0, 1,"utf-8")=="猴")$numi = 0;$haoi=$numi++ ;if($haoi=="0")$haoi='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';
if(mb_substr(${'shengxiao'.$list['num7']}, 0, 1,"utf-8")=="鸡")$numj = 0;$haoj=$numj++ ;if($haoj=="0")$haoj='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';
if(mb_substr(${'shengxiao'.$list['num7']}, 0, 1,"utf-8")=="狗")$numk = 0;$haok=$numk++ ;if($haok=="0")$haok='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';
if(mb_substr(${'shengxiao'.$list['num7']}, 0, 1,"utf-8")=="猪")$numl = 0;$haol=$numl++ ;if($haol=="0")$haol='<font class="'.$shuzi[(int)mb_substr(${'shengxiao'.$list['num7']}, 1, 2,"utf-8")].'Class">'.$list['num7'].'</font>';

?>
<tr>
<td><?php echo $list['issue']; ?></td><td><i><?php echo $haoa; ?></i></td><td><i><?php echo $haob; ?></i></td><td><i><?php echo $haoc; ?></i></td><td><i><?php echo $haod; ?></i></td><td><i><?php echo $haoe; ?></i></td><td><i><?php echo $haof; ?></i></td><td><i><?php echo $haog; ?></i></td><td><i><?php echo $haoh; ?></i></td><td><i><?php echo $haoi; ?></i></td><td><i><?php echo $haoj; ?></i></td><td><i><?php echo $haok; ?></i></td><td><i><?php echo $haol; ?></i></td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
<!--生肖结束-->							
							
							
							
 </div>
</div>
</div>
<!--走势end-->
</div>
</div>
        <!--底部广告位start-->
        <!--底部广告位end-->
<div class="fn-hr60"></div>
</div>

 

   
    


    <!--六合开奖走势页-统计start-->
 
    <!--六合开奖走势页-统计end-->
    <script src="js/toptool.js"></script>
    <script type="text/javascript">
  
    </script>
</body>

</html>
