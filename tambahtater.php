<?php
include 'koneksi.php';

$jenpel = $_POST['jenis_pelanggaran'];
$poin = $_POST['poin'];
mysqli_query($koneksi,"INSERT INTO tatatertib VALUES('$jenpel','$poin')");

header("location:tatatertib.php");
?>