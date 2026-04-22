<?php
$conn = mysqli_connect("localhost", "root", "", "tamu_undangan");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>