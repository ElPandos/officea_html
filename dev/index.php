<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Login Page</title>
		<link rel="stylesheet" type="text/css" href="mystyle.css">
	</head>
	
	<body>
		<div class="login">
			<table>
				<form name="form1" method="post" action="checklogin.php">
					<tr>
						<td width="78"><strong>Login </strong></td>
					</tr>	
					<tr>
						<td width="78">Username</td>
						<td width="6">:</td>
						<td width="auto"><input name="username" type="text" id="username"></td>
					</tr>	
					<tr>
						<td width="78">Password</td>
						<td width="6">:</td>
						<td width="auto"><input name="password" type="password" id="password"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td><input type="submit" name="Submit" value="Login"></td>
					</tr>
				</form>
			</table>
		</div>
	</body>
</html>

