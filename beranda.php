<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: login.php");
    }
?>

<?php
include_once 'koneksi.php';
$result = mysqli_query($koneksi,"SELECT * FROM data_mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" href="img/logob.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Perpustakaan Nasional</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
<style>

</style>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="beranda.php"><img src="img/L.png" class="img-fluid" width="190px" height="auto" margin="auto"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="nav justify-content-end" id="navbarNav">
    <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Panduan Mutu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Maklumat Layanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="BIP.php">BIP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="beranda.php#info-isbn">Info</a>
          <li class="nav-item">
          <a class="nav-link" href="#">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Statistik</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Berita</a>
        </li>
        </li>
      </ul>
                <form class="d-flex" action="logout.php">
                    <button class="btn btn-outline-success" type="submit">Logout</button>
                </form>

            </div>
        </div>
    </nav>
    <div class="mb-6">
    </div>
    
    <div class="container bg-white">
    <div class="gradient-overlay-half-white-v2 bg-img-hero" style="background-image: url(img/A.jpg);">

                <div class="container ">
                    <div class="">
                        <div class="mb-5">
                            <h1 class="display-4">
                                <strong>ISBN</strong>
                            </h1>
                            <p class="lead">International Standard Book Number</p>
                        </div>
                    </div>
                    <div class="">
                        <a class="btn btn-primary" href="#">Prosedur</a>
                        <a class="btn btn-success" href="#">Daftar Online</a>
                        <br>
                        <br>
                        <form class="w-lg-80 mx-auto bg-white rounded shadow-sm" action="/Account/SearchBuku">
                <div class="d-md-flex justify-content-between align-items-stretch">
                    <div class="flex-grow-1">
                        <div class="row no-gutters">
                            <div class="col-md-12">
                                <input type="text" name="searchTxt" id="searchTxt" class="form-control form-control-lg rounded-bottom-0 rounded-md-right-0 border-left-0 border-top-0" placeholder="Cari judul, pengarang, penerbit atau isbn" required="">
                            </div>
                        </div>

                        <div class="d-lg-flex justify-content-between px-3 px-lg-4 py-3">
                            <div class="mb-3 mb-lg-0">
                            <div class="custom-control">
                                    <label class="custom-control-label" for="cat_judul">Judul</label>
                                </div>
                                <div class="custom-control">
                                    <label class="custom-control-label" for="cat_kepeng">Pengarang</label>
                                </div>
                                <div class="custom-control">
                                    <label class="custom-control-label" for="cat_penerbit">Penerbit</label>
                                </div>
                                <div class="custom-control">
                                    <label class="custom-control-label" for="cat_isbn">ISBN</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                    <a href="#" class="btn btn-primary active" aria-current="page">Search</a>
            </form>
      </div>                  
     </div>
     </div>
     </div>
     <br>
     <br>
<!-- kolom awal -->
    <div class="container bg-white">
    <div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-2">
   
    </div>
    <div class="col-md-auto">
    <span class="btn btn bg-warning mb-3">Selamat Datang Di ISBN Perpustakaan</span>
      
    </div>
    <div class="col col-lg-2">
    
    </div>
  </div>

  <div class="row">
    <div class="col">
    ISBN (International Standard Book Number) adalah deretan angka 13 digit sebagai pemberi identifikasi unik secara internasional terhadap satu buku maupun produk seperti buku yang diterbitkan oleh penerbit. Setiap nomor memberikan identifikasi unik untuk setiap terbitan buku dari setiap penerbit, sehingga keunikan tersebut memungkinkan pemasaran produk yang lebih efisien bagi toko buku, perpustakaan, universitas maupun distributor.
    </div>
    <br>
    ISBN diberikan oleh Badan Internasional ISBN yang berkedudukan di London. Perpustakaan Nasional RI merupakan Badan Nasional ISBN yang berhak memberikan ISBN kepada penerbit yang berada di wilayah Indonesia dan KDT (Katalog Dalam Terbitan).
    
  </div>
  <br>
  Proses pendaftaran penerbit, permintaan ISBN dan KDT telah dibuat lebih mudah dengan layanan satu pintu. Sekali informasi judul terbitan diserahkan, akan menjadi bagian dari database bibliografi dan akan muncul di terbitan Katalog Dalam Terbitan di Perpustakaan Nasional, yang memungkinkan perpustakaan maupun toko buku yang mencari terbitan untuk dibeli mengetahui informasi terbitan terbaru.
</div>
    </div>
    </div>
   </div>
   </div>
   <br>
<!-- kolom 2 -->   
   <div class="card bg-primary" style="padding:20px">
    <div class="container">
  <div class="row">
    <div class="col text-center">
    <img src="img/verifikasi.png" class="img-fluid" width="100px" height="auto" margin="auto">
    <h3 class="h4 text-white">Daftar ISBN</h3>
    <p class="text-light">Mulai dengan unggah berkas yang akan dimintakan nomornya.</p>
    </div>
    <div class="col order-5 text-center">
    <img src="img/nomor.png" class="img-fluid" width="100px" height="auto" margin="auto">
    <h3 class="h4 text-white">Nomor ISBN Selesai</h3>
    <p class="text-light">Nomor ISBN yang diminta akan keluar dan bisa diunduh mandiri di akun penerbit.</p>
    </div>
    <div class="col order-1 text-center">
    <img src="img/berkas.png" class="img-fluid" width="100px" height="auto" margin="auto">
    <h3 class="h4 text-white">Verifikasi Berkas</h3>
    <p class="text-light">Berkas akan diverifikasi dan diinput sesuai dengan permintaan penerbit.</p>
    </div>
  </div>
</div>
  </div>
</div>
</div>
</div>
<!-- kolom 3 -->
<div id="info-isbn" class="card bg-white" style="padding:20px">
    <div class="container">
  <div class="row">
  <div class="text-left mx-md-auto">
        <span class="btn btn bg-warning mb-3">Info seputar ISBN</span>
    </div>
    <div class="col text-center">
    <img src="img/info.png" class="img-fluid" width="100px" height="auto" margin="auto">
    <h3 class="h4 text-dark">Informasi Seputar ISBN</h3>
    <p class="text-light-dark">Ingin tahu lebih banyak tentang apa, bagaimana dan fungsi ISBN serta persyaratan untuk mendapatkannya?</p>
    <a class="text-secondary" href="#">Silahkan klik disini --></a>
    </div>
    <div class="col order-1 text-center">
    <img src="img/on.png" class="img-fluid" width="100px" height="auto" margin="auto">
    <h3 class="h4 text-dark">Katalog Dalam Terbitan & BIP Online</h3>
    <p class="text-light-dark">KDT atau Katalog Dalam Terbitan adalah salah satu layanan untuk penerbit, ingin mengetahui selengkapnya?</p>
    <a class="text-secondary" href="#">Silahkan klik disini --></a>
    </div>
    <div class="col order-5 text-center">
    <img src="img/files.png" class="img-fluid" width="100px" height="auto" margin="auto">
    <h3 class="h4 text-dark">Prosedur Registrasi Penerbit & Daftar Isbn</h3>
    <p class="text-light-dark">Prosedur dan cara registrasi ISBN dan cara mengajukan permohonan ISBN, ingin mengetahui selengkapnya?</p>
    <a class="text-secondary" href="#">Silahkan klik disini --></a>
    </div>
  </div>
</div>
<br>
        <!-- Paling bawah -->
    <footer>
    <div class="card bg-dark" style="padding:20px">
  
    <div class="container">
  <div class="row">
    <div class="col order 1">
    <img src="img/logob.png" class="img-fluid" width="40px" height="auto" margin="auto">
    <span class="h5 text-white">&nbsp;&nbsp;I S B N</span>
        <br>
        <strong class="text-white">International Standard Book</strong>
        <br>
        <br>
        <p class="fw-light text-white">PERPUSTAKAAN NASIONAL REPUBLIK INDONESIA</p>
        <p class="fw-light text-white">Pusat Bibliografi dan Pengolahan
        Bahan Perpustakaan </p>
        <br>
        <h6 class="text-white">Jl. Salemba Raya 28A </h6>
        <h7 class="text-white">Daerah khusus Ibukota Jakarta</h7>
        <p class="text-white">10430 - Indonesia </p>
        <h7 class="text-white">Tim ISBN/KDT ©2019.</h7>
    </div>
    <div class="col order-2">
    <h6 class="text-white"> Jam Layanan</h6>
        <h6 class="text-white">Permohonan ISBN dan KDT dilayani setiap hari kerja : </h6>
        <br>
        <br>
        <h7 class="text-white">Senin - Jumat </h7>
        <br>
        <img src="img/jam.png" class="img-fluid" width="18px" height="auto" margin="auto">
        <span class="small text-white">09.00 – 15.00(WIB)</span> 
    </div>
    <div class="col order-2">
    <h6 class="text-white">Kontak Kami</h6>
    <img src="img/tel.png" class="img-fluid" width="30px" height="auto" margin="auto">
    <span class="small text-white">021 2333 444</span>
    <br>
    <img src="img/mail.png" class="img-fluid" width="30px" height="auto" margin="auto">
    <span class="small text-white">isbn@perpus.co.id</span>
    <br>
    &nbsp;&nbsp;<img src="img/we.png" class="img-fluid" width="18px" height="auto" margin="auto">
    &nbsp;<span class="small text-white">isbn.perpus.co.id</span>
        
            </div>
    <div class="col order-4 bg-black">
    <h6 class="text-white">Link Terkait</h6>
    <br>
        <p class="fw-light text-white">Perpusnas</p>
        <p class="fw-light text-white">Deposti Perpus</p>
        <br>
      
    </div>
  </div>
</div>
  </footer>

</body>

</html>