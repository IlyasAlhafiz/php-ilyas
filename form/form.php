<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <table>
        <form action="" method="post">
            <h2>Biodata Siswa</h2>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="nama_lengkap" value=""></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="text" name="kelas" value=""></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="proses" value="Simpan"></td>
        </tr>
    </table>
    </form>
    </center>

<?php

if (isset($_POST['proses'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $kelas = $_POST['kelas'];

    echo "Nama Lengkap : $nama_lengkap<br>";
    echo "Kelas : $kelas";
}

?>

</body>
</html>