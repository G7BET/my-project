<? 

function getvar($var){
	$result = isset($_GET[$var])?$_GET[$var]:$_POST[$var];
	$result = addslashes(trim($result));
	return $result;
}


function page($sqlstr,$pagesize,$url,$page){
	global $db;
	$p = $page;
	//$p = empty($p)?$p:1;
	$totle_nums=$db->getRowsNum($sqlstr);
	$page_nums=ceil($totle_nums/$pagesize);
	$pre_page=($page-1)<1?1:$page-1;
	$next_page=($page+1)>$page_nums?$page_nums:$page+1;
	$var_temp= '<div class=page><span><strong>'.$pagesize.'/'.$totle_nums.'</strong></span><a href='.$url.'=1><<</a><a href='.$url.'='.$pre_page.'><</a>';
	
	if($p>=$page_nums-99){
	$tiao=$page_nums;	
	}else{
	$tiao=$p+99;
	}
	
	for($i=$p;$i<=$tiao;$i++){
		if($p==$i){
			$var_temp.= '<a href='.$url.'='.$i.' class=in>'.$i.'</a>';
		}else{
			$var_temp.= '<a href='.$url.'='.$i.'>'.$i.'</a>';
		}
	}

	$var_temp.= '<a href='.$url.'='.$next_page.'>></a><a href='.$url.'='.$page_nums.'>>></a></div>';
	echo $var_temp;
}


function get_1og($cid){
$date=date("Y-m-d");
$time=date("H:i:s");
mysql_query("delete from online");
mysql_query("delete from pv");
mysql_query("delete from jilu");
mysql_query("delete from ip");
mysql_query("update parameter set today=1,count=1,today_date='".$date."',time='".$time."' where id=1");
echo "<script>alert('清除数据成功');history.go(-1)</script>";
}


function makecontent($templatedir,$htmldir,$filename,$content){
	$filetemplate=$templatedir;
	$file=fopen($filetemplate,'rb');
	$temp=fread($file,filesize($filetemplate));
	$temp=str_replace('{content}',$content,$temp);
	fwrite(fopen($htmldir.$filename.'.html','wb'),$temp);
}

function del_file($id){
	global $db;
	$list=$db->getonerow(get_sql('select * from {pre}content where id='.$id));
	$dir='../../html/'.$list['filename'].'.html';
	unlink($dir);
}

function gethtml_filename($id){
	global $db;
	$temp=$db->getonerow(get_sql('select * from {pre}content where id='.$id));
	$filename=$temp['filename'];
	return $filename;
}

function getsortlist($dataform,$fid,$url){
	global $db;
	$sqlstr="select * from ".$dataform." where fid=".$fid;
	$sort_list=$db->getlist($sqlstr);
	foreach ($sort_list as $sort){
		if ($p==$i){
			echo "<li><a href='".$url."?id=".$sort['cid']."' title='".$sort['name']."' class='current'>".$sort['name']."</a></li>";
		}else{
			echo "<li><a href='".$url."?id=".$sort['cid']."' title='".$sort['name']."'>".$sort['name']."</a></li>";
		}
	}
}

function get_kjlog($cid){
	global $db;
	$weekarray=array("日","一","二","三","四","五","六");
	$list = $db->getonerow(get_sql("select * from {pre}ls_lottery where id=".$cid." order by id desc"));
   $log='{"k":"'.$list['issue'].','.$list['num1'].','.$list['num2'].','.$list['num3'].','.$list['num4'].','.$list['num5'].','.$list['num6'].','.$list['num7'].','.$list['nextissue'].','.substr($list['nextissuetime'],5,2).','.substr($list['nextissuetime'],8,2).','.$weekarray[date("w",strtotime($list['nextissuetime']))].',21:30:00,2025","t":"1000","tool":"#492130#com","url":"","lhc":"","ok":"0"}';
   file_put_contents("../../492130.com.json",$log);
}


function addcount($id){
	global $db;
	$list=$db->getonerow(get_sql('select * from {pre}content where id='.$id));
	$count=$list['count']+1;
	$record = array(
		'count'		=>$count
	);
	$db->update($GLOBALS[databasePrefix].'content',$record,'id='.$id);
}

function get_log($cid){
	global $db;
	$list = $db->getonerow(get_sql("select * from {pre}config where id=1"));
	$log=" ";
	$record = array(
		'log'		=>$log
	);
	$db->update($GLOBALS[databasePrefix].'config',$record,'id=1');
}

function get_sql($sql_str){
	$sql_temp = str_replace('{pre}',$GLOBALS[databasePrefix],$sql_str);
	return $sql_temp;
}
function getFile($url, $save_dir = '', $filename = '', $type = 0) {
    if (trim($url) == '') {
        return false;
    }
    if (trim($save_dir) == '') {
        $save_dir = './';
    }
    if (0 !== strrpos($save_dir, '/')) {
        $save_dir.= '/';
    }
    if (!file_exists($save_dir) && !mkdir($save_dir, 0777, true)) {
        return false;
    }
    if ($type) {
        $ch = curl_init();
        $timeout = 5;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);  
        $content = curl_exec($ch);
        curl_close($ch);
    } else {
        ob_start();
        readfile($url);
        $content = ob_get_contents();
        ob_end_clean();
    }
    $size = strlen($content);
    $fp2 = @fopen($save_dir . $filename, 'w');
    fwrite($fp2, $content);
    fclose($fp2);
    unset($content, $url);
    return array(
        'file_name' => $filename,
        'save_path' => $save_dir . $filename
    );
}

function get_depth($fid){
	global $db;
	$list = $db->getonerow(get_sql("select * from {pre}class where id = ".$fid));
	$temp = ($fid == '0') ? 0 : $list['depth'];
	return $temp;
}
function get_base($fid){
	$temp = base64_decode($fid);
	return $temp;
}

function get_sons($cid){
	global $db;
	$list = $db->getonerow(get_sql("select sons from {pre}class where id=".$cid));
	$temp = empty($list['sons']) ? $cid : $list['sons'];
	return $temp;
}

function get_update_sons($fid,$id){
	global $db;
	$temp_id = $id;
	if ($fid > 0) {
		$list = $db->getonerow(get_sql("select id,sons,fid from {pre}class where id=".$fid));
		$temp = empty($list['sons']) ? $id : $list['sons'].','.$temp_id;
		mysql_query(get_sql("update {pre}class set sons='". $temp ."' where id=".$fid));
		get_update_sons($list['fid'],$temp_id);
	}
}

function get_fid($id){
	global $db;
	$list = $db->getonerow(get_sql("select fid from {pre}class where id=".$id));
	return $list['fid'];
}

function get_supermanager($id){
	global $db;
	$list = $db->getonerow(get_sql("select supermanager from {pre}manager where id=".$id));
	if (!empty($list['supermanager'])){
		return $list['supermanager'];
	}
}


function get_userip(){
	$user_IP = ($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"];
	$user_IP = ($user_IP) ? $user_IP : $_SERVER["REMOTE_ADDR"]; 
	return $user_IP;
}

function utf_substr($str,$len){
	for($i=0;$i<$len;$i++){
		$temp_str=substr($str,0,1);
		if(ord($temp_str) > 127){
			$i++;
			if($i<$len){
				$new_str[]=substr($str,0,3);
				$str=substr($str,3);
			}
		}else{
			$new_str[]=substr($str,0,1);
			$str=substr($str,1);
		}
	}
	return join($new_str);
}


function get_nbsp($str){
	$temp = str_replace(" ","_",trim($str));
	return $temp;
}
?>
