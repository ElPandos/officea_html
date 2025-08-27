<?php
	session_start();

	if(isset($_SESSION["username"]))
		echo $_SESSION['username'];
		
	if(!$_SESSION['username'] == $username)
	{
		header("location:login.php");
	}
?>