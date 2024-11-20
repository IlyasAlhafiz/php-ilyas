<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB Form</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card mb-4">
        <div class="card-header">
            Informasi Pendaftaran
        </div>
        <div class="card-body">
            <p>Apabila Anda telah melakukan pendaftaran, silahkan klik tombol "Cek Status Pendaftaran".</p>
            <a href="https://example.com/status-pendaftaran" class="btn btn-primary me-2">Cek Status Pendaftaran</a>
            <a href="/php-ilyas/ppdb/home.html" class="btn btn-warning text-white ml-2">Kembali ke Home</a>
            <a href="/php-ilyas/ppdb/Smk.html" class="btn btn-danger ml-2">Situs Resmi SMK ASSALAAM</a>
        </div>
    </div>
    <h2 class="mb-4">Formulir Pendaftaran</h2>

    <form action="latihan12s.php" method="post">
        <div class="card mb-4">
            <div class="card-header">Data Diri Calon Pendaftar</div>
            <div class="card-body">
                <div class="form-row align-items-center mb-3">
                    <label class="col-sm-3 col-form-label">Jurusan *</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="jurusan" required>
                            <option selected>Pilih Jurusan</option>
                            <option value="TKRO(MOBIL)">TKRO (Mobil)</option>
                            <option value="TBSM(MOTOR)">TBSM (Motor)</option>
                            <option value="RPL(KOMPUTER)">RPL (Komputer)</option>
                        </select>
                    </div>
                </div>
                <div class="form-row align-items-center mb-3">
                    <label class="col-sm-3 col-form-label">Nama Lengkap *</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan nama lengkap" required>
                    </div>
                </div>
                <div class="form-row align-items-center mb-3">
                    <label class="col-sm-3 col-form-label">Jenis Kelamin *</label>
                        <div class="col" align="left">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" id="flexRadioDefault1" checked value="Laki-Laki">
                                <label class="form-check-label" for="flexRadioDefault1">
                                        Laki-Laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" id="flexRadioDefault2" value="Perempuan">
                                <label class="form-check-label" for="flexRadioDefault2">
                                        Perempuan
                                </label>
                            </div>
                        </div>
                    </div>    
                <div class="form-row align-items-center mb-3">
                    <label class="col-sm-3 col-form-label">Tempat Lahir *</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="tl" placeholder="Masukkan tempat lahir" required>
                    </div>
                </div>
                <div class="form-row align-items-center mb-3">
                    <label class="col-sm-3 col-form-label">Tanggal Lahir *</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" name="th" required>
                    </div>
                </div>
                <div class="form-row align-items-center mb-3">
                    <label class="col-sm-3 col-form-label">Nomor HP *</label>
                    <div class="col-sm-9">
                        <input type="tel" class="form-control" name="telp" placeholder="Masukkan nomor HP" required>
                    </div>
                </div>
                <div class="form-row align-items-center mb-3">
                    <label class="col-sm-3 col-form-label">Email *</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" placeholder="Masukkan alamat email" required>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">Alamat</div>
            <div class="card-body">
                <div class="form-row align-items-center mb-3">
                    <label class="col-sm-3 col-form-label">Provinsi *</label>
                    <div class="col-sm-9">
                        <select name="provinsi" class="form-control" required>
                            <option value="-">Pilih Provinsi</option>
                            <option value="Aceh">Aceh</option>
                            <option value="Sumatera Utara">Sumatera Utara</option>
                            <option value="Sumatera Barat">Sumatera Barat</option>
                            <option value="Riau">Riau</option>
                            <option value="Kepulauan Riau">Kepulauan Riau</option>
                            <option value="Jawa Barat">Jawa Barat</option>
                            <option value="Jawa Tengah">Jawa Tengah</option>
                            <option value="Jawa Timur">Jawa Timur</option>
                            <option value="Bali">Bali</option>
                            <option value="Papua">Papua</option>
                        </select>
                    </div>
                </div>

                <div class="form-row align-items-center mb-3">
                    <label class="col-sm-3 col-form-label">Kabupaten/Kota *</label>
                    <div class="col-sm-9">
                        <select name="kota" class="form-control" required>
                            <option value="-">Pilih Kota</option>
                            <option value="Bandung">Bandung</option>
                            <option value="Bandung Barat">Bandung Barat</option>
                            <option value="Bekasi">Bekasi</option>
                            <option value="Bogor">Bogor</option>
                            <option value="Ciamis">Ciamis</option>
                            <option value="Cianjur">Cianjur</option>
                            <option value="Cimahi">Cimahi</option>
                            <option value="Cirebon">Cirebon</option>
                            <option value="Garut">Garut</option>
                            <option value="Indramayu">Indramayu</option>
                        </select>
                    </div>
                </div>

                <div class="form-row align-items-center mb-3">
                    <label class="col-sm-3 col-form-label">Kecamatan *</label>
                    <div class="col-sm-9">
                        <select name="kecamatan" class="form-control" required>
                            <option value="Andir">Andir</option>
                            <option value="Antapani">Antapani</option>
                            <option value="Arcamanik">Arcamanik</option>
                            <option value="Astanaanyar">Astanaanyar</option>
                            <option value="Babakan Ciparay">Babakan Ciparay</option>
                            <option value="Bandung Kidul">Bandung Kidul</option>
                            <option value="Bandung Kulon">Bandung Kulon</option>
                            <option value="Bandung Wetan">Bandung Wetan</option>
                            <option value="Batununggal">Batununggal</option>
                            <option value="Bojongloa Kaler">Bojongloa Kaler</option>
                        </select>
                    </div>
                </div>

                <div class="form-row align-items-center mb-3">
                    <label class="col-sm-3 col-form-label">Desa *</label>
                    <div class="col-sm-9">
                        <select name="desa" class="form-control" required>
                            <option value="Ciburial">Ciburial</option>
                            <option value="Cileunyi">Cileunyi</option>
                            <option value="Ciparay">Ciparay</option>
                            <option value="Margaluyu">Margaluyu</option>
                            <option value="Mekarsari">Mekarsari</option>
                            <option value="Cangkuang">Cangkuang</option>
                            <option value="Pangalengan">Pangalengan</option>
                            <option value="Rancamanyar">Rancamanyar</option>
                            <option value="Sukamaju">Sukamaju</option>
                            <option value="Sukasari">Sukasari</option>
                        </select>
                    </div>
                </div>
                <div class="form-row align-items-center mb-3">
                    <label class="col-sm-3 col-form-label">Alamat *</label>
                    <div class="col-sm-9">
                        <textarea type="text" class="form-control" name="almt" placeholder="Masukkan alamat" required></textarea>
                    </div>
                </div>
                <div class="form-row align-items-center mb-3">
                    <label class="col-sm-3 col-form-label">Kode Pos *</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="kode" placeholder="Masukkan kode pos" required>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">Data Asal Sekolah</div>
            <div class="card-body">
                <div class="form-row align-items-center mb-3">
                    <label class="col-sm-3 col-form-label">Nama Asal Sekolah *</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="asal" placeholder="Masukkan nama asal sekolah" required>
                    </div>
                </div>
                <div class="form-row align-items-center mb-3">
                    <label class="col-sm-3 col-form-label">Alamat Sekolah *</label>
                    <div class="col-sm-9">
                        <textarea type="text" class="form-control" name="as" placeholder="Masukkan alamat sekolah" required></textarea>
                    </div>
                </div>
            </div>
        </div>

    <div class="card mb-4">
        <div class="card-header">Data Orang Tua/Wali</div>
        <div class="card-body">
            <div class="form-row align-items-center mb-3">
                <label class="col-sm-3 col-form-label">Nama Lengkap Ayah/Ibu/Wali *</label>
                <div class="col-sm-2">
                    <select name="hubungan" class="form-control" required>
                        <option value="Ayah">Ayah</option>
                        <option value="Ibu">Ibu</option>
                        <option value="Wali">Wali</option>
                    </select>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="nl" placeholder="Masukkan nama lengkap" required>
                </div>
            </div>
            <div class="form-row align-items-center mb-3">
                <label class="col-sm-3 col-form-label">Pekerjaan Ayah/Ibu/Wali *</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="p" placeholder="Masukkan pekerjaan Ayah/Ibu/Wali" required>
                </div>
            </div>
            <div class="form-row align-items-center mb-3">
                <label class="col-sm-3 col-form-label">Nomor HP *</label>
                <div class="col-sm-9">
                    <input type="tel" class="form-control" name="nomer" placeholder="Masukkan nomor HP Ayah/Ibu/Wali" required>
                </div>
            </div>
            <div class="form-row align-items-center mb-3">
                <label class="col-sm-3 col-form-label">Alamat Lengkap *</label>
                <div class="col-sm-9">
                    <textarea class="form-control" name="alamat_lengkap" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>
                </div>
            </div>
            <div class="form-row align-items-center mb-3">
                <div class="col-sm-9 offset-sm-3">
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan & Daftar</button>
                    <button type="reset" class="btn btn-warning ml-2">Reset</button> 
                </div>
            </div>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
