<?php
if (isset($_POST['simpan'])) {
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit'];
    $tanggal = $_POST['tgl'];
    $jabatan = $_POST['jabatan'];
    $lama = $_POST['lama'];
    $status = $_POST['status'];
    $bpjs = isset($_POST['bpjs']) ? $_POST['bpjs'] : 0;
    $pinjaman = isset($_POST['pinjaman']) ? $_POST['pinjaman'] : 0;
    $tabungan = isset($_POST['tabungan']) ? $_POST['tabungan'] : 0;
    $lainnya = isset($_POST['lainnya']) ? $_POST['lainnya'] : 0;

    if ($jabatan == 'Kepala Sekolah') {
        $gaji = 10000000;
    } elseif ($jabatan == 'Wakasek') {
        $gaji = 7500000;
    } elseif ($jabatan == 'Guru') {
        $gaji = 5000000;
    } elseif ($jabatan == 'OB') {
        $gaji = 2500000;
    } else {
        $gaji = 0;
    }

    if ($lama >= 5) {
        $tunjangan = 1000000;
    } else {
        $tunjangan = 0;
    }

    if ($status == 'Tetap') {
        $bonus = 500000;
    } else {
        $bonus = 0;
    }

    $gaji_kotor = $gaji + $tunjangan + $bonus;
    $potongan = $bpjs + $pinjaman + $tabungan + $lainnya;
    $gaji_bersih = $gaji_kotor - $potongan;

    $bpjs = number_format($bpjs, 0, ',', '.');
    $pinjaman = number_format($pinjaman, 0, ',', '.');
    $tabungan = number_format($tabungan, 0, ',', '.');
    $lainnya = number_format($lainnya, 0, ',', '.');
    $gaji = number_format($gaji, 0, ',', '.');
    $tunjangan = number_format($tunjangan, 0, ',', '.');
    $gaji_kotor = number_format($gaji_kotor, 0, ',', '.');
    $gaji_bersih = number_format($gaji_bersih, 0, ',', '.');
    $potongan = number_format($potongan, 0, ',', '.');
    $bonus = number_format($bonus, 0, ',', '.');
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport"   content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Struk Gaji</title>
  </head>
  <body>
    <center>
        <h3>Struk Gaji</h3>
        <div class="card" style="width:30%;">
          <h6 class="card-header"><?php echo "$nama"; ?></h6>
          <div class="card-body">
            <table>
                <tr class="text-primary">
                    <td>No</td>
                    <td>:</td>
                    <td><?php echo "$no";?></td>
                </tr>
                <tr class="text-primary">
                    <td>Nama</td>
                    <td>:</td>
                    <td><?php echo "$nama";?></td>
                </tr>
                <tr class="text-primary">
                    <td>Unit Pendidikan</td>
                    <td>:</td>
                    <td><?php echo "$unit";?></td>
                </tr>
                <tr class="text-primary">
                    <td>Tanggal Gaji</td>
                    <td>:</td>
                    <td><?php echo "$tanggal";?></td>
                </tr>
            </table><br>

            <h4 class="text-primary">Gaji</h4>
            <table>
                <tr class="text-primary">
                    <td>Jabatan</td>
                    <td>:</td>
                    <td><?php echo "$jabatan";?></td>
                </tr>
                <tr class="text-primary">
                    <td>Gaji</td>
                    <td>:</td>
                    <td><?php echo "$gaji";?></td>
                </tr>
                <tr class="text-primary">
                    <td>Lama Kerja</td>
                    <td>:</td>
                    <td><?php echo "$lama Tahun";?></td>
                </tr>
                <tr class="text-primary">
                    <td>Tunjangan Lama Kerja</td>
                    <td>:</td>
                    <td><?php echo "$tunjangan";?></td>
                </tr>
                <tr class="text-primary">
                    <td>Status kerja</td>
                    <td>:</td>
                    <td><?php echo "$status";?></td>
                </tr>
                <tr class="text-primary">
                    <td>Bonus</td>
                    <td>:</td>
                    <td><?php echo "$bonus";?></td>
                </tr>
                <tr class="text-primary">
                    <td><b>Gaji Kotor</b></td>
                    <td><b>:</b></td>
                    <td><b><?php echo "$gaji_kotor";?></b></td>
                </tr>
            </table><br>

            <h4 class="text-primary">Potongan</h4>
            <table>
                <tr class="text-primary">
                    <td>BPJS</td>
                    <td>:</td>
                    <td><?php echo "$bpjs";?></td>
                </tr>
                <tr class="text-primary">
                    <td>Pinjaman</td>
                    <td>:</td>
                    <td><?php echo "$pinjaman";?></td>
                </tr>
                <tr class="text-primary">
                    <td>Tabungan</td>
                    <td>:</td>
                    <td><?php echo "$tabungan";?></td>
                </tr>
                <tr class="text-primary">
                    <td>Lainnya</td>
                    <td>:</td>
                    <td><?php echo "$lainnya";?></td>
                </tr>
                <tr class="text-primary">
                    <td><b>Total Potongan</b></td>
                    <td><b>:</b></td>
                    <td><b><?php echo "$potongan";?></b></td>
                </tr>
            </table><br>

            <h4 class="text-primary">Total</h4>
            <h3 class="text-primary"><b><?php echo "Gaji Bersih: Rp $gaji_bersih"; ?></b></h3>
          </div>
        </div>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
