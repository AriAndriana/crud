<?php 
class Biodata extends Database{
    //Menampilkan semua data
    public function index(){
        $datasiswa = mysqli_query($this->koneksi, "Select * from biodata");
        //var_dump($datasiswa);
        return $datasiswa;
    }

    //Menambah data
    public function create($nama, $alamat, $jenis_kelamin, $agama, $tgl_lahir){
        mysqli_query($this->koneksi, 
            "insert into biodata values (null, '$nama', '$alamat', '$jenis_kelamin',
            '$agama', '$tgl_lahir')");
    }
    //Menampilkan data Berdasarkan ID
    public function show($id){
        $datasiswa = mysqli_query($this->koneksi, "select * from biodata where id='$id'");
        return $datasiswa;
    }
    //Menampilkan data berdasarkan id
    public function edit($id){
        $datasiswa = mysqli_query($this->koneksi, "select * from biodata where id='$id'");
        return $datasiswa;
    }
    //mengupdate data berdasarkan id
    public function update($id, $nama, $alamat, $jenis_kelamin, $agama, $tgl_lahir){
        mysqli_query($this->koneksi, "update biodata set nama='$nama'
                        , alamat='$alamat', jenis_kelamin='$jenis_kelamin',
                        agama='$agama', tgl_lahir='$tgl_lahir' where id='$id'");
    }
    public function delete($id){
        mysqli_query($this->koneksi, "delete from biodata where id='$id'");
    }
}