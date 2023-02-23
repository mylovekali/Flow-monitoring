<?php
$boby = file_get_contents("php://input");
$cmd = $_SERVER;
$text = json_encode($cmd).$boby."\n--------------------\n\n";
$file = fopen("/var/www/html/log.txt", "a+");
fwrite($file, $text);
fclose($file);
?>