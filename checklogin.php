<?php
session_start();

$host="us-cdbr-azure-west-c.cloudapp.net";
$username="b5be18c715aa24";
$password="404a1982";
$db_name="rhysnewellmusic";
$link=mysqli_connect("$host", "$username", "$password", "$db_name")or die("cannot connect"); 

$username=$_POST['username']; 
$password=$_POST['password'];
$username=md5($username);
$password=md5($password);
$sql="SELECT * FROM reg WHERE username='$username' and password='$password'";
$result=mysqli_query($link, $sql);
$count=mysqli_num_rows($result);

if($count==1){
	$_SESSION["username"]=$username;
	header("location:post.php");
} else {
	$_SESSION['invalidlogin']=1;
	header("location:login.php");
}
?>