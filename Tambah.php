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
    nama:<input type="text" name="nama" required><br><br>

    Kelompok:
       <select name="kelompok">
        <option value="">-- pilihan kelompok--</option>
        <option value="orang tua">orang tua</option>
        <option value="guru">guru</option>
        <option value="Tamu khusus">Tamu khusus</option>
        <option value="siswa/i">siswa/i</option>
       </select>
       <br><br>

    waktu_hadir:<input type="time" name="waktu_hadir" required><br><br>

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