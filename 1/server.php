<?php
namespace think;
define('APP_PATH', _DIR_.'/application/');

//加载基础文件
require_DIR_.'/thinkphp/base.php';

//执行应用并响应
Container::get('app',[
	APP_PATH
])->bind('push/Worker')
	->run()
	->send();
?>