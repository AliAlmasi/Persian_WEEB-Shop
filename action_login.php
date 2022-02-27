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
		<div id="mainlog2">
			<div id="actionform">
				<?php

					if(isset($_POST['username']) && !empty($_POST['username']) &&
					isset($_POST['password']) && !empty($_POST['password'])){
						$username = $_POST['username'];
						$password = $_POST['password'];}
					else
						exit("Please fill out the form!");

					$con = mysqli_connect("localhost","root","","shop_db");

					if(mysqli_connect_errno())
						exit("!ERROR ON DATABASE! : ". mysqli_connect_error());

					$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
					$result = mysqli_query($con, $query);

					$row = mysqli_fetch_array($result);

					if($row)
						echo("User "."<span style='color:LightGreen;'>".
						$row['username']."</span>. ".
						"has successfuly logged in"."</br></br>"."Welcome Back!");
					else
						echo("<span style='color=red;'>!ERROR WHILE LOGING IN!</span></br>&nbsp;</br>Maybe wrong password?");
				?>
			</div>
        </div>

		<?php
			include ("include/footer.php");
		 ?>
	</body>
</html>
