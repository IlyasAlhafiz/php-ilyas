<?php

$buah = [
    [
        "nama" => "Safitri",
        "buah" => [ 
            [
                "buah1" => "Anggur",
                "jenis" => ["jenis1" => "Anggur Ijo", "Anggur Putih"]
            ]
        ]
    ],
    [
        "nama" => "Rahman",
        "buah" => [
            [
                "buah1" => "Alpukat",
                "jenis" => ["jenis1" => "Alpukat Mentega", "Alpukat Biasa"]
            ],
            [
                "buah1" => "Apel",
                "jenis" => ["jenis1" => "Apel Merah", "Apel Hijau"]
            ]
        ]
    ]
];

foreach($buah as $pemilik){
    echo "Nama Pemilik: " . $pemilik['nama'] . "<br>";
    echo "Daftar Buah Kesukaan: ";
    echo "<ul>";
    foreach ($pemilik['buah'] as $k) {
        echo "<li>" . $k['buah1'] . "</li>";
        echo "<ul>";
        foreach($k['jenis'] as $i){
            echo "- $i<
            br>";
        }
        echo "</ul>";
    }
    echo "</ul>";
    echo "<hr>";
}

?>