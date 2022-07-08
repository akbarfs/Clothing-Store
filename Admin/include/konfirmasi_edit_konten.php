<?php 
if(isset($_SESSION['id_konten'])){
    $id_konten = $_SESSION['id_konten'];
    $judul = $_POST['judul'];
    $isi =$_POST['isi'];
    $tgl=date("Y-m-d");
    date_default_timezone_set('Asia/Jakarta');
    $jam=date("H:i:s");
        $sql = "update `konten` set `judul`='$judul' , `isi`='$isi' , `tanggal` ='$tgl''$jam'
        where `id_konten`='$id_konten'";
        mysqli_query($koneksi,$sql);
        unset($_SESSION['id_konten']);
        header("Location:index.php?include=konten&notif=editberhasil");
}
?>