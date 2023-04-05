<?php
require 'koneksi.php';

$inventaris = query("SELECT * FROM inventaris");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Inventaris</title>
</head>
<body>
    <h1 align="center">Inventaris</h1>
    <table border="1" cellpadding="10" cellspasing="0" align="center">
        <tr>
            <th>Id</th>
            <th>gambar</th>
            <th>Nama Barang</th>
            <th>Unit</th>
            <th>Harga</th>
        </tr>
        <?php $i = 1;?>
        <?php foreach ($inventaris as $its) : ?>
            <tr>
                <td><?=$i;?></td>
                <td><img src="img/<?= $its['gambar'];?>" alt="" width="50"></td>
                <td><?=$its["Nama Barang"];?></td>
                <td><?=$its["Unit"];?></td>
                <td><?=$its["Harga"];?></td>
            </tr>
            <?php $i++;?>
            <?php endforeach;?>
    </table>
</body>
</html>