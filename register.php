<?php 
include "koneksi.php";

$username=$_POST["username"];
$nama_lengkap=$_POST["nama"];
$no_hp=$_POST["no_hp"];
$password=md5($_POST["password"]);

$sql="insert into user (username,nama_lengkap,password,no_hp) values('$username','$nama_lengkap','$password','$no_hp')";

$hasil=mysqli_query($koneksi,$sql);

if ($hasil) {
    header("location:index.php?register=register berhasil, silahkan login");

	// exit;
  }
else {
	echo "Gagal simpan data anggota";
	exit;
}  

?>

?>