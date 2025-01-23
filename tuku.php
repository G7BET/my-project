<?php
$qs = $_GET['qs'];
$name = $_GET['name'];
$lx = $_GET['lx'];
$tw = $_GET['tw'];
if($lx=="1"){$go=base64_decode('aHR0cHM6Ly9saGNiei5oYm8wMi5jb20v');}elseif($lx=="2"){$go=base64_decode('aHR0cHM6Ly9saGNiejEuaGJvMDIuY29tLw==');}
header('Content-Type:image/png');
$url = $go."?q=".$qs."&t=".$name."&m=".$tw;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
//sprintf("%03d",$qs);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,0);
curl_setopt($ch,CURLOPT_TIMEOUT,0);
curl_setopt($ch,CURLOPT_NOBODY, false);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch,CURLOPT_SSL_VERIFYHOST, false);
$str=curl_exec($ch);
curl_close($ch);
?> 