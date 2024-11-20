<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php

$nama = "Dudi Similikiti";
$kelas = "XI RPL 1";
$bIndo = 80;
$bInggris = 70;
$mtk = 80;
$produktif = 90;

$rata = ($bIndo + $bInggris + $mtk + $produktif) / 4;

?>

    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo "$nama"; ?></td>
        </tr>
        <tr>
            <td>kelas</td>
            <td>:</td>
            <td><?php echo "$kelas"; ?></td>
        </tr>
    </table>
    <table>
        <tr>
            <td>Nilai B.Indonesia</td>
            <td>:</td>
            <td><?php echo "$bIndo"; ?></td>
        </tr>
        <tr>
            <td>Nilai B.Inggris</td>
            <td>:</td>
            <td><?php echo "$bInggris"; ?></td>
        </tr>
        <tr>
            <td>Matematika</td>
            <td>:</td>
            <td><?php echo "$mtk"; ?></td>
        </tr>
        <tr>
            <td>Produktif</td>
            <td>:</td>
            <td><?php echo "$produktif"; ?></td>
        </tr>
        <tr>
            <td>Rata-rata</td>
            <td>:</td>
            <td><?php echo "$rata"; ?></td>
        </tr>
    </table>
    <b>- - - - - - - - - - - - - - - - - -</b><br>
</html> 
<?php

if ($rata >= 75) {
    echo "Status : *Anda Lulus*";
}else{
    echo "Status : *Anda Tidak Lulus*";
}

?>