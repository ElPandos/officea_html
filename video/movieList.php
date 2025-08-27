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