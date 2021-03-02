<?php
session_start();
include 'conn.php';

$id = $_GET['id'];

$data = "DELETE FROM tb_laundry WHERE id='$id'";
$res = mysqli_query($conn, $data);

if ($res) {
	header('location:read.php?msg=delete');
}
?>