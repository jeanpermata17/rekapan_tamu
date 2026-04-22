<?php 
include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
</head>
<body>

<h1>Tambah Data Siswa</h1>

<form method="post">
    <label>Nama</label><br>
    <input type="text" name="nama" required><br>

    <label>Kelompok</label><br>
    <input type="text" name="kelompok" required><br>

    <label>Waktu Hadir</label><br>
    <input type="text" name="waktu_hadir" required><br><br>

    <button type="submit" name="simpan">SIMPAN</button><br>
</form>

</body>
</html>

<?php
if(isset($_POST['simpan'])){
    mysqli_query($conn, "INSERT INTO rekapan_tamu (nama,kelompok,waktu_hadir) VALUES (
    '$_POST[nama]',
    '$_POST[kelompok]',
    '$_POST[waktu_hadir]'
    )");

    header("location: index.php");
}
?>