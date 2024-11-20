<?php
$jabatan = "Programmer Senior";
$nilai_performa = 85; 
$kehadiran = true; 

if ($jabatan == "Programmer Junior") {
    $gaji_dasar = 6000000;
} elseif ($jabatan == "Programmer Senior") {
    $gaji_dasar = 10000000;
} elseif ($jabatan == "Project Manager") {
    $gaji_dasar = 15000000;
} else {
    echo "Jabatan tidak dikenal.";
    exit;
}

$tunjangan_kehadiran = $kehadiran ? 200000 : 0;

if ($nilai_performa > 90) {
    $bonus_kinerja = $gaji_dasar * 0.10;
} elseif ($nilai_performa >= 75 && $nilai_performa <= 90) {
    $bonus_kinerja = $gaji_dasar * 0.05;
} else {
    $bonus_kinerja = 0;
}

$total_sebelum_pajak = $gaji_dasar + $tunjangan_kehadiran + $bonus_kinerja;
$pajak_penghasilan = $total_sebelum_pajak * 0.05;
$total_gaji_bersih = $total_sebelum_pajak - $pajak_penghasilan;

echo "Jabatan: " . $jabatan . "<br>";
echo "Gaji Dasar: Rp" . $gaji_dasar . "<br>";
echo "Tunjangan Kehadiran: Rp" . $tunjangan_kehadiran . "<br>";
echo "Bonus Kinerja: Rp" . $bonus_kinerja . "<br>";
echo "Total Gaji Sebelum Pajak: Rp" . $total_sebelum_pajak . "<br>";
echo "Pajak Penghasilan (5%): Rp" . $pajak_penghasilan . "<br>";
echo "Total Gaji Bersih: Rp" . $total_gaji_bersih . "<br>";
?>