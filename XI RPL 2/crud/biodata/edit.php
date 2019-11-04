<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    include '../database.php';
    $biodata = new Biodata();
    foreach ($biodata->edit($_GET['id']) as $data) {
        $id = $data['id'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $jenis_kelamin = $data['jenis_kelamin'];
        $agama = $data['agama'];
        $tgl_lahir = $data['tgl_lahir'];
    }
?>
    <fieldset>
        <legend>Edit Data </legend>
        <form action="proses.php?aksi=update" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <th>Nama</th>
                    <td><input type="text" name="nama" value="<?php echo $nama;?>" required></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><textarea name="alamat" cols="40" required><?php echo $alamat; ?></textarea></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td><input type="radio" name="jenkel" value="Laki-Laki" checked>Laki-Laki</td>
                    <td><input type="radio" name="jenkel" value="Perempuan">Perempuan</td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td><select name="agama" id="">
                        <option value="Islam">Islam</option>
                        <option value="Khatolik">Khatolik</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Hindu">Hindu</option> 
                        <option value="Buddha">Buddha</option>
                    </select></td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td><input type="date" name="tgl_lahir" value=<?php echo $tgl_lahir ?>></td>
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>