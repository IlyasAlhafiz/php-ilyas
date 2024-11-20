<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapot Siswa</title>
</head>
<body>
    <center>
        <h2>Rapot Siswa</h2>
        <form action="latihan11s.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas" required></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>
                        <select name="jurusan" required>
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                            <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                            <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor</option>
                        </select>
                    </td>
                </tr>

                <!-- Nilai Matematika -->
                <tr><td colspan="3"><h3>Nilai Matematika</h3></td></tr>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="harian1" required></td>
                </tr>
                <tr>
                    <td>Tugas Harian</td>
                    <td>:</td>
                    <td><input type="number" name="tugas1" required></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="number" name="uts1" required></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="number" name="uas1" required></td>
                </tr>

                <!-- Nilai Indonesia -->
                <tr><td colspan="3"><h3>Nilai Indonesia</h3></td></tr>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="harian2" required></td>
                </tr>
                <tr>
                    <td>Tugas Harian</td>
                    <td>:</td>
                    <td><input type="number" name="tugas2" required></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="number" name="uts2" required></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="number" name="uas2" required></td>
                </tr>

                <!-- Nilai Inggris -->
                <tr><td colspan="3"><h3>Nilai Inggris</h3></td></tr>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="harian3" required></td>
                </tr>
                <tr>
                    <td>Tugas Harian</td>
                    <td>:</td>
                    <td><input type="number" name="tugas3" required></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="number" name="uts3" required></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="number" name="uas3" required></td>
                </tr>

                <!-- Nilai Produktif -->
                <tr><td colspan="3"><h3>Nilai Produktif</h3></td></tr>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="harian4" required></td>
                </tr>
                <tr>
                    <td>Tugas Harian</td>
                    <td>:</td>
                    <td><input type="number" name="tugas4" required></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="number" name="uts4" required></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="number" name="uas4" required></td>
                </tr>
                
                <tr>
                    <td colspan="3" align="center"><input type="submit" name="hitung" value="HITUNG"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
