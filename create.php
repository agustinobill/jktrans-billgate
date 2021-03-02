<?php
session_start();
include 'conn.php';

$no = $_POST['no'];
$sp = $_POST['sp'];
$colli = $_POST['colli'];
$berat = $_POST['berat'];
$franco = $_POST['franco'];
$confrankert = $_POST['confrankert'];
$penerima = $_POST['penerima'];
$keterangan = $_POST['keterangan'];

$data = "INSERT INTO tb_laundry (no,sp,colli,berat,franco,confrankert,penerima,keterangan) VALUES ('$no','$sp','$colli','$berat','$franco','$confrankert','$penerima','$keterangan')";
$res = mysqli_query($conn, $data);

if ($res) {
	header('location:read.php?msg=input');
}
?>