<?php 
	include_once 'functions.php';
	CheckLogin();
 ?>

<table class="header">
	<tr>
		<td>
			<div class="selection">
				About
			</div>
		</td>
		<td>
			<div class="selection">
				Site
			</div>
		</td>
		<td>
			<div class="selection">
				<a href="logout.php"> Logout ( <?php echo GetUserName(); ?> ) </a>
			</div>
		</td>
	</tr>
	
</table>
