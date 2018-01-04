<?php
session_start();
if(!isset($_SESSION["username"])){
header("location:login.php");
exit();
}
if(isset($_SESSION['timeout']) && ((time() - $_SESSION['timeout']) > 30*60)){
	session_unset();
	session_destroy();
	header("location:login.php");
}
$_SESSION['timeout'] = time();
?>

<html>
	<head>
		<title>Rhys Newell Music | Post</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	</head>
	<body>
		</div>
		<div id="nav">
			<a href="index.php"><div>home</div></a>
			<a href="bio.html"><div>bio</div></a>
			<a href="music.html"><div>music</div></a>
			<a href="gallery.html"><div>gallery</div></a>
			<a href="contact.html"><div>contact</div></a>
		</div>
		<div id="title">Post</div>
		<div id="contentpost">
			<form action="upload.php" method="post" enctype="multipart/form-data">
				<h1>Title</h1>
				<input id="heading" type="text" name="title" required>
				<h1>Images</h1>
				<p>Upload a photo from your computer</p><input type="file" name="upload">
				<h1>Post</h1>
				<textarea id="text" name="post" rows="15" cols="60" required></textarea><br><br>
				<input type="submit" name="Post">
			</form>
		</div>
	</body>
<html>
