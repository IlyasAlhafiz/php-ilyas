<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <img src="logosmk.jpg" alt="" width="10%">
        <h2>Form Biodata Diri</h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value=""></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><input type="text" name="tempat_lahir" value=""></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal" value=""></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" id="jenis1" value="Laki-Laki">
                        <label for="jenis1">Laki-laki</label>
                        <input type="radio" name="jk" id="jenis2" value="Perempuan">
                        <label for="jenis2">Perempuan</label>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" id=""></textarea></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <select name="agama" id="">
                            <option value="islam">islam</option>
                            <option value="kristen">kristen</option>
                            <option value="katolik">katolik</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>:</td>
                    <td>
                        <select name="pd" id="">
                            <option value="sd">SD</option>
                            <option value="smp">SMP</option>
                            <option value="sma">SMA</option>
                            <option value="sma">SMK</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        <select name="status" id="">
                            <option value="sudah menikah">Sudah Menikah</option>
                            <option value="belum menikah">Belum Menikah</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td>
                        <input type="checkbox" name="hobi" id="hb1" value="Membaca">
                        <label for="hb1">Membaca</label>
                        <input type="checkbox" name="hobi" id="hb2" value="Menulis">
                        <label for="hb2">Menulis</label>
                        <input type="checkbox" name="hobi" id="hb3" value="Ngepush">
                        <label for="hb3">Ngepush</label>
                    </td>
                </tr>
                <tr>
                    <td>Cita-Cita</td>
                    <td>:</td>
                    <td>
                        <select name="cita" id="">
                            <option value="programer">Programer</option>
                            <option value="masinis">Masinis</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Kata-Kata Bijak</td>
                    <td>:</td>
                    <td><textarea name="kata" id=""></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value="KIRIM"></td>
                </tr>
            </table><br><br>
        </form>

    <?php

    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $TempatLahir = $_POST['tempat_lahir'];
        $Tanggal = $_POST['tanggal'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $agama = $_POST['agama'];
        $pendidikan = $_POST['pd'];
        $status = $_POST['status'];
        $hobi = $_POST['hobi'];
        $cita = $_POST['cita'];
        $kata = $_POST['kata'];

        if ($jk == null) {
            $jk = "kosong";
        }

        ?>

        <h3>Data Diri Anda</h3>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo "$nama"; ?></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><?php echo "$TempatLahir"; ?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><?php echo "$Tanggal"; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?php echo "$jk"; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo "$alamat"; ?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><?php echo "$agama"; ?></td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir</td>
                <td>:</td>
                <td><?php echo "$pendidikan"; ?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td><?php echo "$status"; ?></td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td><?php echo "$hobi"; ?></td>
            </tr>
            <tr>
                <td>Cita-Cita</td>
                <td>:</td>
                <td><?php echo "$cita"; ?></td>
            </tr>
            <tr>
                <td>Kata-Kata Bijak</td>
                <td>:</td>
                <td><?php echo "$kata"; ?></td>
            </tr>
        </table>

        <?php
    }

    ?>

    </center>
</body>
</html>