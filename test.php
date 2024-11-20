<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Nilai</title>
</head>
<body>
    <h2>Nilai Ujian Nasional</h2>

    <form action="proses_nilai.php" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama"><br><br>

        <label for="kelas">Kelas:</label>
        <input type="text" id="kelas" name="kelas"><br><br>

        <label for="jurusan">Jurusan:</label>
        <input type="text" id="jurusan" name="jurusan"><br><br>

        <h3>Nilai Ujian</h3>
        <label for="nilai_bindo">Bahasa Indonesia:</label>
        <input type="number" id="nilai_bindo" name="nilai_bindo" min="0" max="100" value="80"><br><br>

        <label for="nilai_bing">Bahasa Inggris:</label>
        <input type="number" id="nilai_bing" name="nilai_bing" min="0" max="100" value="80"><br><br>

        <label for="nilai_mtk">Matematika:</label>
        <input type="number" id="nilai_mtk" name="nilai_mtk" min="0" max="100" value="90"><br><br>

        <label for="nilai_pkwu">PKWU:</label>
        <input type="number" id="nilai_pkwu" name="nilai_pkwu" min="0" max="100" value="70"><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $nilai_bindo = $_POST['nilai_bindo'];
    $nilai_bing = $_POST['nilai_bing'];
    $nilai_mtk = $_POST['nilai_mtk'];
    $nilai_pkwu = $_POST['nilai_pkwu'];

    $rata_rata = ($nilai_bindo + $nilai_bing + $nilai_mtk + $nilai_pkwu) / 4;

    echo "Nama: $nama<br>";
    echo "Kelas: $kelas<br>";
    echo "Jurusan: $jurusan<br>";
    echo "Rata-rata nilai: $rata_rata<br>";
    
    if ($rata_rata >= 75) {
        echo "Status: Lulus";
    } else {
        echo "Status: Tidak Lulus";
    }
}
?>