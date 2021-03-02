<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<a href="read.php">Back</a>
<h3>Edit Form</h3>
<?php
	session_start();
	include 'conn.php';
	$id = $_GET['id'];
	$data = "SELECT * FROM tb_laundry WHERE id='$id'";
	$res = mysqli_query($conn, $data);
	if (!$res) {
	die("Query Error :".mysqli_errno($conn)."-".mysqli_error($conn));
	}
	while ($row = mysqli_fetch_array($res)) { ?>
<form method="POST" action="update_proc.php">
	<section class="lay_up form-group">
		<input type="hidden" name="id" placeholder="ID Otomatis Terisi" readonly="" value="<?php echo $row['id']; ?>" class="form-control"><br>
		<input type="number" name="no" required="" placeholder="Masukkan No..." value="<?php echo $row['no']; ?>" class="form-control"><br>
		<input type="text" name="sp" required="" placeholder="Masukkan S.P..." value="<?php echo $row['sp']; ?>" class="form-control"><br>
		<input type="number" name="colli" required="" placeholder="Masukkan Colli..." value="<?php echo $row['colli']; ?>" class="form-control"><br>
		<input type="number" name="berat" required="" placeholder="Masukkan Berat..." value="<?php echo $row['berat']; ?>" class="form-control"><br>
		<input type="text" name="franco" required="" placeholder="Masukkan Franco..." value="<?php echo $row['franco']; ?>" class="form-control"><br>
		<input type="number" name="confrankert" required="" placeholder="Masukkan Confrankert..." value="<?php echo $row['confrankert']; ?>" class="form-control"><br>
		<input type="text" name="penerima" required="" placeholder="Masukkan Penerima..." value="<?php echo $row['penerima']; ?>" class="form-control"><br>
		<input type="text" name="keterangan" required="" placeholder="Masukkan Keterangan..." value="<?php echo $row['keterangan']; ?>" class="form-control"><br>
		<input type="submit" value="Update" class="btn btn-primary">
	</section>
</form>
<?php
}
?>
</body>
</html>