<?php
// buat class
class Kucing{

    // buat property / atribut
    var $warna;
    var $jenis;

    // method / function
    public function makan(){

        echo "Kucing Suka Makan Wiskhas";
    }
    public function minum(){

        echo "Kucing Suka Minum Air";
    }
}
// buat object
$cetak = new Kucing();

// memanggil method
echo $cetak->makan();
echo "<br>";
echo $cetak->minum();
echo "<br>";

// memanggil property
echo $cetak->warna = "Kuning";
echo "<br>";
echo $cetak->jenis = "Anggora";
echo "<br>";

?>