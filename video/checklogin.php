<?php
	session_start();
	ob_start();

	include 'Functions/Database/Connect.php';

	// Define $username and $password from user input
	$username = $_POST['username']; 
	$password = $_POST['password']; 

	// To protect MySQL injection (more detail about MySQL injection)
	$myusername = stripslashes($username);
	$mypassword = stripslashes($password);
	$myusername = mysql_real_escape_string($username);
	$mypassword = mysql_real_escape_string($password);
	$sql = "SELECT * FROM $tbl_members WHERE username='$username' and password='$password'";
	$result = mysql_query($sql);

	// Mysql_num_row is counting table row
	$count = mysql_num_rows($result);
	print_r($result);
	
	// If result matched $username and $password, table row must be 1 row
	if($count == 1)
	{
		// Register $username, $password and redirect to file "login_success.php"
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		
		// Select level
		$sql = "SELECT level FROM $tbl_members WHERE username='$username' and password='$password'";
		$result = mysql_query($sql);
		$values = mysql_fetch_array($result);
		$_SESSION['level'] = (int)$values[level];

		header("location:login_success.php");
	}
	else 
		include 'login_fail.php';

	ob_end_flush();
?>
