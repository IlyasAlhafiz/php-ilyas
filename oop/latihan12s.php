<?php
class Pendaftaran {
    private $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function ambil($input) {
        return $this->data[$input];
    }
}

$data1 = new Pendaftaran($_POST);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Output Data Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">Data Pendaftaran</h2>

    <?php if ($data1): ?>
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">Data Diri</div>
            <div class="card-body">
                <div class="data-item">Jurusan: <?php echo $data1->ambil('jurusan'); ?></div>
                <div class="data-item">Nama Lengkap: <?php echo $data1->ambil('nama'); ?></div>
                <div class="data-item">Jenis Kelamin: <?php echo $data1->ambil('jk'); ?></div>
                <div class="data-item">Tempat Lahir: <?php echo $data1->ambil('tl'); ?></div>
                <div class="data-item">Tahun Lahir: <?php echo $data1->ambil('th'); ?></div>
                <div class="data-item">No. Telepon: <?php echo $data1->ambil('telp'); ?></div>
                <div class="data-item">Email: <?php echo $data1->ambil('email'); ?></div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-primary text-white">Alamat</div>
            <div class="card-body">
                <div class="data-item">Provinsi: <?php echo $data1->ambil('provinsi'); ?></div>
                <div class="data-item">Kota: <?php echo $data1->ambil('kota'); ?></div>
                <div class="data-item">Kecamatan: <?php echo $data1->ambil('kecamatan'); ?></div>
                <div class="data-item">Desa: <?php echo $data1->ambil('desa'); ?></div>
                <div class="data-item">Alamat: <?php echo $data1->ambil('almt'); ?></div>
                <div class="data-item">Kode Pos: <?php echo $data1->ambil('kode'); ?></div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-primary text-white">Data Asal Sekolah</div>
            <div class="card-body">
                <div class="data-item">Asal Sekolah: <?php echo $data1->ambil('asal'); ?></div>
                <div class="data-item">Alamat Sekolah: <?php echo $data1->ambil('as'); ?></div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-primary text-white">Data Orang Tua/Wali</div>
            <div class="card-body">
                <div class="data-item">Hubungan: <?php echo $data1->ambil('hubungan'); ?></div>
                <div class="data-item">Nama Orang Tua/Wali: <?php echo $data1->ambil('nl'); ?></div>
                <div class="data-item">Pekerjaan: <?php echo $data1->ambil('p'); ?></div>
                <div class="data-item">No. HP Orang Tua/Wali: <?php echo $data1->ambil('nomer'); ?></div>
                <div class="data-item">Alamat Lengkap: <?php echo $data1->ambil('alamat_lengkap'); ?></div>
            </div>
        </div>
    <?php else: ?>
        <div class="alert alert-warning text-center">Tidak ada data pendaftaran yang disimpan.</div>
    <?php endif; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
