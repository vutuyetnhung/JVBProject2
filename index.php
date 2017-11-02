<?php
	define('BASE_PATH',$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]);
	echo BASE_PATH;
	echo "<br>";
	$status = array('xóa','hoạt động','không hoạt động');
	echo $status[1];
	include("import.php");
	showMessage();
	//var_dump($status);
?>