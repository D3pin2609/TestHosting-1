<?php
include 'koneksi.php';

$jenis_pelanggaran = $_GET['jenis_pelanggaran'];
mysqli_query($koneksi,"DELETE FROM tatatertib WHERE jenis_pelanggaran ='$jenis_pelanggaran'");

header("location:tatatertib.php");
?>