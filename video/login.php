<?php 
	session_start();
	include 'functions.php';
	
	CheckLogin();
?>
	
<!DOCTYPE html>
<head>

	<meta charset="UTF-8">
	<title>Video Page</title>

    <link rel="stylesheet" type="text/css" href="./css/My/mystyle.css">

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>

<html>
	<body>

        <div class="footer">
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
