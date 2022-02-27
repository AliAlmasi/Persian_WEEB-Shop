<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sign Up - Persian_WEEB</title>
		<link rel="stylesheet" href="style\mini.css" type="text/css">
		<link rel="icon" type="image/x-icon" href="images/favicon.ico">
	</head>
	<body>

		<?php
			include ("include/header2.php");
		?>

		<script type="text/javascript">
		<!--
		function check_empty()
		{
			var username='';
			username = document.getElementById("username").value;
			if (username == ''){
				alert("Username is required.");
			}
			else{
				var r = confirm("Are you sure?");
				if (r == true){
					signup.submit()
				}
			}
		}
		-->
		</script>

		<div id="mainlog">
			&nbsp;
			<form name="signup" action="action_signup.php" method="POST">
				<table width="350" height="131" border="0.5" cellpadding="3" class="form">
				  <tbody>
					<tr>
					  <td width="144" height="50"><label for="name" class="labels">Your Name:</label></td>
					  <td width="144"  height="50"><input type="text" id="name" name="name"></td>
					</tr>
					<tr>
					  <td width="144"  height="50"><label for="username" class="labels">Username:</label></td>
					  <td width="144"  height="50"><input type="text" id="username" name="username"></td>
					</tr>
					<tr>
					  <td width="144"  height="50"><label for="email" class="labels">E-mail:</label></td>
					  <td width="144"  height="50"><input type="text" id="email" name="email" ></td>
					</tr>
					<tr>
					  <td width="144"  height="50"><label for="password" class="labels">Password:</label></td>
					  <td width="144"  height="50"><input type="password" id="password" name="password" ></td>
					</tr>
					<tr>
					  <td width="144"  height="50"><label for="repassword" class="labels">Password Confirm:</label></td>
					  <td width="144"  height="50"><input type="password" id="repassword" name="repassword" ></td>
					</tr>
					<tr>
					  <td width="144" colspan="2">&nbsp;&nbsp;<input type="button" value="Submit" onclick="check_empty();">
						  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Clear"></td>
					</tr>
				  </tbody>
				</table>
			</form>
        </div>

		<?php
			include ("include/footer.php");
		 ?>
	</body>
</html>
