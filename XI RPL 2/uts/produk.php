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
                <a class="nav-link" href="produk">Produk</a>
            </li>
            </ul>
            <nav class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><?php echo $username; ?></a>
                <a href="logout.php" class="btn btn-primary btn-md active" role="button" aria-pressed="true">Logout</a>
            </nav>
        </div>
    </nav>

    <div class="container-fluid">
    <br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Masukan Data Diri untuk Melanjutkan Pemesanan</div>
                    <div class="card-body">
                        <form action="produkpro.php" method="post">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea type="hidden" name="alamat" class="form-control"></textarea>
                            </div>
                                <label for="">Jenis Kelamin</label><br>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio01" name="jeniskelamin" value="Laki-Laki" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio01">Laki - Laki</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio02" name="customRadio" value="Perempuan" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio02">Perempuan</label>
                                </div>
                            <div class="form-group">
                                <label for="">Tanggal Pembelian</label>
                                <input class="form-control" type="date" name="tanggal" id="" required>
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Pembelian</label>
                                <input type="number" name="jumlah" class="form-control" required>
                            </div>
                            <button class="btn btn-primary" type="submit" name="simpan">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>