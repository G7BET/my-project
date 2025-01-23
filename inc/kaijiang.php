 <?php 
require_once("../inc/const.php");
header("Content-Type: text/html;charset=utf-8");
$url = "http://api.493210.com/bmam.js";
$ch = curl_init();
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT,10);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// 澳门
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);  
$html = curl_exec($ch);
//echo $html;
//echo $mc[1];
$data= json_decode($html,true);
$mc=explode(",",$data['k']);
//echo $data['k'].'<br>';
if(preg_match("/[\x7f-\xff]+$/",$mc[1])||preg_match("/[a-zA-Z]/",$mc[1])||$mc[1]==""){
$mc[1]="今";	
}
if(preg_match("/[\x7f-\xff]/",$mc[2])||preg_match("/[a-zA-Z]/",$mc[2])||$mc[2]==""){
$mc[2]="晚";	
}
if(preg_match("/[\x7f-\xff]/",$mc[3])||preg_match("/[a-zA-Z]/",$mc[3])||$mc[3]==""){
$mc[3]="开";	
}
if(preg_match("/[\x7f-\xff]/",$mc[4])||preg_match("/[a-zA-Z]/",$mc[4])||$mc[4]==""){
$mc[4]="澳";	
}
if(preg_match("/[\x7f-\xff]/",$mc[5])||preg_match("/[a-zA-Z]/",$mc[5])||$mc[5]==""){
$mc[5]="请";	
}
if(preg_match("/[\x7f-\xff]/",$mc[6])||preg_match("/[a-zA-Z]/",$mc[6])||$mc[6]==""){
$mc[6]="等";	
}
if(preg_match("/[\x7f-\xff]/",$mc[7])||preg_match("/[a-zA-Z]/",$mc[7])||$mc[7]==""){
$mc[7]="待";	
}


$jintian=date('Y-m-d H:i:s');
//$mingtian=date('Y-m-d H:i:s',strtotime('+1 day'));
$mingtian=date('Y');
$yue=date('m',strtotime('+1 day'));
$ri=date('d',strtotime('+1 day'));
$weekarray=array("日","一","二","三","四","五","六");
$xingqi=$weekarray[date("w",strtotime(date('Y-m-d H:i:s',strtotime('+1 day'))))];
for ($h=1; $h<=49; $h++) {
$tema[str_pad($h,2,"0",STR_PAD_LEFT)]="ok";
$tema[$h]="ok";
}
$xyqam=$mc[0]+1;

?>


<?php
$filemc = '../492130.com.json';
$aomen='{"k":"'.$mc[0].','.$mc[1].','.$mc[2].','.$mc[3].','.$mc[4].','.$mc[5].','.$mc[6].','.$mc[7].','.$mc[8].','.$mc[9].','.$mc[10].','.$mc[11].',21:30:00,2025","t":"1000","tool":"#492130#com","url":"","lhc":"","ok":"0"}';
$fpmc = fopen($filemc,"w");
fwrite($fpmc ,$aomen."\r\n");
fclose($fpmc);
//echo '自动开奖成功：<br>当前为澳门开奖<br>开奖期数：'.$mc[0].'<br>号码：'.$mc[1].'<br>号码：'.$mc[2].'<br>号码：'.$mc[3].'<br>号码：'.$mc[4].'<br>号码：'.$mc[5].'<br>号码：'.$mc[6].'<br>特码：'.$mc[7].'<br>下一期期数：'.$mc[8].'<br>下一期时间：'.$mingtian.'-'.$mc[9].'-'.$mc[10].'<br><br>下一步在21:50分自动写进数据库<br>最后在22:10自动更新所有资料<br>';	
?>
<?php
if(preg_match("/[\x7f-\xff]/",$mc[7])||preg_match("/[a-zA-Z]/",$mc[7])||$mc[7]==""||$mc[7]=="0"||$mc[7]=="00"||$mc[7]==" "){
echo '采集开奖中.....';	
exit(); 
}
if(check_username(str_replace("2025","",$mc[0]))){
	echo"澳门第 ".str_replace("2025","",$mc[0])." 期已经存在!";
$jintian=date('Y-m-d H:i:s');
$record = array(
		'lotteryId'		=>"492130.com",
		'year'		=>"2025",
		'issue' => str_replace("2025","",$mc[0]),
	    'nextissue' => str_replace("2025","",$mc[8]),
	    'nextissuetime' => "2025-".$mc[9]."-".$mc[10],
	    'num1' => str_pad($mc[1],2,"0",STR_PAD_LEFT),
		'num2' => str_pad($mc[2],2,"0",STR_PAD_LEFT),
		'num3' => str_pad($mc[3],2,"0",STR_PAD_LEFT),
		'num4' => str_pad($mc[4],2,"0",STR_PAD_LEFT),
		'num5' => str_pad($mc[5],2,"0",STR_PAD_LEFT),
		'num6' => str_pad($mc[6],2,"0",STR_PAD_LEFT),
		'num7' => str_pad($mc[7],2,"0",STR_PAD_LEFT),
		'videoUrl' => "/lottery/video/2025/2032/".str_replace("2025","",$mc[0]).".mp4",
		'tjz' => "",
	    'ip' => "",
	);
	$db->update($GLOBALS[databasePrefix].'ls_lottery',$record,'id='.(int)str_replace("2025","",$mc[0]).'');
	echo "修改澳门第 ".str_replace("2025","",$mc[0])." 期成功<br><br>";			
	exit(); 	
	}else{	
$jintian=date('Y-m-d H:i:s');
$record = array(
		'lotteryId'		=>"492130.com",
		'year'		=>"2025",
		'time'		=>$jintian,
		'issue' => str_replace("2025","",$mc[0]),
	    'nextissue' => str_replace("2025","",$mc[8]),
	    'nextissuetime' => "2025-".$mc[9]."-".$mc[10],
	    'num1' => str_pad($mc[1],2,"0",STR_PAD_LEFT),
		'num2' => str_pad($mc[2],2,"0",STR_PAD_LEFT),
		'num3' => str_pad($mc[3],2,"0",STR_PAD_LEFT),
		'num4' => str_pad($mc[4],2,"0",STR_PAD_LEFT),
		'num5' => str_pad($mc[5],2,"0",STR_PAD_LEFT),
		'num6' => str_pad($mc[6],2,"0",STR_PAD_LEFT),
		'num7' => str_pad($mc[7],2,"0",STR_PAD_LEFT),
		'videoUrl' => "/lottery/video/2025/2032/".str_replace("2025","",$mc[0]).".mp4",
		'tjz' => "",
	    'ip' => "",
	);
	$db->update($GLOBALS[databasePrefix].'ls_lottery',$record,'id='.(int)str_replace("2025","",$mc[0]).'');
   echo "添加澳门第 ".str_replace("2025","",$mc[0])." 期开奖写入数据库成功<br><br>";	
	}
?>


<?php
function check_username($username){
	global $db;
	return $db->getRowsNum(get_sql("select id,issue from ls_lottery where issue='".$username."'"));
}
?>