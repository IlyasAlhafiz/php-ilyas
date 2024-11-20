<?php
class ppdb {

    public function data_diri($jurusan, $nama, $jk, $tl, $th, $telp, $email) {
        echo "Jurusan : $jurusan <br>";
        echo "Nama Lengkap : $nama <br>";
        echo "Jenis Kelamin : $jk <br>";
        echo "Tempat Lahir : $tl <br>";
        echo "Tanggal Lahir : $th <br>";
        echo "Nomor Hp Siswa Yang Bisa Di Hubungi : $telp <br>";
        echo "Email : $email <br>";
    }

    public function Alamat($prov, $kota, $kec, $desa, $almt, $kode) {
        echo "Provinsi : $prov <br>";
        echo "Kabupaten/kota : $kota <br>";
        echo "Kecamatan : $kec <br>";
        echo "Desa/Kelurahan : $desa <br>";
        echo "Alamat : $almt <br>";
        echo "Kode Pos : $kode <br>";
    }

    public function Data($asal, $as) {
        echo "Nama Asal Sekolah : $asal <br>";
        echo "Alamat Sekolah : $as <br>";
    }

    public function Data_Ortu($nl, $p, $nomer, $alamatlengkap) {
        echo "Nama Lengkap Ayah/Ibu/Wali : $nl <br>";
        echo "Pekerjaan Ayah/Ibu/Wali : $p <br>";
        echo "Nomer Hp Yang Bisa Dihubungi : $nomer <br>";
        echo "Alamat Lengkap : $alamatlengkap <br>";
    }
}

// Object
$cetak = new ppdb();

echo "<h2>Data Diri Calon Pendaftar (Form yang bertanda * wajib di isi)</h2>";
$cetak->data_diri(
    "RPL", "Yas", "Laki-Laki", 
    "Kebumen", "21-07-2008", 
    "0895600067676", "ilyasalhafiz21@gmail.com"
);

echo "<br><h2>Alamat</h2>";
$cetak->Alamat(
    "Jawa Tengah", "Kebumen", "Kebumen Barat", 
    "Desa Sumberadi", "Jl. Keben No. 10", "54321"
);

echo "<br><h2>Data Asal Sekolah</h2>";
$cetak->Data(
    "SMPN 1 Kebumen", 
    "Jl. Pemuda No. 17, Kebumen"
);

echo "<br><h2>Data Orang Tua/Wali</h2>";
$cetak->Data_Ortu(
    "Budi Santoso", "Wiraswasta", 
    "081234567890", "Jl. Mawar No. 5, Kebumen"
);
?>
