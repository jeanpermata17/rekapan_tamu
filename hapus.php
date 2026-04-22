<?php
  include 'koneksi.php';
  $id = $_GET['id'];

  mysqli_query($conn, "DELETE FROM rekapan_tamu WHERE id='$id'");

  header("location: index.php");
?>