<?php 
    $id_kategori_pakaian = $_POST['kategori_pakaian'];
    $pakaian = $_POST['pakaian'];
    $harga = $_POST['harga'];
    $id_merek = $_POST['merek'];
    $id_size = $_POST['size'];
    $warna = $_POST['warna'];
    $deskripsi = $_POST['deskripsi'];
    $lokasi_f = $_FILES['foto']['tmp_name'];
    $nama_f = $_FILES['foto']['name'];
    $direktori = 'gmbr/'.$nama_f;
if(!move_uploaded_file($lokasi_f,$direktori)){
        header("Location:index.php?include=tambah-pakaian&notif=tambahkosong&jenis=foto");
    }else if(empty($id_kategori_pakaian)){ 
        header("Location:index.php?include=tambah-pakaian&notif=tambahkosong&jenis=kategori_pakaian");
    }else if(empty($id_merek)){ 
        header("Location:index.php?include=tambah-pakaian&notif=tambahkosong&jenis=merek");
    }else if(empty($id_size)){ 
        header("Location:index.php?include=tambah-pakaian&notif=tambahkosong&jenis=size");
    }else{ 
        $sql = "INSERT INTO `pakaian` (`id_kategori_pakaian`,`pakaian`,`harga`,`id_merek`,`id_size`,`warna`,`deskripsi`,`foto`)
        VALUES ('$id_kategori_pakaian','$pakaian','$harga','$id_merek','$id_size','$warna','$deskripsi','$nama_f')";
        //echo $sql;
        mysqli_query($koneksi,$sql);
        $id_pakaian = mysqli_insert_id($koneksi);

        header("Location:index.php?include=pakaian&notif=tambahberhasil");
    }
?>