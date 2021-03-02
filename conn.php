<?php
$conn = mysqli_connect("localhost", "root", "", "db_crud");

if (mysqli_connect_errno()) {
	echo "Connection Failed : " .mysqli_connect_errno();
}
?>