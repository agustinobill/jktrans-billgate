<!DOCTYPE html>
<html>
<head>
	<title>CRUD Bill</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
	if(isset($_GET['msg'])){
		$msg = $_GET['msg'];
	if($msg == "input"){
		echo "Data Berhasil di Input.";
	}else if($msg == "update"){
		echo "Data Berhasil di Update.";
	}else if($msg == "delete"){
		echo "Data Berhasil di Delete.";
	}
	}
?>
<h1 style="text-align: center;">JKTrans</h1>
<h3>Input Form</h3>
<div class="container">
<form method="POST" action="create.php">
	<section class="layout form-group">
		<input type="hidden" name="id" placeholder="ID Otomatis Terisi" readonly="" class="form-control">
		<label>No. : </label>
		<input type="number" name="no" required="" placeholder="Masukkan No..." class="form-control">
		<label>S.P. : </label>
		<input type="text" name="sp" required="" placeholder="Masukkan S.P..." class="form-control">
		<label>Colli : </label>
		<input type="number" name="colli" required="" placeholder="Masukkan Colli..." class="form-control">
		<label>Berat : </label>
		<input type="number" name="berat" required="" placeholder="Masukkan Berat..." class="form-control">
		<label>Franco : </label>
		<input type="text" name="franco" required="" placeholder="Masukkan Franco..." class="form-control">
		<label>Confrankert : </label>
		<input type="number" name="confrankert" required="" placeholder="Masukkan Confrankert..." class="form-control">
		<label>Penerima : </label>
		<input type="text" name="penerima" required="" placeholder="Masukkan Penerima..." class="form-control">
		<label>Keterangan : </label>
		<input type="text" name="keterangan" required="" placeholder="Masukkan Keterangan..." class="form-control">
		<input type="submit" value="Upload" class="btn btn-success">
	</section>
</form>	
</div>
<div class="container">
<table class="table table-hover">
	<?php 
	session_start();
	ini_set('display_errors', 'Off');
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}
	else{
		echo "Karyawan : " .$_SESSION['username']. "<br>";
	}
	?>
	<a href="logout.php">Logout</a>
	<thead>
		<tr>
			<th>ID</th>
			<th>No</th>
			<th>S.P.</th>
			<th>Colli</th>
			<th>Berat</th>
			<th>Franco</th>
			<th>Confrankert</th>
			<th>Penerima</th>
			<th>Keterangan</th>
			<th>Date</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
			include 'conn.php';
			$data = "SELECT * FROM tb_laundry";
			$res = mysqli_query($conn, $data);
			if (!$res) {
				die("Query Error :".mysqli_errno($conn)."-".mysqli_error($conn));
			}
			while ($row = mysqli_fetch_assoc($res)) { ?>
				<tr>
					<td><?php echo $row['id']?></td>
					<td><?php echo $row['no']?></td>
					<td><?php echo $row['sp']?></td>
					<td><?php echo $row['colli']?></td>
					<td><?php echo $row['berat']?></td>
					<td><?php echo $row['franco']?></td>
					<td><?php echo $row['confrankert']?></td>
					<td><?php echo $row['penerima']?></td>
					<td><?php echo $row['keterangan']?></td>
					<td><?php echo date('l, d-m-Y  h:i:s a'); ?></td>
					<td>
						<button class="btn btn-warning"><a href="update.php?id=<?php echo $row['id']; ?>" class="link">Edit</a></button> | 
						<button class="btn btn-danger"><a href="delete.php?id=<?php echo $row['id']; ?>" class="link">Hapus</a></button>
					</td>
				</tr>
			<?php
			}
			?>
	</tbody>
</table>
</div>
</body>
</html>