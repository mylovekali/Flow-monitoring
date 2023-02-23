<?php

//AWD流量监控，包括POST/file记录。      --Karsa

$logfilename = "robots.txt";

$post = '';
$file = '';
if($_POST) $post = "POST:".json_encode($_POST);
if($_FILES) $file = "FILE:".json_encode($_FILES);
//$url = $_SERVER['
//$filename = $_SERVER['SCRIPT_FILENAME']

$ip = $_SERVER['REMOTE_ADDR'];
$query = $_SERVER['REQUEST_URI'];

if($post){ $method = "POST";}
else{$method = "GET";}

$logtime = date('m/d H:i:s', time());

// $log = $logtime." ".$method." ".$ip." " POST:".$post." FILE:".file."\n"
$log = "$logtime $method $ip $query $post $file\n";

$prev_log = file_get_contents($logfilename);
$log = $prev_log.$log;

file_put_contents($logfilename, $log);
//需要有写权限的文件，最好是不要容易被发现的地方。

?>