<?php

class bangun_datar{

    public $hasil;

    public function persegi($s) {
        $keliling = 4 * $s;
        echo "<h2>Menghitung Luas Persegi</h2>";
        echo "Panjang Sisi: $s<br>";
        echo "Keliling: $keliling<br>";
        $this->hasil = $s * $s;
        echo "Hasilnya: $this->hasil<br><hr>";
    }

    public function persegiPanjang($p, $l) {
        $keliling = 2 * ($p + $l);
        echo "<h2>Menghitung Luas Persegi Panjang</h2>";
        echo "Panjang: $p<br>";
        echo "Lebar: $l<br>";
        echo "Keliling: $keliling<br>";
        $this->hasil = $p * $l;
        echo "Hasilnya: $this->hasil<br><hr>";
    }
    
    public function segitiga($a, $t) {
        $this->hasil = 0.5 * $a * $t;
        echo "<h2>Menghitung Luas Segitiga</h2>";
        echo "Alas: $a<br>";
        echo "Tinggi: $t<br>";
        echo "Hasilnya: $this->hasil<br><hr>";
    }
    
    public function lingkaran($r) {
        $phi = 3.14;
        $keliling = 2 * $phi * $r;
        echo "<h2> Menghitung Luas Lingkaran</h2>";
        echo "Jari-jari: $r<br>";
        echo "Keliling: $keliling<br>";
        $this->hasil = $phi * $r * $r;
        echo "Hasilnya: $this->hasil<br><hr>";
    }
}

$tampil = new bangun_datar();
echo $tampil->persegi(5);
echo $tampil->persegiPanjang(10, 5); 
echo $tampil->segitiga(8, 4);        
echo $tampil->lingkaran(7); 

?>