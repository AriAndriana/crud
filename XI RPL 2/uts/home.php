<?php 
session_start();
if ($_SESSION['login']) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Ari Andriana</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="produk.php">Produk</a>
            </li>
            </ul>
            <nav class="nav-item">
                <a href="logout.php" class="btn btn-primary btn-md active" role="button" aria-pressed="true">Logout</a>
            </nav>
        </div>
    </nav>

    <div class="container-fluid">
    <br>
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">Selamat Datang Di WELCOME STORE</div>
                <div class="card-body">
                    <h5 class="card-title">WELCOME STORE</h5>
                    <p class="card-text">Toko Kami Menyediakan Banyak Barang Kebutuhan Sehari Hari</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
} else {
    echo "<script>alert('Anda Harus Login Terlebih Dahulu'); window.location.href='login.php';</script>";  
}
?>
