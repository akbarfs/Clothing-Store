<?php
$lokasi_file = $_FILES['foto']['tmp_name'];
$nama_file = $_FILES['foto']['name'];
$direktori = 'foto_profile/'.$nama_file;
if(move_uploaded_file($lokasi_file,$direktori)){
 if(!empty($foto)){
 unlink("foto_profile/$foto");
 }
}
$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$foto = $nama_file;
$tgl=date("Y-m-d");
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");

if(isset($_GET['tambah'])){
header("Location:index.php?include=tambah-user&notif=tambahkosong"); //if e uncalen ae 
}else if(!isset($_GET['tambah'])){
$sql = "insert into `user` values ('','$nama','$email','$username',md5('$password'),'$level','$foto','$tgl''$jam','')";
mysqli_query($koneksi,$sql);
header("Location:index.php?include=user&notif=tambahberhasil");
}else if(empty($foto)){
$sql = "insert into `user` values ('','$nama','$email','$username',md5('$password'),'$level','','$tgl''$jam''')";
mysqli_query($koneksi,$sql);
header("Location:index.php?include=user&notif=tambahberhasil");
}
?>