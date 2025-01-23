<?php 
require_once '../../inc/const.php';

$act = trim($_GET['act']);
$id = getvar('id');

//添加数据
if ($act=='add') {
	if(check_username($_POST['issue'])) {
		exit("<script>alert('开奖 ".$_POST['issue']." 期数已经存在!');window.history.go(-1)</script>");
	}

$record = array(
		'lotteryId'		=>"492130.com",
		'year'		=>"2023",
		'time'		=>$_POST ['time'],
		'issue' => str_pad($_POST ['issue'],3,"0",STR_PAD_LEFT),
	    'nextissue' => str_pad($_POST ['nextissue'],3,"0",STR_PAD_LEFT),
	    'nextissuetime' => $_POST ['nextissuetime'],
	    'num1' => str_pad($_POST ['num1'],2,"0",STR_PAD_LEFT),
		'num2' => str_pad($_POST ['num2'],2,"0",STR_PAD_LEFT),
		'num3' => str_pad($_POST ['num3'],2,"0",STR_PAD_LEFT),
		'num4' => str_pad($_POST ['num4'],2,"0",STR_PAD_LEFT),
		'num5' => str_pad($_POST ['num5'],2,"0",STR_PAD_LEFT),
		'num6' => str_pad($_POST ['num6'],2,"0",STR_PAD_LEFT),
		'num7' => str_pad($_POST ['num7'],2,"0",STR_PAD_LEFT),
		'videoUrl' => "/lottery/video/2023/2032/".str_pad($_POST ['issue'],3,"0",STR_PAD_LEFT).".mp4",
		'tjz' => $_POST ['tjz'],
	    'ip' => $_SERVER['REMOTE_ADDR'],
	);
	$db->update($GLOBALS[databasePrefix].'ls_lottery',$record,'id='.$id);
	echo "<script>alert('添加开奖成功!');window.location='manage.php';</script>";
}
//修改
if ($act=='mod'){

	$record = array(
		'lotteryId'		=>"492130.com",
		'year'		=>"2023",
		'time'		=>$_POST ['time'],
		'issue' => str_pad($_POST ['issue'],3,"0",STR_PAD_LEFT),
	    'nextissue' => str_pad($_POST ['nextissue'],3,"0",STR_PAD_LEFT),
	    'nextissuetime' => $_POST ['nextissuetime'],
	    'num1' => str_pad($_POST ['num1'],2,"0",STR_PAD_LEFT),
		'num2' => str_pad($_POST ['num2'],2,"0",STR_PAD_LEFT),
		'num3' => str_pad($_POST ['num3'],2,"0",STR_PAD_LEFT),
		'num4' => str_pad($_POST ['num4'],2,"0",STR_PAD_LEFT),
		'num5' => str_pad($_POST ['num5'],2,"0",STR_PAD_LEFT),
		'num6' => str_pad($_POST ['num6'],2,"0",STR_PAD_LEFT),
		'num7' => str_pad($_POST ['num7'],2,"0",STR_PAD_LEFT),
		'videoUrl' => "/lottery/video/2023/2032/".str_pad($_POST ['issue'],3,"0",STR_PAD_LEFT).".mp4",
		'tjz' => $_POST ['tjz'],
	    'ip' => $_SERVER['REMOTE_ADDR'],
	);
	$db->update($GLOBALS[databasePrefix].'ls_lottery',$record,'id='.$id);
	echo "<script>alert('修改成功!');window.location='manage.php';</script>";
}

//删除
if ($act=='del') {
	    //$kong ="";
   		$record = array(
		'lotteryId'		=>$id,
		'year'		=>$_POST ['kong'],
		'time'		=>$_POST ['kong'],
		'issue' => $_POST ['kong'],
	    'nextissue' => $_POST ['kong'],
	    'nextissuetime' => $_POST ['kong'],
	    'num1' => $_POST ['kong'],
		'num2' => $_POST ['kong'],
		'num3' => $_POST ['kong'],
		'num4' => $_POST ['kong'],
		'num5' => $_POST ['kong'],
		'num6' => $_POST ['kong'],
		'num7' => $_POST ['kong'],
		'videoUrl' => $_POST ['kong'],
		'tjz' => $_POST ['kong'],
	    'ip' => $_POST ['kong'],
	);
	$db->update($GLOBALS[databasePrefix].'ls_lottery',$record,'id='.$id);
	echo "<script>alert('删除成功');window.location='manage.php';</script>";
}

function check_username($issue){
	global $db;
	return $db->getRowsNum(get_sql("select id,issue from {pre}ls_lottery where issue='".$issue."'"));
}

?>
