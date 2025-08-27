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