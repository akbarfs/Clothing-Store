<?php 
if(isset($_SESSION['id_merek'])){
    $id_merek = $_SESSION['id_merek'];
    $merek = $_POST['merek'];
        $sql = "update `merek` set `merek`='$merek' 
        where `id_merek`='$id_merek'";
        mysqli_query($koneksi,$sql);
        unset($_SESSION['id_merek']);
        header("Location:index.php?include=merek&notif=editberhasil");
}
?>