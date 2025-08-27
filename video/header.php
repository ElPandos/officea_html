<?php 
	include_once 'functions.php';
	CheckLogin();
 ?>

<table class="header">
	<tr>
		<td>
			<div class="title">
				<img src="<?php echo GetTitleImage(Sites::Video); ?>">
			</div>
		</td>
		
		<?php include 'toolbar.html' ?>;
			
		<?php include 'movieList.php'; ?>
		<?php include 'serieList.php'; ?>
		<?php
			if($_SESSION['level'] == 1)
				include 'pornList.php';
		?>
		
	</tr>
</table>