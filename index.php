<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>HomePage - Persian_WEEB</title>
		<link rel="stylesheet" href="style\master.css" type="text/css">
		<link rel="icon" type="image/x-icon" href="images/favicon.ico">
	</head>
	<body>

		<?php
			include("include/header1.php");
		 ?>

		<div class="main">
			<div class="side">
				<div class="sidempty"> <!-- for gradient-->
					&nbsp;
				</div>
				<div class="sidtitle">
					Categories
				</div>
				<div class="sidempty2">
					&nbsp;
				</div>
				<a href="bracelets.php"><div class="sideoptions">
					Bracelets
				</div></a>
				<a href="hoodies.php"><div class="sideoptions">
					Hoodies
				</div></a>
				<a href="necklaces.php"><div class="sideoptions">
					Necklaces
				</div></a>
				<a href="stationaries.php"><div class="sideoptions">
					Stationaries
				</div></a>
				<a href="bundles.php"><div class="sideoptions">
					Bundles
				</div></a>
				<a href="shirts.php"><div class="sideoptions">
					T-shirts
				</div></a>
			</div>
			<div class="frame">
			  <div class="frameheader">Most Liked Items</div>
				<div class="holder">
					<div class="mostliked">
						<img src="images/data/9.jpg" width="300" height="300" alt="Minimal Blue Hoodie"/><br>
						<b>Minimal Blue Hoodie</b>
						<p>$ 39.09</p>
					</div>
					<div class="mostliked">
						<img src="images/data/12.png" width="300" height="300" alt="Waifu Hoodie"/><br>
						<b>Waifu Hoodie</b>
						<p>$ 189.09</p>
					</div>
				</div>
		  </div>
		</div>

		<?php
			include ("include/footer.php");
		 ?>
	</body>
</html>
