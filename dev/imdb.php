<?php 
	include_once 'functions.php';
	CheckLogin();
	
	$MovieObj = FindTitleYear($_SESSION['FileName']);	
	$Details = ImdbMovieInfo($MovieObj->Title, $MovieObj->Year, $MovieObj->Type);
	
	//print_r($MovieObj);
	
	if ($Details != "No info..." && $Details->Poster != 'N/A')
	{
		$PosterImg = 'images/' . $Details->Title . '.jpg';
		copy($Details->Poster, $PosterImg);
		$_SESSION['MoviePoster'] = $PosterImg;
	}
	else
		$_SESSION['MoviePoster'] = "";
?>

<table>

	<tr>
		<td>
			<div class="text">
				<b>Title:</b>
			</div>
		</td>
		<td>
			<div class="text">
				<?php 
				if ($Details != "No info...")
					echo $Details->Title;
				else
					echo $Details;
				?>
			</div>
		</td>
	</tr>
	
	<tr>
		<td>
			<div class="text">
				<b>Year:</b>
			</div>
		</td>
		<td>
			<div class="text">
				<?php 
				if ($Details != "No info...")
					echo $Details->Year;
				else
					echo $Details;
				?>
			</div>
		</td>
	</tr>
	
	<tr>
		<td>
			<div class="text">
				<b>Genre:</b>
			</div>
		</td>
		<td>
			<div class="text">
				<?php 
				if ($Details != "No info...")
					echo $Details->Genre;
				else
					echo $Details;
				?>
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="text">
				<b>Rating:</b>
			</div>
		</td>
		<td>
			<div class="text">
				<?php 
				if ($Details != "No info...")
					echo $Details->imdbRating . "  ( " . $Details->imdbVotes . " votes )";
				else
					echo $Details;
				?>
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="text">
				<b>Plot:</b>
			</div>
		</td>
		<td>
			<div class="text">
				<?php 
				if ($Details != "No info...")
					echo $Details->Plot;
				else
					echo $Details;
				?>
			</div>
		</td>
	</tr>
	
</table>