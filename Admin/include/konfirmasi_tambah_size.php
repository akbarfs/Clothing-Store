<?php 
    $size = $_POST['size'];
    $detail = $_POST['detail'];
        $sql = "insert into `size` (`size`,`detail`) 
        values ('$size','$detail')";
        mysqli_query($koneksi,$sql);
        header("Location:index.php?include=size.php&notif=tambahberhasil");
?>