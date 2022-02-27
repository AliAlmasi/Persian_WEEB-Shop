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
		<div id="mainlog2">
			<div id="actionform">
				<?php
					if (isset($_POST['name']) && !empty($_POST['name']) &&
						isset($_POST['username']) && !empty($_POST['username']) &&
						isset($_POST['email']) && !empty($_POST['email']) &&
						isset($_POST['password']) && !empty($_POST['password']) &&
						isset($_POST['repassword']) && !empty($_POST['repassword']))
					{
						$name = $_POST['name'];
						$username = $_POST['username'];
						$email = $_POST['email'];
						$password = $_POST['password'];
						$repassword = $_POST['repassword'];
					}
					else
						{exit("Please fill out the form!");}

					if ($password != $repassword){exit("Double-check your Password.");}

					if (filter_var($email, FILTER_VALIDATE_EMAIL) === false){exit("Double-check your E-mail.");}

					$con = mysqli_connect("localhost","root","","shop_db");

					if(mysqli_connect_errno())
						exit("!ERROR ON DATABASE! : ". mysqli_connect_error());

					$query = "INSERT INTO users (name,username,email,password,type) VALUES ('$name','$username', '$email', '$password', '1')";

					if (mysqli_query($con, $query) === true)
						echo("Dear "."<span style='color:LightGreen;'>".
						$name."</span>. ".
						"You have successfuly registered. </br>&nbsp;</br>Your Username is: ".
						"<span style='color:LightGreen';>".$username."</span>");
					else
						echo("<span style='color=red;'>!ERROR WHILE SIGNING UP USER!</span></br>&nbsp;</br>You are using a used Username, probably.");
				?>
			</div>
        </div>

		<?php
			include ("include/footer.php");
		 ?>
	</body>
</html>
