<?php

$siswa = [
    [
        "nama" => "Ilyas Alhafiz",
        "jenis_kelamin" => "Laki-Laki",
        "kelas" => "XI RPL 1"
    ],
    [
        "nama" => "Ilyas Alhafiz",
        "jenis_kelamin" => "Laki-Laki",
        "kelas" => "XI RPL 1"
    ]
];

foreach ($siswa as $murid){
    echo "Nama: ".$murid["nama"]. "<br>";
    echo "Jenis Kelamin: ".$murid["jenis_kelamin"]. "<br>";
    echo "Kelas: ".$murid["kelas"];
    echo "<hr>";
}

?>