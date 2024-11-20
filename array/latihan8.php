<?php

$dataJSON = '[ 
    {
        "no": "1001",
        "Judul": "Dilan 1991",
        "Genre": "Romance",
        "Penulis": "Pidi Baiq",
        "penerbit": "Airlangga",
        "Tahun": "2014"
    },
    {
        "no": "1002",
        "Judul": "Laskar Pelangi",
        "Genre": "Drama",
        "Penulis": "Andrea Hirata",
        "penerbit": "Bentang Pustaka",
        "Tahun": "2005"
    },
    {
        "no": "1003",
        "Judul": "Bumi Manusia",
        "Genre": "Historical Fiction",
        "Penulis": "Pramoedya Ananta Toer",
        "penerbit": "Hasta Mitra",
        "Tahun": "1980"
    },
    {
        "no": "1004",
        "Judul": "Saman",
        "Genre": "Novel",
        "Penulis": "Ayu Utami",
        "penerbit": "Lentera",
        "Tahun": "1998"
    },
    {
        "no": "1005",
        "Judul": "Perahu Kertas",
        "Genre": "Romance",
        "Penulis": "Dee Lestari",
        "penerbit": "Kepustakaan Populer Gramedia",
        "Tahun": "2012"
    },
    {
        "no": "1006",
        "Judul": "Api Tauhid",
        "Genre": "Spiritual",
        "Penulis": "Habiburrahman El Shirazy",
        "penerbit": "Republika",
        "Tahun": "2002"
    },
    {
        "no": "1007",
        "Judul": "Negeri 5 Menara",
        "Genre": "Inspirational",
        "Penulis": "A. Fuadi",
        "penerbit": "Gramedia Pustaka Utama",
        "Tahun": "2009"
    },
    {
        "no": "1008",
        "Judul": "Cinta di Ujung Sajadah",
        "Genre": "Romance",
        "Penulis": "Tari Ananda",
        "penerbit": "Pustaka Alvabet",
        "Tahun": "2010"
    },
    {
        "no": "1009",
        "Judul": "Cinta dan Logika",
        "Genre": "Romance",
        "Penulis": "Fira Basuki",
        "penerbit": "Gramedia Pustaka Utama",
        "Tahun": "2015"
    },
    {
        "no": "1010",
        "Judul": "Kisah Para Nabi",
        "Genre": "Religious",
        "Penulis": "Ali Muhammad",
        "penerbit": "Al-Marifah",
        "Tahun": "1999"
    },
    {
        "no": "1011",
        "Judul": "Senja di Ujung Jalan",
        "Genre": "Fiction",
        "Penulis": "Sitta Karina",
        "penerbit": "Elex Media Komputindo",
        "Tahun": "2016"
    },
    {
        "no": "1012",
        "Judul": "Bintang di Surga",
        "Genre": "Drama",
        "Penulis": "Ayu Utami",
        "penerbit": "Gramedia Pustaka Utama",
        "Tahun": "2004"
    },
    {
        "no": "1013",
        "Judul": "45 Detik",
        "Genre": "Romance",
        "Penulis": "Rizky Pahlevi",
        "penerbit": "Pustaka Alvabet",
        "Tahun": "2019"
    },
    {
        "no": "1014",
        "Judul": "Rindu",
        "Genre": "Romance",
        "Penulis": "Tere Liye",
        "penerbit": "Gramedia",
        "Tahun": "2017"
    },
    {
        "no": "1015",
        "Judul": "Hujan Bulan Juni",
        "Genre": "Drama",
        "Penulis": "Sapardi Djoko Damono",
        "penerbit": "Gramedia Pustaka Utama",
        "Tahun": "1994"
    },
    {
        "no": "1016",
        "Judul": "Sang Pemimpi",
        "Genre": "Inspirational",
        "Penulis": "Andrea Hirata",
        "penerbit": "Bentang Pustaka",
        "Tahun": "2006"
    },
    {
        "no": "1017",
        "Judul": "Pulang",
        "Genre": "Historical Fiction",
        "Penulis": "Tere Liye",
        "penerbit": "Gramedia",
        "Tahun": "2015"
    },
    {
        "no": "1018",
        "Judul": "Melangkah",
        "Genre": "Motivational",
        "Penulis": "Rhenald Kasali",
        "penerbit": "Gramedia",
        "Tahun": "2011"
    },
    {
        "no": "1019",
        "Judul": "Keluarga Cemara",
        "Genre": "Family",
        "Penulis": "Arswendo Atmowiloto",
        "penerbit": "Kompas",
        "Tahun": "2005"
    },
    {
        "no": "1020",
        "Judul": "Sophies World",
        "Genre": "Philosophical",
        "Penulis": "Jostein Gaarder",
        "penerbit": "Gramedia",
        "Tahun": "1994"
    }
]';

$list = json_decode($dataJSON);

?>
<br><br>
<table border="1" align="center" cellspacing="0" width="75%">
    <tr align="center">
        <td colspan="8" style="height:50px; font-size:50px;"><b>Kumpulan Novel Terbaru</b></td>
    </tr>
    <tr align="center">
        <td><b>No</b></td>
        <td><b>Judul</b></td>
        <td><b>Genre</b></td>
        <td><b>Penulis</b></td>
        <td><b>Penerbit</b></td>
        <td><b>Tahun</b></td>
    </tr>
    <?php foreach($list as $mahasiswa){?>
    <tr>
        <td align="center"><?php echo "{$mahasiswa->no}"; ?></td>
        <td><?php echo "{$mahasiswa->Judul} <br>"; ?></td>
        <td><?php echo "{$mahasiswa->Genre} <br>"; ?></td>
        <td><?php echo "{$mahasiswa->Penulis} <br>"; ?></td>
        <td><?php echo "{$mahasiswa->penerbit}<br>"; ?></td>
        <td><?php echo "{$mahasiswa->Tahun} <br>"; }?></td>
    </tr>
</table>

<?php

// foreach($list as $mahasiswa){
//     echo "no : {$mahasiswa->no} <br>";
//     echo "Judul : {$mahasiswa->Judul} <br>";
//     echo "Genre : {$mahasiswa->Genre} <br>";
//     echo "Penulis : {$mahasiswa->Penulis} <br>";
//     echo "Penerbit : {$mahasiswa->penerbit} <br>";
//     echo "Tahun Rilis : {$mahasiswa->Tahun} <br>";
//     echo "<hr>";
// }

?>
