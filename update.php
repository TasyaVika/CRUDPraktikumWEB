<?php 
 
include 'koneksi.php';

$id_buku=$_POST['id_buku'];
$title=$_POST["title"];
$deskripsi=$_POST["deskripsi"];
$tahun=$_POST["tahun"];
 
$hasil= mysqli_query($koneksi,"UPDATE data_buku set title='$title', deskripsi='$deskripsi', tahun='$tahun' WHERE id_buku='$id_buku'");
 
$hasil=header("location:BIP.php?alert= Data Buku telah di ubah");
?>