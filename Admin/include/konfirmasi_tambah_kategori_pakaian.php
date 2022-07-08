<?php 
    $kategori_pakaian = $_POST['kategori_pakaian'];
        $sql = "insert into `kategori_pakaian` (`kategori_pakaian`) 
        values ('$kategori_pakaian')";
        mysqli_query($koneksi,$sql);
        header("Location:index.php?include=kategori-pakaian&notif=tambahberhasil");
?>