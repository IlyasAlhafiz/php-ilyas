<?php

class gaji{

    public $gaji;
    public $pendidikan;
    public $potongan;

    public function jabatan($jabatan,$nama){

        if ($jabatan == "Direktur") {
            $this->gaji = 10000000;
        }elseif ($jabatan == "Manager") {
            $this->gaji = 7500000;
        }elseif ($jabatan == "Karyawan") {
            $this->gaji = 5000000;
        }elseif ($jabatan == "ob") {
            $this->gaji = 2500000;
        }else{
            $this->gaji = 0;
        }

        echo "<h3>Gaji Pokok</h3>";
        echo "Nama Karyawan : $nama<br>";
        echo "Jabatan : $jabatan<br>";
        echo "Gaji Pokok : $this->gaji<br><hr>";
    } 

    public function tunjangan($pendidikan){

        if ($pendidikan == "s1") {
            $this->tunjangan = 1000000;
        }elseif ($pendidikan == "sma") {
            $this->tunjangan = 750000;
        }elseif ($pendidikan == "smp") {
            $this->tunjangan = 500000;
        }elseif ($pendidikan == "sd") {
            $this->tunjangan = 250000;
        }else{
            $this->tunjangan = 0;
        }

        echo "<h3>Tunjangan</h3>";
        echo "Pendidikan : $pendidikan<br>";
        echo "Tunjangan Pendidikan : $this->tunjangan<br><hr>";
    }

    public function potongan($tabungan,$pinjaman){

        echo "<h3>Potongan</h3>";
        echo "Tabungan : $tabungan<br>";
        echo "Pinjaman : $pinjaman<br>";
        $this->potongan = $tabungan + $pinjaman;
        echo "Total Potongan : $this->potongan<br><hr>";
    }

    public function gaji_bersih(){

        echo "<h3>Total Gaji Bersih</h3>";
        $gaji_bersih = $this->gaji + $this->tunjangan - $this->potongan;
        echo "Total Gaji Bersih : $gaji_bersih<hr>"; 
    }
}

$tampil = new gaji();
echo "<h1 align=center>Penggajihan Keryawan</h1>";
$tampil->jabatan("Manager","Ilyas");
$tampil->tunjangan("s1");
$tampil->potongan(2000000,500000);
$tampil->gaji_bersih();
?>