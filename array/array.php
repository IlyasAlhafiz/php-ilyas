<?php

// // membuat array kosong
// $buah = array();
// $hobi = [];

// // membuat array sekaligus mengisinya
// $minuman = array("Kopi", "Teh", "Jus Jeruk");
// $makanan = ["Nasi Goreng", "Soto", "Bubur"];

// // membuat array
// $barang = ["Buku Tulis", "Penghapus", "Spidol", "Papan Tulis"];

// // menampilkan isi array dengan perulangan for
// for($i=2; $i <b count($barang); $i++){
//     echo $barang[$i]."<br>";
// }

// $keluarga = array(
//     array("Ayah", 45),
//     array("Ibu", 40),
//     array("Anak", 18)
// );
// echo $keluarga[0][1];

// $siswa = ["Dudi","Hendri","Kiki","Regita","Eva"];

// echo $siswa[0];
// echo $siswa[1];
// echo $siswa[2];
// echo $siswa[3];
// echo $siswa[4];

$nama = ["Abel","Kiki","Regita","Allia","Fazri","Sidik","Nabeel","Ardhika","Ilyas","Fauzan"];
$jk = ["Laki-Laki","Perempuan"];
$hobi = ["Membaca","Menari","Lari","Bersepeda","Memancing","Main Game"];

echo "<b><u>Data Siswa</u></b> <br>";
echo "- $nama[0] - $jk[0] - $hobi[0] <br>";
echo "- $nama[1] - $jk[0] - $hobi[3] <br>";
echo "- $nama[2] - $jk[1] - $hobi[0] <br>";
echo "- $nama[3] - $jk[1] - $hobi[1] <br>";
echo "- $nama[4] - $jk[0] - $hobi[4] <br>";
echo "- $nama[5] - $jk[0] - $hobi[5] <br>";
echo "- $nama[6] - $jk[0] - $hobi[5] <br>";
echo "- $nama[7] - $jk[0] - $hobi[4] <br>";
echo "- $nama[8] - $jk[0] - $hobi[3] <br>";
echo "-  $nama[9] - $jk[0] - $hobi[5] <br><br> `";

foreach ($nama as $data){
     echo "$data <br>";
}