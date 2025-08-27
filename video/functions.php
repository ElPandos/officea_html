<?php	
	class SelectedFile
	{
		public $FullPath = "1";
		public $FileName = "2";
		public $AliasName = "3";
		
		function SetFullPath($Path) { $this->FullPath = $Path; }	
		function GetDirectory()
		{
			$Splited = Explode('\\', $this->FullPath);
			
			$path = "/";
			$count = count($Splited);
			for ($i = 2; $i <$count-1; $i++)
				$path .= $Splited[$i] . '/';
				
			return $path;	
		}
		
		function SetFileName($Name) { $this->FileName = $Name; }
		function GetFileName() { return $this->FileName; }
		
		function SetAlias($Alias) { $this->AliasName = $Alias; }
		function GetAlias() { return $this->AliasName; }
	}
	
	abstract class Sites
	{
		const Video = 0;
		const Serie = 1;
		const Porn  = 2;
	}
	
	abstract class Files
	{
		const Torrent_klar = 0;
		const D_filmer = 1;
		const Porn  = 2;
		const F_filmer = 3;
		const F_serier = 4;
	}
	
	function GetLoadPath()
	{
		if (isset($_SESSION['FileName']) && isset($_SESSION['Alias']) && isset($_SESSION['Directory']))
		return GetAliasPath($_SESSION['Alias']) . $_SESSION['Directory'] . $_SESSION['FileName'];
	}
		
	function IsVideo($Filename)
	{
		$avi = '.avi';
		$mkv = '.mkv';
		$mp4 = '.mp4';
		$mpeg = '.mpeg';
		
		$MovieFormats = array($avi, $mkv, $mp4, $mpeg);
		
		foreach ($MovieFormats as &$FileType)
		{
			$pos = strpos($Filename, $FileType);
			if ($pos !== false)
				if (strlen($Filename)-$pos == strlen($FileType))
					if (strpos($Filename, 'sample') === false)
						return true;
		}
		
		return false;
	}
	
	function GetFile($Source)
	{
		$Splited = Explode('\\', $Source);

		return end($Splited);	
	}
	
	function GetFileFormat($Source)
	{
		$Splited = Explode('.', $Source);

		return end($Splited);	
	}
	
	function GetAliasPath($AliasName)
	{
		return "http://video.keva.se" . $AliasName;
	}
	
	function GetFiles($Source)
	{		
		switch ($Source)
		{
			case Files::Torrent_klar:
				$Dir = "D:\_Torrent_KLAR";
				$Alias = "/Torrent_KLAR";
				break;
			case Files::D_filmer : 
				$Dir = "D:\Filmer";
				$Alias = "/D_Filmer_KLAR";
				break;
			case Files::F_filmer:
				$Dir = "F:\FILMER";
				$Alias = "/F_Filmer_KLAR";
				break;
			case Files::F_serier:
				$Dir = "F:\SERIER";
				$Alias = "/F_Serier_KLAR";
				break;
		}
		
		$AllVideoFiles = array();
		foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($Dir)) as $Type)
		{
			if (!is_dir($Type))
				if (IsVideo($Type))
				{
					$FileObj = new SelectedFile;
					$FileObj->SetFullPath($Type);
					$FileObj->SetFileName(GetFile($Type));
					$FileObj->SetAlias($Alias);
		
					array_push($AllVideoFiles, $FileObj);
				}
		}
		
		return $AllVideoFiles;
	}
	
	function GenerateOptions($AllVideoFiles)
	{
		foreach ($AllVideoFiles as &$FileInfo)
			echo '<option value="' . $FileInfo->GetFileName() . '">';
	}
	
	function GetAllMovieFiles()
	{
		$Torrent_klar = array();
		$Torrent_klar = GetFiles(Files::Torrent_klar);
		$D_filmer = GetFiles(Files::D_filmer);
		$F_filmer = GetFiles(Files::F_filmer);
		
		$temp1 = array_merge($D_filmer, $Torrent_klar);
		$temp2 = array_merge($temp1, $F_filmer);
		
		return $temp2;
	}
	
	function GetAllSerieFiles()
	{
		$F_serier = GetFiles(Files::F_serier);
		
		return $F_serier;
	}
	
	function GetAllPornFiles()
	{
		$Torrent_klar = array();
		$Torrent_klar = GetFiles(Files::Torrent_klar);
		$D_filmer = GetFiles(Files::D_filmer);
		$F_filmer = GetFiles(Files::F_filmer);
		
		$temp1 = array_merge($D_filmer, $Torrent_klar);
		$temp2 = array_merge($temp1, $F_filmer);
		
		return $temp2;
	}
	
	function GetUserName()
	{
		$id_name = 'NO_NAME';
		if(isset($_SESSION['username'])){
			$id_name = $_SESSION['username'];
		}
		
		return $id_name;
	}
	
	function CheckLogin()
	{
		if(GetUserName() == 'NO_NAME')
			header("location:logout.php");
	}
	
	function GetTitleImage($Site)
	{
		switch ($Site)
		{
			case Sites::Video:
				$File = "/images/video.jpg";
				break;
			case Sites::Serie:
				$File = "/images/serie.jpg";
				break;
			case Sites::Porn:
				$File = "/images/porn.jpg";
				break;
		}
		
		return $File;
	}
	
	function ImdbMovieInfo($Title, $Year, $Type)
	{
		//Replace spaces and apostrophe mark in the title with html entities
		//This will make title from 'Mr. Bean's Holiday' to 'Mr.%20Bean%27s%20Holiday'
		$Title = urlencode($Title);
		
		//print_r($Title); echo '<br>';
		//print_r($Year); echo '<br>';
		//print_r($Type); echo '<br>';
		
		if ($Type == "movie" && $Year != "")
		{
			$json = file_get_contents("http://www.omdbapi.com/?t=$Title&y=$Year");
			$Details = json_decode($json);
			
			//print_r($Details);
			
			return $Details;
		}
		else
		{
			$json = file_get_contents("http://www.omdbapi.com/?s=$Title");
			$Details = json_decode($json);
			
			//print_r($Details);
			
			foreach ($Details->Search as &$obj)
			{
				if ($obj->Type == $Type)
				{
					$json = file_get_contents("http://www.omdbapi.com/?i=$obj->imdbID");
					$Details = json_decode($json);
					
					if ($Details->Response == 'True')
						return $Details;
					else
						return "No info...";
				}
			}
		}
		
		/*
		$Details = json_decode($json);
	
		if ($Details->Response == 'True')
			return $Details;
		else
			 return "No info...";
			 
		print_r($Details);
		
		//if ($Details->Response == 'True')
			//return $Details;
			
		print_r($Title);
		print_r($Year);
		print_r($Type);
		
		if ($Type == "series")
		{
			foreach ($Details->Search as &$obj)
			{
				if ($obj->Type == $Type)
				{
					$json = file_get_contents("http://www.omdbapi.com/?i=$obj->imdbID");
					$Details = json_decode($json);
				}
			}
		}
		
		//Check if respose contains the movie information
		if ($Details->Response == 'True')
			return $Details;
		else
			 return "No info...";
			 */
	}
	
	class MovieInfo
	{
		public $Title = "";
		public $Year = "";
		public $Type = "";
	}
	
	function FindTitleYear($String)
	{
		$MovieInfoObj = new MovieInfo;
		
		$SplitedDot = Explode('.', $String);
		$SplitedSpace = Explode(' ', $String);
		
		if (count($SplitedDot) > count($SplitedSpace))
			$Splited = $SplitedDot;
		else
			$Splited = $SplitedSpace;
		
		//print_r($Splited);
		
		$Count = count($Splited);
		for ($i=0; $i<$Count; $i++)
		{
			//print_r($MovieInfoObj->Title);
		
			if (fnmatch("2???", $Splited[$i]) || fnmatch("1???", $Splited[$i]))
			{
				//print_r($Splited[$i]);
			
				$MovieInfoObj->Year = $Splited[$i];
				$MovieInfoObj->Type = 'movie';
							
				break;
			}
			
			if (fnmatch("[sS][0-9][0-9][eE][0-9][0-9]", $Splited[$i]) || fnmatch("?[0-9]?", $Splited[$i]))
			{
				$MovieInfoObj->Type = 'series';
				
				$_SESSION['debug'] = $Splited[$i];
				
				$MovieInfoObj->Season = substr($Splited[$i],1,2);
				$MovieInfoObj->Episode = substr($Splited[$i],4,6);
				break;
			}
			
			$MovieInfoObj->Title .= $Splited[$i] . ' ';
		}
		
		return $MovieInfoObj;	
	}	
	
?>