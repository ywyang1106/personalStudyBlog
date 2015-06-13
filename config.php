<?php
	header('Content-Type:text/html; charset=utf-8');

	define('DB_HOST', SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT);
	define('DB_USER', SAE_MYSQL_USER);
	define('DB_PWD', SAE_MYSQL_PASS);
	define('DB_NAME', SAE_MYSQL_DB);
	
	$conn = @mysql_connect(DB_HOST, DB_USER, DB_PWD) or die('数据库链接失败：'.mysql_error());
	
	@mysql_select_db(DB_NAME) or die('数据库错误：'.mysql_error());
	
	@mysql_query('SET NAMES UTF8') or die('字符集错误：'.mysql_error());
?>