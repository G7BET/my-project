<?php
error_reporting(E_ERROR); 
ini_set("display_errors","Off");//运行正常 屏蔽错误
?>
<?php 
session_start();
$allow = "10";  
if (isset($_SESSION["sep"]))  
{  
if (time() - $_SESSION["sep"] < $allow)  
{
echo 'chat({"ok":"2"})';	
exit();
}  
else  
{  
$_SESSION["sep"] = time();  
}  
}  
else  
{  
$_SESSION["sep"] = time();  
}
?>

<?php
function guanjianzi($content){
$keyword = array ('',' ','国家','QQ','qq','扣扣','微信','wx','weixin','威信','共产党','习近平','江泽民','独立','台独','港独','中国','骗子','网站','http','https','网址','com','联系','www','银行','平台','邮箱','@','<','>','妈','子','做爱','阴','鸡吧','操','微博','xyz','net','cn','bet','成人','黄色','黄站','视频','直播','真人','搜索','百度','搜狗','关键字','关键词','国民党','民进党','admin','客服','管理员','诚信','管理','超级','群','草','民主','大陆','提款','充值','系统消息','系统提示','系统公告');
$m = 0;
for($i = 0; $i < count ( $keyword ); $i ++) {
if (substr_count ( $content, $keyword [$i] ) > 0) {
$m ++;
}
}
return $m;
}
?>
<?php 
if(guanjianzi($_POST['content'])>0||$_POST['content']=="")
{
echo 'chat({"ok":"1"})';
exit();	
}
?>
<?php
$name=$_POST['username'];
if($name!=""){
$messages_buffer_file = 'messages.json';
$messages_buffer_size = 30;
    $buffer = fopen($messages_buffer_file, 'r+b');
    flock($buffer, LOCK_EX);
    $buffer_data = stream_get_contents($buffer);
    $messages = $buffer_data ? json_decode($buffer_data, true) : array();
    $next_id = (count($messages) > 0) ? $messages[count($messages) - 1]['id'] + 1 : 0;
    $messages[] = array('id' => $next_id, 'tx' => substr($name, -2), 'time' => time(), 'name' => $name, 'content' => $_POST['content']);
    if (count($messages) > $messages_buffer_size)
        $messages = array_slice($messages, count($messages) - $messages_buffer_size);
    ftruncate($buffer, 0);
    rewind($buffer);
    fwrite($buffer, json_encode($messages));
    flock($buffer, LOCK_UN);
    fclose($buffer);
    echo'ok';	
    exit();	
}else{
echo 'chat({"ok":"0"})';	
}
?>