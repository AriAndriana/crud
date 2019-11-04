<?php 
class Siswa extends Database{
    //Menampilkan semua data
    public function index(){
        $datasiswa = mysqli_query($this->koneksi, "Select * from siswa");
        //var_dump($datasiswa);
        return $datasiswa;
    }

    //Menambah data
    public function create($nis, $nama, $alamat){
        mysqli_query($this->koneksi, 
            "insert into siswa values (null, '$nis', '$nama', '$alamat')");
    }
    //Menampilkan data Berdasarkan ID
    public function show($id){
        $datasiswa = mysqli_query($this->koneksi, "select * from siswa where id='$id'");
        return $datasiswa;
    }
    //Menampilkan data berdasarkan id
    public function edit($id){
        $datasiswa = mysqli_query($this->koneksi, "select * from siswa where id='$id'");
        return $datasiswa;
    }
    //mengupdate data berdasarkan id
    public function update($id, $nis, $nama, $alamat){
        mysqli_query($this->koneksi, "update siswa set nis='$nis', nama='$nama'
                        , alamat='$alamat' where id='$id'");
    }
    public function delete($id){
        mysqli_query($this->koneksi, "delete from siswa where id='$id'");
    }
}