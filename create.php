<?php 
include "koneksi.php";

$title=$_POST["title"];
$deskripsi=$_POST["deskripsi"];
$tahun=$_POST["tahun"];

$sql="insert into data_buku (title,deskripsi,tahun)

values('$title','$deskripsi','$tahun')";

$hasil=mysqli_query($koneksi,$sql);
$hasil=header("location:BIP.php?alert= Data Buku telah di tambahakan");

?>