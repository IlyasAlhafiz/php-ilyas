<?php

function persegi($s) {
    $keliling = 4 * $s;
    echo "<h2>Menghitung Luas Persegi</h2>";
    echo "Panjang Sisi: $s<br>";
    echo "Keliling: $keliling<br>";
    $hasil = $s * $s;
    echo "Hasilnya: $hasil<br><hr>";
}

function persegiPanjang($p, $l) {
    $keliling = 2 * ($p + $l);
    echo "<h2>Menghitung Luas Persegi Panjang</h2>";
    echo "Panjang: $p<br>";
    echo "Lebar: $l<br>";
    echo "Keliling: $keliling<br>";
    $hasil = $p * $l;
    echo "Hasilnya: $hasil<br><hr>";
}

function segitiga($a, $t) {
    $hasil = 0.5 * $a * $t;
    echo "<h2>Menghitung Luas Segitiga</h2>";
    echo "Alas: $a<br>";
    echo "Tinggi: $t<br>";
    echo "Hasilnya: $hasil<br><hr>";
}

function lingkaran($r) {
    $phi = 3.14;
    $keliling = 2 * $phi * $r;
    echo "<h2> Menghitung Luas Lingkaran</h2>";
    echo "Jari-jari: $r<br>";
    echo "Keliling: $keliling<br>";
    $hasil = $phi * $r * $r;
    echo "Hasilnya: $hasil<br><hr>";
}

persegi(5);           
persegiPanjang(10, 5); 
segitiga(8, 4);        
lingkaran(7);          

?>
