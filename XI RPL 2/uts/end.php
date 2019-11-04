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
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><?php echo $username; ?></a>
                <a href="logout.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Logout</a>
            </nav>
        </div>
    </nav>

<?php
    if(isset($_POST['save'])){
        $bayar = $_POST['bayar'];
        $total = $_POST['total'];
        $hasil = $bayar - $total;
        ?>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                <br>
                    <div class="card">
                        <div class="card-header">Pembayaran</div>
                        <div class="card-body">
                            <p>Uang Yang Anda Berikan Senilai <?php echo $bayar;?></p>
                            <p>Kembalian : <?php echo $hasil?></p>
                            <p>Apakah Anda Ingin Memesan Kembali?</p>
                            <a href="produk.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ya</a>
                            <a href="end.php" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Tidak</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
?>
        