<?php
session_start();

$title = $_POST["title"];
$text = $_POST["post"];

$oldposts = simplexml_load_file('posts.xml');
$post = $oldposts->addChild('post');
$post->addChild('title', $title);
$imgtype = array("gif", "jpeg", "jpg", "png");
if($_FILES['upload']['name']){
	if($_FILES['upload']['size'] < (1000000)) {
		$fileName = strtolower($_FILES['upload']['name']);
		move_uploaded_file($_FILES['upload']['tmp_name'], 'images/posts/'.$fileName);
		$image = $fileName;
		$post->addChild('image', $image);
	} else {
		$_SESSION['inputerror'] = 'File is too large';
		header("location:post.php");
		exit();
	}
}
$post->addChild('text', $text);
$oldposts->asXML('posts.xml');

header("location:index.php");
exit();
?>