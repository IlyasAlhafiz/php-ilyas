<?php

$dataJSON = '[

{
"nama" : "Nurul Huda",
"alamat" : "Bandung"
},
{
"nama" : "Renza Ilhami Risqi",
"alamat" : "Jakarta"
}

]';

$list = json_decode($dataJSON);

foreach($list as $mahasiswa){
    echo "Nama : {$mahasiswa->nama} <br>";
    echo "Alamat : {$mahasiswa->alamat} <br>";
    echo "<hr>";
}

?>