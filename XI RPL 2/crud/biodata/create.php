<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Input Biodata</div>
                    <div class="card-body">
                        <legend>Input Data Siswa</legend>
                        <form action="proses.php?aksi=tambah" method="post">
                            <table>
                                <tr>
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control" required></<input>
                                </tr>
                                <tr>
                                    <label for="">Alamat</label>
                                    <textarea name="alamat" cols="40" required class="form-control"></textarea>
                                </tr>
                                <tr>
                                    <label for="">Jenis Kelamin</label>
                                    <input type="radio" name="jenkel" value="Laki-Laki" checked class="radio-inline">Laki-Laki
                                    <input type="radio" name="jenkel" value="Perempuan" class="radio-inline">Perempuan <br>
                                </tr>
                                <tr>
                                    <label for="">Agama</label>
                                    <select name="agama" id="" class="form-control">
                                        <option value="Islam">Islam</option>
                                        <option value="Khatolik">Khatolik</option>
                                        <option value="Protestan">Protestan</option>
                                        <option value="Hindu">Hindu</option> 
                                        <option value="Buddha">Buddha</option>
                                    </select>
                                </tr>
                                <tr>
                                    <label for="">Tanggal Lahir</label><br>
                                    <input type="date" name="tgl_lahir" class="form-control">
                                </tr>
                                <tr>
                                    <button type="submit" name="save" class="btn ">Simpan</button>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>