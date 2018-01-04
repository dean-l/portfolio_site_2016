<html>
	<head>
		<title>Rhys Newell Music | Login</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	</head>
	<body>
		<div id="nav">
			<a href="index.php"><div>home</div></a>
			<a href="bio.html"><div>bio</div></a>
			<a href="music.html"><div>music</div></a>
			<a href="gallery.html"><div>gallery</div></a>
			<a href="contact.html"><div>contact</div></a>
		</div>
		<div id="title">Login</div>
		<div id="contentpost">
			<form name="loginform" method="post" action="checklogin.php">
				<h1>Username</h1>
				<input id="username" type="text" name="username">
				<h1>Password</h1>
				<input id="password" type="password" name="password"><br><br>
				<?php
				session_start();
				if($_SESSION['invalidlogin'] == 1){
					echo '<h2 style="color:red;"> Username or Password is incorrect</h2><br>';
					unset($_SESSION['invalidlogin']);
				}
				?>
				<input type="submit" value="Login" name="submit">
			</form>
		</div>
	</body>
<html>
