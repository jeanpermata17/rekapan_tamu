<?php 
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tambah Data</title>

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
<h1>Tambah Data Tamu</h1>

<form method="post">
<table>
    <tr>
        <td>Nama</td>
        <td>
            <input type="text" name="nama" required>
        </td>
    </tr>

    <tr>
        <td>Kelompok</td>
        <td>
            <select name="kelompok" required>
                <option value="">-- pilih kelompok --</option>
                <option value="orang tua">orang tua</option>
                <option value="guru">guru</option>
                <option value="Tamu khusus">Tamu khusus</option>
                <option value="siswa/i">siswa/i</option>
            </select>
        </td>
    </tr>

    <tr>
        <td>Waktu Hadir</td>
        <td>
            <input type="time" name="waktu_hadir" required>
        </td>
    </tr>
</table>

<button type="submit" name="simpan">SIMPAN</button>
</form>

</div>

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