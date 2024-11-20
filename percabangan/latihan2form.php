<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoran</title>
</head>
<body>

<?php
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$jk = isset($_POST['jk']) ? $_POST['jk'] : '';
$jenis = isset($_POST['jenis']) ? $_POST['jenis'] : '';
$menu = isset($_POST['menu']) ? $_POST['menu'] : '';
$jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : 1;

$harga = 0;

if ($jenis == "makanan") {
    $menuOptions = ["nasigoreng" => 10000, "miegoreng" => 15000, "ayamgoreng" => 20000];
} elseif ($jenis == "minuman") {
    $menuOptions = ["airmineral" => 5000, "freshtea" => 7000, "jus" => 12000];
} else {
    $menuOptions = [];
}

if (isset($menuOptions[$menu])) {
    $harga = $menuOptions[$menu];
}

$total = $harga * $jumlah;
?>

<p>~~~~~~RESTORAN SELALU RAME~~~~</p>

<form method="post">
    <label>Nama:</label>
    <input type="text" name="nama" value="<?php echo $nama; ?>" required />

    <label>Jenis Kelamin:</label>
    <select name="jk" required>
        <option value="">Pilih Jenis Kelamin</option>
        <option value="Laki-laki" <?php if ($jk == "Laki-laki") echo 'selected'; ?>>Laki-laki</option>
        <option value="Perempuan" <?php if ($jk == "Perempuan") echo 'selected'; ?>>Perempuan</option>
    </select>

    <label>Jenis:</label>
    <select name="jenis" onchange="this.form.submit()" required>
        <option value="">Pilih Jenis</option>
        <option value="makanan" <?php if ($jenis == "makanan") echo 'selected'; ?>>Makanan</option>
        <option value="minuman" <?php if ($jenis == "minuman") echo 'selected'; ?>>Minuman</option>
    </select>

    <?php if ($jenis): ?>
        <label>Menu:</label>
        <select name="menu" onchange="this.form.submit()" required>
            <option value="">Pilih Menu</option>
            <?php foreach ($menuOptions as $item => $price): ?>
                <option value="<?php echo $item; ?>" <?php if ($menu == $item) echo 'selected'; ?>><?php echo ucfirst($item); ?></option>
            <?php endforeach; ?>
        </select>
    <?php endif; ?>

    <label>Jumlah:</label>
    <input type="number" name="jumlah" value="<?php echo $jumlah; ?>" min="1" required />

    <input type="submit" value="Hitung" />
</form>

<p>---------------------------------------------------------</p>

<?php if ($harga > 0): ?>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $jk; ?></td>
        </tr>
        <tr>
            <td>Jenis</td>
            <td>:</td>
            <td><?php echo $jenis; ?></td>
        </tr>
        <tr>
            <td>Menu</td>
            <td>:</td>
            <td><?php echo $menu; ?></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td>:</td>
            <td><?php echo $jumlah; ?></td>
        </tr>
        <tr>
            <td>Total</td>
            <td>:</td>
            <td><?php echo $total; ?></td>
        </tr>
    </table>
<?php endif; ?>

<p>---------------------------------------------------------</p>

<table>
    <tr>
        <td>Total</td>
        <td>:</td>
        <td><?php echo $total; ?></td>
    </tr>
    <?php
    if ($total >= 50000) {
        $diskon = $total * 0.2;
        $totalb = $total - $diskon;
        ?>
        <tr>
            <td>Diskon</td>
            <td>:</td>
            <td><?php echo $diskon; ?></td>
        </tr>
        <?php
    } else {
        ?>
        <tr>
            <td>Diskon</td>
            <td>:</td>
            <td>Anda Tidak Mendapatkan diskon</td>
        </tr>
        <?php
    }
    ?>
</table>

<p>---------------------------------------------------------</p>

<?php 
if ($total <= 50000) {
    if (isset($total)) { ?>
    <table>
        <tr>
            <td>Total</td>
            <td>:</td>
            <td><?php echo $total; ?></td>
        </tr>
    </table>
<?php }} ?>

<?php if (isset($totalb)) { ?>
    <table>
        <tr>
            <td>Total Setelah Diskon</td>
            <td>:</td>
            <td><?php echo $totalb; ?></td>
        </tr>
    </table>
<?php } ?>

</body>
</html>
