<?php

function biodata($nama,$tmpt_lahir,$tgl_lahir,$jk,$agama,$alamat,$hobi){
    echo "Nama Saya : $nama <br>";
    echo "Tempat Lahir : $tmpt_lahir <br>";
    echo "Tanggal Lahir : $tgl_lahir <br>";
    echo "Jenis Kelamin : $jk <br>";
    echo "Agama : $agama <br>";
    echo "Alamat Saya : $alamat <br>";
    echo "Hobi : $hobi <br>";
}

biodata("Ilyas","Kebumen","21-07-2008","Laki-Laki","Islam","Bandung","Bersepeda");

echo "<hr>";

// Menghitung

function menghitung($angka1,$angka2){
    echo "Bilangan ke 1 : $angka1<br>";
    echo "Bilangan ke 2 : $angka2<br>";
    $hasil = $angka1 + $angka2;
    echo "Hasilnya : $hasil";
}

menghitung(10,20);

?>