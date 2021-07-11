<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: login.php");
    }
?>

<?php
include_once 'koneksi.php';
$result = mysqli_query($koneksi,"SELECT * FROM data_buku ORDER BY tahun ASC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" href="img/logob.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIP - Perpustakaan Nasional</title>

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
          <a class="nav-link"href="beranda.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Panduan Mutu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Maklumat Layanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">BIP</a>
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
    <div class="card" style="padding:20px">
    <div class="container">

        <?php if(isset($_GET['alert'])) {  ?>
        <div class="alert alert-warning alert-dismissible fade show mt-4" role="alert">
            <strong><?php echo $_GET['alert']; ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php } ?>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Data Buku
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Buku</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body bg-white">
                            <form action="create.php" method="post" style="font-family:calibri">
                                <div class="form-floating mb-4">
                                    <input type="text" name="title" class="form-control" id="floatingInput" value="">
                                    <label for="floatingInput" class="text-dark">Title</label>
                                </div>
                                <div class="form-floating mb-4 ">
                                    <input type="text" name="deskripsi" class="form-control" id="floatingInput"
                                        value="">
                                    <label for="floatingInput" class="text-dark">Deskripsi</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="text" name="tahun" class="form-control" id="floatingInput" value="">
                                    <label for="floatingInput" class="text-dark">Tahun</label>
                                </div>
                                
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- table -->
        <div class="card mt-3">
            <div class="card-header">
            <img src="img/C.png" class="img-fluid" width="40px" height="auto" margin="auto">
                BIP ONLINE 
            </div>
            <table class="table table-hover text-center">
                <tr>
                    <th>No. </th>
                    <th>Title</th>
                    <th>Deskripsi</th>
                    <th>Tahun</th>
                    <th>Aksi</th>
                </tr>
                <?php
                    $i=1;
                    while($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $i; ?></td>

                    <td><?php echo $row["title"]; ?></td>
                    <td><?php echo $row["deskripsi"]; ?></td>
                    <td><?php echo $row["tahun"]; ?></td>
                    <td>
                        <a class="badge bg-warning text-decoration-none p-2" href="edit.php?id_buku=<?php echo $row['id_buku']; ?>">Edit</a>					
                        <span class="text-dark fw-bold">|</span>
                        <a class="badge bg-danger text-decoration-none p-2" href="delete.php?id_buku=<?php echo $row['id_buku']; ?>">Hapus</a>					
                    </td>
                </tr>
                <?php
                    $i++;
                    }
                ?>
            </table>

            <div class="card-footer">
                Jumlah Buku <?php $i--; echo $i;?>
            </div>

        </div>
        <!-- table -->
    </div>

    <footer>
        <div class="p-3 text-center bg-light mt-4">
            <p class="text-xl fw-bold">© 2021 | Credit by Kelompok 5</p>
        </div>
    </footer>

</body>

</html>