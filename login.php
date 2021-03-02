<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	if(isset($_GET['message'])){
		if($_GET['message'] == "failed"){
			echo "Login Gagal! Username dan Password Salah!";
		}elseif ($_GET['message'] == "belum_login") {
			echo "Harap Login terlebih dahulu";
		}
	}
	?>
<h3>Login Page</h3>
<form method="POST" action="login_proc.php" class="layout form-group">
	<input type="text" name="username" placeholder="Masukkan Username..." required="" class="form-control"><br>
	<input type="password" name="password" placeholder="Masukkan Password..." required="" class="form-control"><br>
	<input type="submit" value="Login" class="btn btn-success">
</form>
</body>
</html>