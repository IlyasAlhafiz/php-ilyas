<?php

$novel = [
    [
        "judul" => "Dilan 1991",
        "penulis" => "Pidi bala",
        "tanggal_rilis" => "20 November 2024",
        "penerbit" => "Airlangga"
    ],
    [
        "judul" => "Cantik Itu Luka",
        "penulis" => "Eka Kurniawan",
        "tanggal_rilis" => "1 September 2002",
        "penerbit" => "Gramedia Pustaka Utama"
    ],
    [
        "judul" => "Laut Bercerita",
        "penulis" => "Leila S. Chudori",
        "tanggal_rilis" => "15 November 2017",
        "penerbit" => "Kepustakaan Populer Gramedia"
    ],
    [
        "judul" => "Hujan",
        "penulis" => "Tere Liye",
        "tanggal_rilis" => "26 Januari 2016",
        "penerbit" => "Gramedia Pustaka Utama"
    ],
    [
        "judul" => "Pulang",
        "penulis" => "Leila S. Chudori",
        "tanggal_rilis" => "10 Oktober 2012",
        "penerbit" => "Kepustakaan Populer Gramedia"
    ],
];

foreach($novel as $buku){
    echo "Judul: ". $buku['judul'] . "<br>";
    echo "Penulis: ". $buku['penulis'] . "<br>";
    echo "Tanggal Rilis: ". $buku['tanggal_rilis'] . "<br>";
    echo "Penerbit: ". $buku['penerbit'];
    echo "<hr>";
}

?>