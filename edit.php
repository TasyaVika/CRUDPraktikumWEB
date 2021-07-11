<?php
    include "koneksi.php";

    $id = $_GET['id_buku'];

    $hasil = mysqli_query($koneksi, "SELECT * FROM data_buku WHERE id_buku='$id'");

    while($row = mysqli_fetch_array($hasil)){
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="img/logob.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit - Perpustakaan Nasional</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="beranda.php"><img src="img/L.png" class="img-fluid" width="190px" height="auto" margin="auto"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="nav justify-content-end" id="navbarNav">
    <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link " href="beranda.php">Home</a>
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

    <div class="container">

        <div class="card mt-4">
            <h5 class="card-header">Edit Data Buku</h5>
            <div class="card-body">
            <form action="update.php" method="post">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" id="formGroupExampleInput" value="<?php echo $row['deskripsi']; ?>" >
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="formGroupExampleInput2" value="<?php echo $row['title']; ?>" >
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Tahun</label>
                    <input type="text" name="tahun" class="form-control" id="formGroupExampleInput2" value="<?php echo $row['tahun']; ?>" >
                </div>
              
            </div>
                <div class="card-footer text-center d-grid gap-2">
                    <input type="hidden" name="id_buku" value="<?php echo $row['id_buku']; ?>" >
                    <button type="submit" class="btn btn-primary">Edit Submit</button>
                </div>
            </form>
        </div>

    </div>

    <?php } ?>

</body>
</html>