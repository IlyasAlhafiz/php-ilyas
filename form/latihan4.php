<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Ujian Nasional</title>
</head>
<body>
    <center>
    <h2>Nilai Ujian Nasional</h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>kelas</td>
                    <td>:</td>
                    <!-- <td><input type="text" name="kelas"></td> -->
                    <td>
                        <select name="kelas" id="kelas">
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>
                        <select name="jurusan" id="jurusan">
                            <option value="RPL">RPL</option>
                            <option value="TBSM">TBSM</option>
                            <option value="TKR">TKR</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td><h3>Nilai Ujian</h3></td>
                </tr>
                <tr>
                    <td>Nilai B.Indonesia</td>
                    <td>:</td>
                    <td><input type="number" name="bindo" id="" max=100></td>
                </tr>
                <tr>
                    <td>Nilai B.Inggris</td>
                    <td>:</td>
                    <td><input type="number" name="bing" id="" max=100></td>
                </tr>
                <tr>
                    <td>Nilai Matematika</td>
                    <td>:</td>
                    <td><input type="number" name="mtk" id="" max=100></td>
                </tr>
                <tr>
                    <td>Nilai Produktif</td>
                    <td>:</td>
                    <td><input type="number" name="produk" id="" max=100></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value="Simpan"></td>
                </tr>
            </table>
        </form><br><br>

    <?php

    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
        $indo = $_POST['bindo'];
        $ing = $_POST['bing'];
        $mtk = $_POST['mtk'];
        $produktif = $_POST['produk'];

        $rata_rata = ($indo + $ing + $mtk + $produktif) / 4;

        ?>

        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo "$nama";?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?php echo "$kelas";?></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><?php echo "$jurusan";?></td>
            </tr>
            <tr>
                <td>Nilai B.Indonesia</td>
                <td>:</td>
                <td><?php echo "$indo";?></td>
            </tr>
            <tr>
                <td>Nilai B.Inggris</td>
                <td>:</td>
                <td><?php echo "$ing";?></td>
            </tr>
            <tr>
                <td>Nilai Matematika</td>
                <td>:</td>
                <td><?php echo "$mtk";?></td>
            </tr>
            <tr>
                <td>Nilai Produktif</td>
                <td>:</td>
                <td><?php echo "$produktif";?></td>
            </tr>
            <tr>
                <td>Rata-Rata</td>
                <td>:</td>
                <td><?php echo "$rata_rata";?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>
                    <?php         
                        if ($rata_rata > 75) {
                            echo "Lulus";
                        } else {
                            echo "Tidak Lulus";
                        }
                    ?>
                </td>
            </tr>
        </table>
        
        <?php

    }

    ?>

</center>
</body>
</html>