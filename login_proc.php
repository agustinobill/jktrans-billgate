<?php
session_start();
include 'conn.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($conn,"SELECT * FROM tb_user WHERE username='$username' AND password='$password'");

$check = mysqli_num_rows($data);

if($check > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:read.php");
}else{
	header("location:login.php?message=failed");
}
?>