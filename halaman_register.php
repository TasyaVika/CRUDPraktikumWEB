<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" href="img/B.jpg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Perpustakaan Nasional</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<style>
h2
{
    background-color: white;
    color: crimson;
    font-family: sans-serif;
    text-align: center;
    width: 75%;
    margin:auto;
    padding: 15px;
}
 
body
{
    background-image: url('img/A.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<body style="background-color:grey">
    <div class="container m-5 p-5">
        <center>
            <div class="card text-white bg-light" style="max-width: 30rem;">
                <div class="card-header bg-light text-dark" style="font-family:calibri">
                <h2 class="fw-bold text-primary">Silahkan Register</h2>
                <p>Register Untuk Mendaftar Akun Baru Di Perpustakaan Nasional</p>
                </div>  
                <div class="card-body bg-white">
                    <form action="register.php" method="post" style="font-family:calibri">

                        <div class="form-floating mb-3 ">
                            <input type="text" name="nama" class="form-control" id="floatingInput" value="">
                            <label for="floatingInput" class="text-dark">Nama Lengkap</label>
                        </div>
                        <div class="form-floating mb-3 ">
                            <input type="text" name="username" class="form-control" id="floatingInput" value="">
                            <label for="floatingInput" class="text-dark">Username</label>
                        </div>
                        <div class="form-floating mb-3 ">
                            <input type="password" name="password" class="form-control" id="floatingInput" value="">
                            <label for="floatingInput" class="text-dark">Password </label>
                        </div>
                        <div class="form-floating">
                            <input type="text" name="no_hp" class="form-control" id="floatingPassword" value="">
                            <label for="floatingPassword" class="text-dark">Nomer Hp</label>
                        </div>

                        <?php if(isset($_GET['pesan'])) {  ?>

                        <label class="label" style="color:red">
                            <?php echo $_GET['pesan']; ?>
                            <?php } ?>

                        </label>
                        <br>
                        <div class="d-grid gap-2">

                            <button type="submit" style="align-center" class="btn btn-success ">Register</button>
                        </div>
                    </form>
                  
                    <form action="index.php">

                        <div class="d-grid gap-2">
                            <button type="submit" style="align-center"
                                class="btn btn-outline-primary mt-2 ">Login</button>

                        </div>
                    </form>
                </div>
            </div>


        </center>
    </div>

</body>

</html>