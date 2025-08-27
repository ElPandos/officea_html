<?php 
	session_start();
	include 'functions.php';
	
	CheckLogin();
?>
	
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Video Page</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	
</head>

<html>
	<body>
	
		<div class="header">
			<?php include 'header.php'; ?>
		</div>
		<br>
		
		<div class="main">
			<table class="main">
				<tr>
					<td class="main">
						<div class="play">
							<?php include 'play.php'; ?>
						</div>
					</td>
					
					<td class="main">
						<div class="imdb">
							<?php include 'imdb.php'; ?>
						</div>
					</td>
					
					<td class="main">
						<div class="picture">
							<img src="<?php echo $_SESSION['MoviePoster'] ?>" alt="No Image!" width="auto" height="auto">
						</div>
					</td>
				</tr>
			</table>
		</div>
		
		<br>	
		<div class="footer">
			<?php include 'footer.php'; ?>
		</div>
		
		<?php include 'debug.php'; ?>
		
	</body>
</html>
