<?php 
\if(isset($_SESSION['id_size'])){
    $id_size = $_SESSION['id_size'];
    $size = $_POST['size'];
        $sql = "update `size` set `size`='$size' 
        where `id_size`='$id_size'";
        mysqli_query($koneksi,$sql);
        unset($_SESSION['id_size']);
        header("Location:index.php?include=size&notif=editberhasil");
}
?>