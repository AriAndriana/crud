<?php
    class Kuda{
        public $warna = 'Coklat';
        public $jumlah_kaki = 4;
        public $kecepatan_lari = 88.5;
        public $makan = true;

        public function berlari($var){
            return "Kuda Sangat Terbiasa dengan berlari, Kecepatan berlari kuda bisa sampai $var km/jam";
        }
        public function makan($var){
            return "Kuda adalah Herbivora, Makanan Kuda adalah " . $var;
        }
        public function tidur(){
            return "Kuda bisa tidur sambil berdiri dengan cara mengunci sendi kaki mereka.";
        }
        public function berkembang($var){
            return "Kuda adalah mahkluk mamalia yang $var anaknya dan tidak bertelur";
        }
        public function minum($var){
            return "Kuda minum banyak $var putih, setidaknya 25 galon $var sehari.";
        }
    }

    $kuda_asli = new Kuda;
    echo 'Warna Kuda Kebanyakan adalah '.$kuda_asli->warna;
    echo '<br> Jumlah Kaki Kuda adalah '.$kuda_asli->jumlah_kaki;
    echo '<br> Kecepatan berlari Kuda adalah sekitar '.$kuda_asli->kecepatan_lari .' km/jam';
    if ($kuda_asli->makan == true) {
        echo '<br> Sangat ' . $kuda_asli->makan = "Benar" . " Kuda Membutuhkan Makan";
    } else{
        echo "<br> Kuda akan mati jika tidak makan";
    }
    echo '<br>'.$kuda_asli->berlari($kuda_asli->kecepatan_lari);
    echo '<br>'.$kuda_asli->makan('Rumput');
    echo '<br>'.$kuda_asli->tidur();
    echo '<br>'.$kuda_asli->minum('Air');
    echo '<br>'.$kuda_asli->berkembang('Melahirkan');
?>