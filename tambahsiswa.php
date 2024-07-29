<?php
include 'koneksi.php';

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$guru = $_POST['guru'];
$jenpel = $_POST['jenis_pelanggaran'];
mysqli_query($koneksi,"INSERT INTO siswa_pelanggar VALUES('$nis','$nama','$kelas','$jurusan','$guru','$jenpel')");

header("location:siswapelanggar.php");
?>