<?php
if (isset($_POST['hitung'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    // Matematika
    $harian1 = $_POST['harian1'];
    $tugas1 = $_POST['tugas1'];
    $uts1 = $_POST['uts1'];
    $uas1 = $_POST['uas1'];
    $rataMtk = ($harian1 + $tugas1 + $uts1 + $uas1) / 4;

    // Indonesia
    $harian2 = $_POST['harian2'];
    $tugas2 = $_POST['tugas2'];
    $uts2 = $_POST['uts2'];
    $uas2 = $_POST['uas2'];
    $rataIndo = ($harian2 + $tugas2 + $uts2 + $uas2) / 4;

    // Inggris
    $harian3 = $_POST['harian3'];
    $tugas3 = $_POST['tugas3'];
    $uts3 = $_POST['uts3'];
    $uas3 = $_POST['uas3'];
    $rataInggris = ($harian3 + $tugas3 + $uts3 + $uas3) / 4;

    // Produktif
    $harian4 = $_POST['harian4'];
    $tugas4 = $_POST['tugas4'];
    $uts4 = $_POST['uts4'];
    $uas4 = $_POST['uas4'];
    $rataProduktif = ($harian4 + $tugas4 + $uts4 + $uas4) / 4;

    class Rapot {
        public function rapot_siswa($nilai) {
            return $nilai >= 75 ? "Tuntas" : "Tidak Tuntas";
        }
    }

    $cetak = new Rapot;
    ?>

    <center>
        <h2>Nama: <?php echo $nama; ?></h2>
        <h2>Kelas: <?php echo $kelas; ?></h2>
        <h2>Jurusan: <?php echo $jurusan; ?></h2>

        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>Mapel</th>
                <th>Harian</th>
                <th>Tugas</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Rata-Rata</th>
                <th>Grade</th>
            </tr>
            <tr>
                <td>Matematika</td>
                <td><?php echo $harian1; ?></td>
                <td><?php echo $tugas1; ?></td>
                <td><?php echo $uts1; ?></td>
                <td><?php echo $uas1; ?></td>
                <td><?php echo $rataMtk; ?></td>
                <td><?php echo $cetak->rapot_siswa($rataMtk); ?></td>
            </tr>
            <tr>
                <td>Indonesia</td>
                <td><?php echo $harian2; ?></td>
                <td><?php echo $tugas2; ?></td>
                <td><?php echo $uts2; ?></td>
                <td><?php echo $uas2; ?></td>
                <td><?php echo $rataIndo; ?></td>
                <td><?php echo $cetak->rapot_siswa($rataIndo); ?></td>
            </tr>
            <tr>
                <td>Inggris</td>
                <td><?php echo $harian3; ?></td>
                <td><?php echo $tugas3; ?></td>
                <td><?php echo $uts3; ?></td>
                <td><?php echo $uas3; ?></td>
                <td><?php echo $rataInggris; ?></td>
                <td><?php echo $cetak->rapot_siswa($rataInggris); ?></td>
            </tr>
            <tr>
                <td>Produktif</td>
                <td><?php echo $harian4; ?></td>
                <td><?php echo $tugas4; ?></td>
                <td><?php echo $uts4; ?></td>
                <td><?php echo $uas4; ?></td>
                <td><?php echo $rataProduktif; ?></td>
                <td><?php echo $cetak->rapot_siswa($rataProduktif); ?></td>
            </tr>
        </table>
    </center>

    <?php
}
?>
