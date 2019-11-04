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
                <a href="logout.php" class="btn btn-primary btn-md active" role="button" aria-pressed="true">Logout</a>
            </nav>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Masukkan Data Pembelian</div>
                        <div class="card-body">
    <?php
        if (isset($_POST['simpan'])) {
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $jenkel = $_POST['jeniskelamin'];
            $tanggal = $_POST['tanggal'];
            $jumlah = $_POST['jumlah'];
        ?>

                        <div class="card">
                            <div class="card-header">Data Pembelian</div>
                            <div class="card-body">
                                <form action="output.php" method="post">

        <input type="hidden" name="nama" value="<?php echo $nama ?>">
        <input type="hidden" name="alamat" value="<?php echo $alamat ?>">
        <input type="hidden" name="jeniskelamin" value="<?php echo $jenkel ?>">
        <input type="hidden" name="tanggal" value="<?php echo $tanggal ?>">
        <input type="hidden" name="jumlah" value="<?php echo $jumlah ?>">
        <?php

            for ($i= 0; $i < $jumlah; $i++) { 
    ?>
                                    <div class="form-group">
                                        <label for="">Nama Barang</label>
                                        <input type="text" name="barang[]" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Kode Barang</label>
                                        <input type="text" name="kode[]" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">State</label>
                                        <select class="form-control" name="jenis[]">
                                            <option selected>Choose...</option>
                                            <option value="Makanan">Makanan</option>
                                            <option value="Minuman">Minuman</option>
                                            <option value="Alat Tulis">Alat Tulis</option>
                                            <option value="Pakaian">Pakaian</option>
                                            <option value="Sepatu">Sepatu</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Harga</label>
                                        <input type="number" min="1" name="harga[]" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jumlah Pembelian</label>
                                        <input type="number" min="1" name="jml[]" class="form-control" required>
                                    </div>
                                    <hr style="height:5px; background-color:#000;">
    <?php
            }
        }
    ?>
                                <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>