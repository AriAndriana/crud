<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assevts/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Database Biodata</div>
                    <div class="card-body">
                        <center>Data Siswa</center>
                        <fieldset>
                            <legend>Data Siswa</legend>
                            <a href="create.php">Tambah Biodata Siswa</a>
                            <table class="table-responsive">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Agama</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Umur</th>
                                    <th colspan="3">Aksi</th>
                                </tr>
                                <?php 
                                    include '../database.php';
                                    $biodata = new Biodata();
                                    $no = 1;
                                    $date = date('Y');
                                    foreach($biodata->index() as $data){
                                        $umur = ($date - $data['tgl_lahir']);
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['alamat'];?></td>
                                            <td><?php echo $data['jenis_kelamin'];?></td>
                                            <td><?php echo $data['agama'];?></td>
                                            <td><?php echo $data['tgl_lahir'];?></td>
                                            <td><?php echo $umur;?></td>
                                            <td><a href="show.php?id=<?php echo $data['id'];?>">Show</a></td>
                                            <td><a href="edit.php?id=<?php echo $data['id'];?>">Edit</a></td>
                                            <td><a href="proses.php?id=<?php echo $data['id'];?>
                                            &aksi=delete" onclick="return confirm('Apakah anda Yakin mau menghapus data ini?')" >
                                            Delete</a></td>
                                        </tr>
                                <?php
                                    }
                                ?>
                            </table>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>