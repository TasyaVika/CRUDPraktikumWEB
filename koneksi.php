<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "pwebkita_db";

	$koneksi = mysqli_connect($host, $user, $pass, $db);

	if(!$koneksi) {
		die("Koneksi gagal : ".mysql_connect_error());
	}
?>