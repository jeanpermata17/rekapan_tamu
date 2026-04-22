<?php 
 include 'koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data tamu</title>
</head>
<body>
    <h1>Data tamu perpisahan kls XII</h1>
    <a href="Tambah.php">+ Tambah data</a>

    <table border="1" cellpadding="8">
    <tr>
        <th>NO</th>
        <th>nama</th>
        <th>kelompok</th>
        <th>waktu_hadir</th>
        <th>aksi</th>
    </tr>

    <?php
        $data = mysqli_query($conn, "select * from rekapan_tamu");
        while($item = mysqli_fetch_array($data)) {
    ?>
        <tr>
        <td><?= $item['id'];?></td>
        <td><?= $item['nama'];?></td>
        <td><?= $item['kelompok'];?></td>
        <td><?= $item['waktu_hadir'];?></td>
        <td>
            <a href="edit.php?id=<?= $item['id'];?>">edit</a>
            <a href="hapus.php?id=<?= $item['id'];?>">hapus</a>
        </td>
    </tr>
    
    <?php

        }
    ?>
    </table>
</body>
</html>