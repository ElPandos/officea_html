<?php	
	include 'Functions/Database/Config.php';
	
	// Connect to server
	mysql_connect("$host", "$db_username", "$db_password")or die("Cannot connect to server... : " . mysql_error());
	
	// Select database
	mysql_select_db("$db_name")or die("Cannot select database... : " . mysql_error());

?>