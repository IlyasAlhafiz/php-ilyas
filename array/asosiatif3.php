<?php

$siswa = [
    [
        "nis" => "1001",
        "nama" => "Haddad",
        "kelas" => "XI Rpl 1",
        "ekskul" => ["nama_ekskul" => "Seni Tari", "Karawitan", "Futsal"]
        ],
        [
            "nis" => "1002",
            "nama" => "Sandi",
            "kelas" => "XI Rpl 1",
            "ekskul" => ["nama_ekskul" => "Futsal"]
            ]
        ];

foreach ($siswa as $murid) {
    echo "NIS: " . $murid['nis'] . "<br>";
    echo "Nama: " . $murid['nama'] . "<br>";
    echo "Kelas: " . $murid['kelas'] . "<br>";
    echo "Ekskul: ";

    echo "<ul>";
foreach ($murid['ekskul'] as $i){
    echo "<li>$i</li>";
}
echo "</ul>";
echo "<hr>";

}

?>