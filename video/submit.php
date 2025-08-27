<?php
	session_start();
	include_once 'functions.php';
		
	if (isset($_POST['Movie']))
	{
		$_SESSION['FileName'] = $_POST['Movie'];
		$AllFiles = GetAllMovieFiles();
	}
	
	if (isset($_POST['Serie']))
	{
		$_SESSION['FileName'] = $_POST['Serie'];
		$AllFiles = GetAllSerieFiles();
	}
	
	if (isset($_POST['Porn']))
	{
		$_SESSION['FileName'] = $_POST['Porn'];
		$AllFiles = GetAllPornFiles();
	}
	
	foreach ($AllFiles as $Obj)
	{
		if (strcmp ($_SESSION['FileName'] , $Obj->GetFileName()) == 0)
		{
			$_SESSION['Alias'] = $Obj->GetAlias();
			$_SESSION['Directory'] = $Obj->GetDirectory();
		}
	}
	
	header("location:login.php");
?>