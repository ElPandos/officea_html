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
		
		<td>
			<div class="selection">
				Movies
				<form method="post" action="submit.php">
					<input list="Movie" name="Movie">
						<datalist id="Movie">
							<?php GenerateOptions(GetFiles(Files::Torrent_klar)); ?>
							<?php GenerateOptions(GetFiles(Files::D_filmer)); ?>
							<?php GenerateOptions(GetFiles(Files::F_filmer)); ?>
						</datalist>

					<input name="Submit" type="submit" value="Load">
				</form
			</div>
		</td>

		<td>
			<div class="selection">
				Series
				<form method="post" action="submit.php">
					<input list="Serie" name="Serie">
						<datalist id="Serie">
							<?php GenerateOptions(GetFiles(Files::F_serier)); ?>
						</datalist>
						
					<input name="Submit" type="submit" value="Load">
				</form>
			</div>
		</td>

		<td>
			<div class="selection">
				Porn
				<form method="post" action="submit.php">
					<input list="Porn" name="Porn">
						<datalist id="Porn">
							<option value="Internet Explorer">
							<option value="Firefox">
							<option value="Chrome">
							<option value="Opera">
							<option value="Safari">
						</datalist>
						
					<input type="submit" name="Submit" value="Load">
				</form>
			</div>
		</td>
		
	</tr>
</table>