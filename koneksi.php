<?php
$koneksi = mysqli_connect("localhost", "root", "","db_pelanggaran");

if($koneksi === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>