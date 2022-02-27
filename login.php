<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login - Persian_WEEB</title>
		<link rel="stylesheet" href="style\mini.css" type="text/css">
		<link rel="icon" type="image/x-icon" href="images/favicon.ico">
	</head>
	<body>

		<?php
			include ("include/header2.php");
		 ?>

		<div id="mainlog">
			&nbsp;
			<table width="350" height="131" border="0.5" cellpadding="3" class="form">
				<form method="POST" action="action_login.php">
				  <tbody>
					<tr>
					  <td width="144"  height="50"><label for="username" class="labels">Username:</label></td>
					  <td width="144"  height="50"><input type="text" id="username" name="username" ></td>
					</tr>
					<tr>
					  <td width="144"  height="50"><label for="password" class="labels">Password:</label></td>
					  <td width="144"  height="50"><input type="password" id="password" name="password" ></td>
					</tr>
					<tr>
					  <td width="144" colspan="2"><input type="submit" value="Log In">
						  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Clear"></td>
					</tr>
				  </tbody>
				</form>
			</table>
        </div>

		<?php
			include ("include/footer.php");
		 ?>
	</body>
</html>
