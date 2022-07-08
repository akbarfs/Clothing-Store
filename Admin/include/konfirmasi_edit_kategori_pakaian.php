<?php 
if(isset($_SESSION['id_kategori_pakaian'])){
    $id_kategori_pakaian = $_SESSION['id_kategori_pakaian'];
    $kategori_pakaian = $_POST['kategori_pakaian'];
        $sql = "update `kategori_pakaian` set `kategori_pakaian`='$kategori_pakaian' 
        where `id_kategori_pakaian`='$id_kategori_pakaian'";
        mysqli_query($koneksi,$sql);
        unset($_SESSION['id_kategori_pakaian']);
        header("Location:index.php?include=kategori-pakaian&notif=editberhasil");
}
?>