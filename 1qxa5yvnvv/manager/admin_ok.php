<?php 
require_once '../../inc/const.php';

$act = trim($_GET['act']);
$id = getvar('id');

//添加数据
if ($act=='add') {
	if(check_username($_POST['username'])){
		exit("<script>alert('用户 ".$_POST['username']." 已经存在!');window.history.go(-1)</script>");
	}

	$record = array(
		'username'		=>$_POST ['username'],
		'password'		=>md5($_POST ['password']),
		'addtime'		=>date ( "Y-m-d H:i:s" ),
		'supermanager'  =>$_SESSION['supermanager'] + 1
	);
	$id = $db->insert($GLOBALS[databasePrefix].'manager',$record);
	echo "<script>alert('添加成功!');window.location='admin_manage.php';</script>";
}
//修改
if ($act=='mod'){
	
	$record = array(
		'username'		=>$_POST ['username'],
		'password'		=>md5($_POST ['password']),
		'addtime'		=>date ( "Y-m-d H:i:s" )
	);
	
	$db->update($GLOBALS[databasePrefix].'manager',$record,'id='.$id);
	echo "<script>alert('修改成功!');window.location='admin_manage.php';</script>";
}

//删除
if ($act=='del') {	
	//$where = "id=".$id;
	$db->delete($GLOBALS[databasePrefix].'manager',"id=".$id);
	echo "<script>alert('删除成功!');window.location='admin_manage.php';</script>";
}

function check_username($username){
	global $db;
	return $db->getRowsNum(get_sql("select id,username from {pre}manager where username='".$username."'"));
}

?>
