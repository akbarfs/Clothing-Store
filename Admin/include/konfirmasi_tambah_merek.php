<?php 
   $merek = $_POST['merek'];
        $sql = "insert into `merek` (`merek`) 
        values ('$merek')";
        mysqli_query($koneksi,$sql);
        header("Location:index.php?include=merek&notif=tambahberhasil");
?>