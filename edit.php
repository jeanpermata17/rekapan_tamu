<?php
  include 'koneksi.php';
  $id= $_GET['id'];

  $data = mysqli_query($conn,"SELECT * FROM rekapan_tamu WHERE id='$id'");
  $item = mysqli_fetch_array($data);
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>halowww</h1>
    <form method="post">
        nama:<input type="text" name="nama" value="<?= $item['nama'] ?>"><br><br>
         Kelompok:
       <select name="kelompok">
        <option value="">-- pilihan kelompok--</option>
        <option value="orang tua">orang tua</option>
        <option value="guru">guru</option>
        <option value="Tamu khusus">Tamu khusus</option>
        <option value="siswa/i">siswa/i</option>
       </select>
       <br><br>
        waktu_hadir:<input type="time" name="waktu_hadir" value="<?= $item['waktu_hadir'] ?>"><br><br>

        <button type="submit" name="update">update</button>
    </form>
</body>
</html>
<?php
if(isset($_POST['update'])){
    mysqli_query($conn,"update rekapan_tamu SET
       nama='$_POST[nama]',
       kelompok='$_POST[kelompok]',
       waktu_hadir='$_POST[waktu_hadir]'
       WHERE id='$id'
    ");

    header("location:index.php");
}
?>