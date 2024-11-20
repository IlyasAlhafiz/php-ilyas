<?php

class bangun_datar{

public $luas;
public $keliling;
}

// hitung luas
    class luas extends bangun_datar{

        function persegi($s) {
            echo "<h2>Menghitung Luas Persegi</h2>";
            echo "Panjang Sisi: $s<br>";
            $this->luas = $s * $s;
            echo "Hasilnya: $this->luas<br><hr>";
        }

        function persegiPanjang($p, $l) {
            echo "<h2>Menghitung Luas Persegi Panjang</h2>";
            echo "Panjang: $p<br>";
            echo "Lebar: $l<br>";
            $this->luas = $p * $l;
            echo "Hasilnya: $this->luas<br><hr>";
        }

        function segitiga($a, $t) {
            $luas = 0.5 * $a * $t;
            echo "<h2>Menghitung Luas Segitiga</h2>";
            echo "Alas: $a<br>";
            echo "Tinggi: $t<br>";
            echo "Hasilnya: $this->luas<br><hr>";
        }
        
        function lingkaran($r) {
            $phi = 3.14;
            echo "<h2> Menghitung Luas Lingkaran</h2>";
            echo "Jari-jari: $r<br>";
            $this->luas = $phi * $r * $r;
            echo "Hasilnya: $this->luas<br><hr>";
        }
    }

// hitung keliling
    class keliling extends bangun_datar{

        function persegi($s) {
            $keliling = 4 * $s;
            echo "<h2>Menghitung keliling Persegi</h2>";
            echo "Keliling: $keliling<br>";
            $this->keliling = $s * $s;
            echo "Hasilnya: $this->keliling<br><hr>";
        }

        function persegiPanjang($p, $l) {
            $keliling = 2 * ($p + $l);
            echo "<h2>Menghitung Keliling Persegi Panjang</h2>";
            echo "Keliling: $keliling<br>";
            $this->keliling = $p * $l;
            echo "Hasilnya: $this->keliling<br><hr>";
        }

        function segitiga($a, $t) {
            $keliling = 0.5 * $a * $t;
            echo "<h2>Menghitung Keliling Segitiga</h2>";
            echo "Keliling: $keliling<br>";
            echo "Hasilnya: $this->keliling<br><hr>";
        }
        
        function lingkaran($r) {
            $phi = 3.14;
            $keliling = 2 * $phi * $r;
            echo "<h2> Menghitung keliling Lingkaran</h2>";
            echo "Keliling: $keliling<br>";
            $this->keliling = $phi * $r * $r;
            echo "Hasilnya: $this->keliling<br><hr>";
        }
    }

$cetak = new luas();
echo "<h1 align=center>Menghitung Luas</h1>";
echo $cetak->persegi(5);           
echo $cetak->persegiPanjang(10, 5); 
echo $cetak->segitiga(8, 4);        
echo $cetak->lingkaran(7); 
echo "<br>";

$cetak = new keliling();
echo "<h1 align=center>Menghitung keliling</h1>";
echo $cetak->persegi(5);           
echo $cetak->persegiPanjang(10, 5); 
echo $cetak->segitiga(8, 4);        
echo $cetak->lingkaran(7); 
?>