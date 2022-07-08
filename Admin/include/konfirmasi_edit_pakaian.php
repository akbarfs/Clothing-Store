<?php 
if(isset($_SESSION['id_pakaian'])){
    $id_pakaian = $_SESSION['id_pakaian'];
    $id_kategori_pakaian = $_POST['kategori_pakaian'];
    $pakaian = $_POST['pakaian'];
    $harga = $_POST['harga'];
    $lokasi_file = $_FILES['gambar']['tmp_name'];
    $namafile = $_FILES['gambar']['name'];
    $direktori = 'gmbr/'.$namafile;
    $id_merek = $_POST['merek'];
    $id_size = $_POST['size'];
    $warna = $_POST['warna'];
    $deskripsi = addslashes($_POST['deskripsi']);
    //get gambar

    $sql_f = "SELECT `foto` FROM `pakaian` WHERE `id_pakaian`='$id_pakaian'";
    $query_f = mysqli_query($koneksi,$sql_f);
    while($data_f = mysqli_fetch_row($query_f)){
    $foto = $data_f[0];
 //echo $foto;
} 

if(empty($id_kategori_pakaian)){
    header("Location:index.php?include=edit-pakaian&data=$id_pakaian&notif=editkosong&jenis=kategoripakaian");
}else if(empty($id_merek)){
    header("Location:index.php?include=edit-pakaian&data=$id_pakaian&notif=editkosong&jenis=merek");
}else if(empty($id_size)){
    header("Location:index.php?include=edit-pakaian&data=$id_pakaian&notif=editkosong&jenis=size");
}else if(move_uploaded_file($lokasi_file,$direktori)){
 if(!empty($foto)){
    unlink("gmbr/$foto");
}
$sql = "UPDATE `pakaian` set 
`id_kategori_pakaian`='$id_kategori_pakaian',`pakaian`='$pakaian',
`harga`='$harga',`gambar`='$namafile',`id_merek`='$id_merek',
`id_size`='$id_size',`deskripsi`='$deskripsi'
 WHERE `id_pakaian`='$id_pakaian'";
mysqli_query($koneksi,$sql);
}else{
$sql = "UPDATE `pakaian` set 
`id_kategori_pakaian`='$id_kategori_pakaian',`pakaian`='$pakaian',
`harga`='$harga',`id_merek`='$id_merek',
`id_size`='$id_size',`deskripsi`='$deskripsi'
WHERE `id_pakaian`='$id_pakaian'";
mysqli_query($koneksi,$sql);
}

header("Location:index.php?include=pakaian&notif=editberhasil");
}
?>
