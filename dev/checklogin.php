<?php
	session_start();
	ob_start();

	$host = "localhost"; // Host name 
	$dbusername = ""; // Mysql username 
	$dbpassword = ""; // Mysql password 
	$db_name = "test"; // Database name 
	$tbl_name = "members"; // Table name 

	// Connect to server and select databse.
	mysql_connect("$host", "$dbusername", "$dbpassword")or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");

	// Define $username and $password 
	$username = $_POST['username']; 
	$password = $_POST['password']; 

	// To protect MySQL injection (more detail about MySQL injection)
	$myusername = stripslashes($username);
	$mypassword = stripslashes($password);
	$myusername = mysql_real_escape_string($username);
	$mypassword = mysql_real_escape_string($password);
	$sql = "SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
	$result = mysql_query($sql);

	// Mysql_num_row is counting table row
	$count = mysql_num_rows($result);

	// If result matched $username and $password, table row must be 1 row
	if($count==1)
	{
		// Register $username, $password and redirect to file "login_success.php"
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;

		
		header("location:login_success.php");
	}
	else 
		include 'login_fail.php';

	ob_end_flush();
?>
