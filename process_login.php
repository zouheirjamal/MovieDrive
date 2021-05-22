<?php
include('config.php');
session_start();
$email = $_POST["Email"];
$pass = $_POST["Password"];
$qry=mysqli_query($con,"select * from client where email='$email' and password='$pass'");
if(mysqli_num_rows($qry)){
	$usr=mysqli_fetch_array($qry);
	$_SESSION['user']=$usr['user_id'];
	header('location:index.php');
}	
	else{
		$_SESSION['error']="Login Failed!";
		header("location:login.php");
	}
	
?>