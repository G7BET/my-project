<?php 
require_once '../../inc/const.php';

$act = trim($_GET['act']);
$id = getvar('id');


//修改
if ($act=='mod'){

	$record = array(
'bbs1'=>$_POST ['bbs1'],
'bbs2'=>$_POST ['bbs2'],
'bbs3'=>$_POST ['bbs3'],
'bbs4'=>$_POST ['bbs4'],
'bbs5'=>$_POST ['bbs5'],
'bbs6'=>$_POST ['bbs6'],
'bbs7'=>$_POST ['bbs7'],
'bbs8'=>$_POST ['bbs8'],
'bbs9'=>$_POST ['bbs9'],
'bbs10'=>$_POST ['bbs10'],
'bbs11'=>$_POST ['bbs11'],
'bbs12'=>$_POST ['bbs12'],
'bbs13'=>$_POST ['bbs13'],
'bbs14'=>$_POST ['bbs14'],
'bbs15'=>$_POST ['bbs15'],
'bbs16'=>$_POST ['bbs16'],
'bbs17'=>$_POST ['bbs17'],
'bbs18'=>$_POST ['bbs18'],
'bbs19'=>$_POST ['bbs19'],
'bbs20'=>$_POST ['bbs20'],
'bbs21'=>$_POST ['bbs21'],
'bbs22'=>$_POST ['bbs22'],
'bbs23'=>$_POST ['bbs23'],
'bbs24'=>$_POST ['bbs24'],
'bbs25'=>$_POST ['bbs25'],
'bbs26'=>$_POST ['bbs26'],
'bbs27'=>$_POST ['bbs27'],
'bbs28'=>$_POST ['bbs28'],
'bbs29'=>$_POST ['bbs29'],
'bbs30'=>$_POST ['bbs30'],
'bbs31'=>$_POST ['bbs31'],
'bbs32'=>$_POST ['bbs32'],
'bbs33'=>$_POST ['bbs33'],
'bbs34'=>$_POST ['bbs34'],
'bbs35'=>$_POST ['bbs35'],
'bbs36'=>$_POST ['bbs36'],
'bbs37'=>$_POST ['bbs37'],
'bbs38'=>$_POST ['bbs38'],
'bbs39'=>$_POST ['bbs39'],
'bbs40'=>$_POST ['bbs40'],
'bbs41'=>$_POST ['bbs41'],
'bbs42'=>$_POST ['bbs42'],
'bbs43'=>$_POST ['bbs43'],
'bbs44'=>$_POST ['bbs44'],
'bbs45'=>$_POST ['bbs45'],
'bbs46'=>$_POST ['bbs46'],
'bbs47'=>$_POST ['bbs47'],
'bbs48'=>$_POST ['bbs48'],
'bbs49'=>$_POST ['bbs49'],
'bbs50'=>$_POST ['bbs50'],
	);
	$db->update($GLOBALS[databasePrefix].'bbs',$record,'id='.$id);
	echo "<script>alert('修改成功');history.go(-1)</script>";
}



function check_username($issue){
	global $db;
	return $db->getRowsNum(get_sql("select id,issue from {pre}bbs where issue='".$issue."'"));
}

?>
