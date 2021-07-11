<?php
include "koneksi.php";

    $id = $_GET['id_buku'];

    $hasil = mysqli_query($koneksi, "DELETE FROM data_buku WHERE id_buku=$id");

    $hasil= header("location:BIP.php?alert= Data Buku telah di hapus");

?>