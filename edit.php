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
<title>Edit Data</title>

<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #ffe4ec, #fff0f5);
        margin: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card {
        background: white;
        padding: 30px;
        border-radius: 20px;
        width: 400px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }

    h1 {
        text-align: center;
        color: #d63384;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
    }

    td {
        padding: 8px;
        font-size: 14px;
    }

    input, select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ffc0cb;
        border-radius: 10px;
        outline: none;
        transition: 0.3s;
    }

    input:focus, select:focus {
        border-color: #ff85a2;
        box-shadow: 0 0 5px rgba(255,133,162,0.5);
    }

    button {
        width: 100%;
        padding: 10px;
        background: #ff85a2;
        border: none;
        color: white;
        border-radius: 10px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 10px;
        transition: 0.3s;
    }

    button:hover {
        background: #ff5c8a;
    }
</style>
</head>

<body>

<div class="card">
<h1>Edit Data</h1>

<form method="post">
<table>
    <tr>
        <td>Nama</td>
        <td>
            <input type="text" name="nama" value="<?= $item['nama'] ?>">
        </td>
    </tr>

    <tr>
        <td>Kelompok</td>
        <td>
            <select name="kelompok">
                <option value="">-- pilih kelompok --</option>
                <option value="orang tua" <?= $item['kelompok']=='orang tua'?'selected':''; ?>>orang tua</option>
                <option value="guru" <?= $item['kelompok']=='guru'?'selected':''; ?>>guru</option>
                <option value="Tamu khusus" <?= $item['kelompok']=='Tamu khusus'?'selected':''; ?>>Tamu khusus</option>
                <option value="siswa/i" <?= $item['kelompok']=='siswa/i'?'selected':''; ?>>siswa/i</option>
            </select>
        </td>
    </tr>

    <tr>
        <td>Waktu Hadir</td>
        <td>
            <input type="time" name="waktu_hadir" value="<?= $item['waktu_hadir'] ?>">
        </td>
    </tr>
</table>

<button type="submit" name="update">Update</button>
</form>

</div>

</body>
</html>

<?php
if(isset($_POST['update'])){
    mysqli_query($conn,"UPDATE rekapan_tamu SET
       nama='$_POST[nama]',
       kelompok='$_POST[kelompok]',
       waktu_hadir='$_POST[waktu_hadir]'
       WHERE id='$id'
    ");

    header("location:index.php");
}
?>