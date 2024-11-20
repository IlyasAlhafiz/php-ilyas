<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoran</title>
</head>
<body>

<?php
$nama = "Ilyas";
$jk = "Laki-laki";
$jenis = "makanan";
$menu = "nasigoreng";
$jumlah = 10 ;

if ($jenis == "makanan") {
    if ($menu == "nasigoreng") {
        $harga = 10000;
    } elseif ($menu == "miegoreng") {
        $harga = 15000;
    } elseif ($menu == "ayamgoreng") {
        $harga = 20000;
    } else {
        echo "Tidak ada dalam menu";
        $harga = 0;
    }
} elseif ($jenis == "minuman") {
    if ($menu == "airmineral") {
        $harga = 5000;
    } elseif ($menu == "freshtea") {
        $harga = 7000;
    } elseif ($menu == "jus") {
        $harga = 12000;
    } else {
        echo "Tidak ada dalam menu";
        $harga = 0;
    }
} else {
    echo "Jenis Tidak Valid";
    $harga = 0; 
}

$total = $harga * $jumlah; 
?>

<p>~~~~~~RESTORAN SELALU RAME~~~~</p>

<p>---------------------------------------------------------</p>

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
</table>

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