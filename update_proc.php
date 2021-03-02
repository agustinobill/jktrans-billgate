<?php
session_start();
include 'conn.php';

$id = $_POST['id'];
$no = $_POST['no'];
$sp = $_POST['sp'];
$colli = $_POST['colli'];
$berat = $_POST['berat'];
$franco = $_POST['franco'];
$confrankert = $_POST['confrankert'];
$penerima = $_POST['penerima'];
$keterangan = $_POST['keterangan'];

$data = "UPDATE tb_laundry SET no='$no', sp='$sp', colli='$colli', berat='$berat', franco='$franco', confrankert='$confrankert', penerima='$penerima', keterangan='$keterangan' WHERE id='$id'";
$res = mysqli_query($conn, $data);

if ($res) {
	header('location:read.php?msg=update');
}
?>