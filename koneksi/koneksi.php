<?php
$koneksi = mysqli_connect("localhost","root","","katalog_clothing_store");
// cek koneksi
if (!$koneksi){
die("Error koneksi: " . mysqli_connect_errno());
}
?>