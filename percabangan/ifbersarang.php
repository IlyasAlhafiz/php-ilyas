<?php

$jurusan = "RPL";
$kelas = "10";

if ($jurusan == "RPL") {
    if ($kelas == "10") {
        echo "Ini Kelas 10 RPL";
    }elseif ($kelas == "11") {
        echo "Ini Kelas 11 RPL";
    }elseif ($kelas == "12") {
        echo "Ini Kelas 12 RPL";
    }else{
        echo "Jurusan Tidak Tersedia";
    }
}elseif ($jurusan == "TKRO") {
    if ($kelas == "10") {
        echo "Ini Kelas 10 TKRO";
    }elseif ($kelas == "11") {
        echo "Ini Kelas 11 TKRO";
    }elseif ($kelas == "12") {
        echo "Ini Kelas 12 TKRO";
    }else{
        echo "Jurusan Tidak Tersedia";
    }
}elseif ($jurusan == "TBSM") {
    if ($kelas == "10") {
        echo "Ini Kelas 10 TBSM";
    }elseif ($kelas == "11") {
        echo "Ini Kelas 11 TBSM";
    }elseif ($kelas == "12") {
        echo "Ini Kelas 12 TBSM";
    }else{
        echo "Jurusan Tidak Tersedia";
    }
}else{
    echo "Jurusan Tidak Ada";
}

?>