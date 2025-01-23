<?php 
require_once '../../inc/const.php';

$act = trim($_GET['act']);
$id = $_POST ['id'];


//修改
if ($act=='mod'){

	$record = array(
'name'=>$_POST ['name'],
'mingcheng'=>$_POST ['mingcheng'],
'liulang'=>$_POST ['liulang'],
	);
	$db->update($GLOBALS[databasePrefix].'zuozhe',$record,'id='.$id);
	echo "<script>alert('修改成功');history.go(-1)</script>";
}



function check_username($issue){
	global $db;
	return $db->getRowsNum(get_sql("select id,issue from {pre}zuozhe where issue='".$issue."'"));
}

?>
