<?php 
	$MovieObj = FindTitleYear($_SESSION['FileName']);	
	$Details = ImdbMovieInfo($MovieObj->Title, $MovieObj->Year, $MovieObj->Type);
	
	echo '<br>';
	echo ' <b>DEBUG INFO: </b><br><br>';
	
	print_r($MovieObj); echo '<br>';
	
	if ($Details != "No info..." && $Details->Response == 'True')
	{   
		echo "IMDB-ID : ".$Details->imdbID.'<br>';
		echo "Title : ".$Details->Title.'<br>';
		echo "Type : ".$Details->Type.'<br>';
		echo "Year : ".$Details->Year.'<br>';
		echo "Rated : ".$Details->Rated.'<br>';
		echo "Poster Image Path: ".$Details->Poster.'<br>';
		echo "<img src=\"$Details->Poster\"><br>";
		echo "Released Date: ".$Details->Released.'<br>';
		echo "Runtime : ".$Details->Runtime.'<br>';
		echo "Genre : ".$Details->Genre.'<br>';
		echo "Director : ".$Details->Director.'<br>';
		echo "Writer : ".$Details->Writer.'<br>';
		echo "Actors : ".$Details->Actors.'<br>';
		echo "Plot : ".$Details->Plot.'<br>';
		echo "Language : ".$Details->Language.'<br>';
		echo "Country : ".$Details->Country.'<br>';
		echo "Awards : ".$Details->Awards.'<br>';
		echo "Metascore : ".$Details->Metascore.'<br>';
		echo "IMDB Rating : ".$Details->imdbRating.'<br>';
		echo "IMDB Votes : ".$Details->imdbVotes.'<br>';
	}
	else 
	{
		echo "Movie information not available. Please confirm title!";
	}
?>