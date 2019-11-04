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
                <a href="logout.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Logout</a>
            </nav>
        </div>
    </nav>
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data Pembeli</div>
                    <div class="card-body">        
                        <div class="table-responsive">
                        <br>
                            <table class="table">

                            <form action="end.php" method="post">

                                <?php
                                    if(isset($_POST['submit'])){
                                        $nama = $_POST['nama'];
                                        $alamat = $_POST['alamat'];
                                        $jenkel = $_POST['jeniskelamin'];
                                        $tanggal = $_POST['tanggal'];
                                        $jumlah = $_POST['jumlah'];
                                        $barang = $_POST['barang'];
                                        $kode = $_POST['kode'];
                                        $jenis = $_POST['jenis'];
                                        $harga = $_POST['harga'];
                                        $jml = $_POST['jml'];
                                ?>
                                <tr>
                                    <th colspan="7"><center><strong>Data Pembeli</strong></center></th>
                                </tr>
                                <tr>
                                    <th><strong>Nama</strong></th>
                                    <th><strong>Alamat</strong></th>
                                    <th><strong>Jenis Kelamin</strong></th>
                                    <th><strong>Tanggal Pembelian</strong></th>
                                    <th><strong>Jumlah Barang</strong></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td><?php echo $nama; ?></td>
                                    <td><?php echo $alamat; ?></td>
                                    <td><?php echo $jenkel; ?></td>
                                    <td><?php echo $tanggal; ?></td>
                                    <td><?php echo $jumlah; ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th colspan="7"><center><strong>Data Barang Pembeli</strong></center></th>
                                </tr>
                                <tr>
                                    <th><strong>Nama Barang</strong></th>
                                    <th><strong>Kode Barang</strong></th>
                                    <th><strong>Jenis Barang</strong></th>  
                                    <th><strong>Harga Barang</strong></th>
                                    <th><strong>Jumlah Barang</strong></th>
                                    <th><strong>Total Harga</strong></th>
                                </tr>
                                <?php
                                    foreach ($barang as $key => $value) {
                                ?>
                                <tr>
                                    <td><?php echo $barang[$key]; ?></td>
                                    <td><?php echo $kode[$key]; ?></td>
                                    <td><?php echo $jenis[$key]; ?></td>
                                    <td><?php echo $harga[$key]; ?></td>
                                    <td><?php echo $jml[$key]; ?></td>
                                    <td><?php echo $harga1 = $harga[$key] * $jml[$key]?></td>
                                    <?php $subtotal = $subtotal + $harga1; ?>
                                </tr>
                                    <?php } ?>
                                <tr>
                                    <th colspan="7"><center>Total Pembayaran</center></th>
                                </tr>
                                <tr>
                                    <td><strong>Subtotal</strong></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Rp. <?php echo $subtotal; ?></td>
                                </tr>
                                <?php
                                    if($subtotal >= 150000 && $subtotal <= 250000) {
                                        $disc = $subtotal * (5/100);
                                ?>      
                                <tr>
                                    <td><strong>Diskon 5%</strong></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Rp. <?php echo $disc ?></td>
                                </tr>

                                        <?php
                                    } elseif($subtotal >= 250000 && $subtotal < 500000){
                                        $disc = $subtotal * (10/100);
                                    ?>
                                <tr>
                                    <td><strong>Diskon 10%</strong></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Rp. <?php echo $disc?></td>
                                </tr>
                                    <?php
                                    } elseif($subtotal >= 500000){
                                        $disc = $subtotal * (20/100);
                                    ?>

                                <tr>
                                    <td><strong>Diskon 20%</strong></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Rp. <?php echo $disc?></td>
                                </tr>
                                    <?php
                                    }
                                ?>
                                <tr>
                                    <td><strong>Total Harga</strong></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <?php $total = $subtotal - $disc; ?>
                                    <td>Rp. <?php echo $total; ?></td>
                                    
                                </tr>
                                <tr>
                                    <th colspan="7"><strong><center>Pembayaran</center></strong></th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
                                    <div class="form-group">
                                        <input type="hidden" name="total" value="<?php echo $total ?>">
                                        <label for="">Masukkan Jumlah Uang</label>
                                        <input type="number" name="bayar" min="<?php echo $total ?>" class="form-control" required>
                                        
                                    </div>
                                    <button class="btn btn-outline-primary" type="submit" name="save">Bayar</button>
                            </form>
                        </div>
                    </div>        
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    ?>

</body>
</html>