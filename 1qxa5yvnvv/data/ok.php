<?php 
require_once '../../inc/const.php';

$act = trim($_GET['act']);
$id = getvar('id');


//修改
if ($act=='mod'){

	$record = array(
		'liuxiao'		=>$_POST ['liuxiao'],
		'liuma'		=>$_POST ['liuma'],
		'chengyu'		=>$_POST ['chengyu'],
		'shierma' => $_POST ['shierma'],
	    'guilvliuxiao' => $_POST ['guilvliuxiao'],
	    'yiwei' => $_POST ['yiwei'],
	    'santou' => $_POST ['santou'],
		'wuwei' => $_POST ['wuwei'],
		'jiuma' => $_POST ['jiuma'],
		'jiuxiao' => $_POST ['jiuxiao'],
		'daxiao' => $_POST ['daxiao'],
		'danshuang' => $_POST ['danshuang'],
		'jiaye' => $_POST ['jiaye'],
		'shama' => $_POST ['shama'],
		'shiju' => $_POST ['shiju'],
	    'qqsh' => $_POST ['qqsh'],
		'nannv' => $_POST ['nannv'],
		'wuxing' => $_POST ['wuxing'],
		'bose' => $_POST ['bose'],
		'jieshi' => $_POST ['jieshi'],
		'ziliao1' => $_POST ['ziliao1'],
		'ziliao2' => $_POST ['ziliao2'],
		'ziliao3' => $_POST ['ziliao3'],
		'ziliao4' => $_POST ['ziliao4'],
		'ziliao5' => $_POST ['ziliao5'],
		'ziliao6' => $_POST ['ziliao6'],
		'ziliao7' => $_POST ['ziliao7'],
		'ziliao8' => $_POST ['ziliao8'],
		'ziliao9' => $_POST ['ziliao9'],
		'ziliao10' => $_POST ['ziliao10'],
		'ziliao11' => $_POST ['ziliao11'],
		'ziliao12' => $_POST ['ziliao12'],
		'ziliao13' => $_POST ['ziliao13'],
		'ziliao14' => $_POST ['ziliao14'],
	);
	$db->update($GLOBALS[databasePrefix].'ziliao',$record,'id='.$id);
	echo "<script>alert('修改成功');history.go(-1)</script>";
}



function check_username($issue){
	global $db;
	return $db->getRowsNum(get_sql("select id,issue from {pre}ziliao where issue='".$issue."'"));
}

?>
