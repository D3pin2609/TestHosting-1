<?php
include 'koneksi.php';

$nis = $_GET['nis'];
mysqli_query($koneksi,"delete from siswa_pelanggar where nis ='$nis'");

header("location:siswapelanggar.php");
?>