<?php
session_start();
include("../koneksi/koneksi.php");
if(isset($_GET["include"])){
$include = $_GET["include"];
if($include=="konfirmasi-login"){
    include("include/konfirmasilogin.php");
}else if($include=="log-out"){
    include("include/logout.php");
}else if($include=="konfirmasi-tambah-kategori-pakaian"){
    include("include/konfirmasi_tambah_kategori_pakaian.php");
}else if($include=="konfirmasi-edit-kategori-pakaian"){
    include("include/konfirmasi_edit_kategori_pakaian.php");
}else if($include=="konfirmasi-tambah-merek"){
    include("include/konfirmasi_tambah_merek.php");
}else if($include=="konfirmasi-edit-merek"){
    include("include/konfirmasi_edit_merek.php");
}else if($include=="konfirmasi-tambah-size"){
    include("include/konfirmasi_tambah_size.php");
}else if($include=="konfirmasi-edit-size"){
    include("include/konfirmasi_edit_size.php");
}else if($include=="konfirmasi-edit-konten"){
    include("include/konfirmasi_edit_konten.php");
}else if($include=="konfirmasi-tambah-pakaian"){
    include("include/konfirmasi_tambah_pakaian.php");
}else if($include=="konfirmasi-edit-pakaian"){
    include("include/konfirmasi_edit_pakaian.php");
}else if($include=="konfirmasi-tambah-user"){
    include("include/konfirmasi_tambah_user.php");
}else if($include=="konfirmasi-edit-user"){
    include("include/konfirmasi_edit_user.php");
}else if($include=="konfirmasi-edit-profile"){
    include("include/konfirmasi_edit_profile.php");
}    
}
?>
<!DOCTYPE html>
<head>
<?php include("includes/head.php");?>
</head>

        <?php 
        if(isset($_GET["include"])){
            $include = $_GET["include"];
            if(isset($_SESSION['id_user'])){
                $id_user = $_SESSION['id_user'];
                $sql = "select `nama`,`username`, `level`,`foto` from `user` where `id_user`='$id_user'";
                $query = mysqli_query($koneksi, $sql);
                while($data = mysqli_fetch_row($query)){
                
                $nama = $data[0];
                $username = $data[1];
                $level = $data[2];
                $foto = $data[3];
                }

                if($include=="kategori-pakaian"){
                    include("include/kategori_pakaian.php");
                }else if($include=="tambah-kategori-pakaian"){
                    include("include/tambah_kategori_pakaian.php");
                }else if($include=="edit-kategori-pakaian"){
                    include("include/edit_kategori_pakaian.php");
                }else if($include=="merek"){
                    include("include/merek.php");
                }else if($include=="tambah-merek"){
                    include("include/tambah_merek.php");
                }else if($include=="edit-merek"){
                    include("include/edit_merek.php");
                }else if($include=="size"){
                    include("include/size.php");
                }else if($include=="tambah-size"){
                    include("include/tambah_size.php");
                }else if($include=="edit-size"){
                    include("include/edit_size.php");
                }else if($include=="konten"){
                    include("include/konten.php");
                }else if($include=="detail-konten"){
                    include("include/detail_konten.php");
                }else if($include=="edit-konten"){
                    include("include/edit_konten.php");
                }else if($include=="pakaian"){
                    include("include/pakaian.php");
                }else if($include=="tambah-pakaian"){
                    include("include/tambah_pakaian.php");
                }else if($include=="detail-pakaian"){
                    include("include/detail_pakaian.php");
                }else if($include=="edit-pakaian"){
                    include("include/edit_pakaian.php");
                }else if($include=="user"){
                    include("include/user.php");
                }else if($include=="tambah-user"){
                    include("include/tambah_user.php");
                }else if($include=="detail-user"){
                    include("include/detail_user.php");
                }else if($include=="edit-user"){
                    include("include/edit_user.php");
                }else if($include=="pesan"){
                    include("include/pesan.php");
                }else if($include=="detail-pesan"){
                    include("include/detail_pesan.php");
                }else if($include=="edit-profile"){
                    include("include/edit_profile.php");
                }else if($include=="profile"){
                include("include/profile.php");
                } 
                }else{
                    include("include/login.php");
                } 
                }else{
                if(isset($_SESSION['id_user'])){
                //pemanggilan ke halaman-halaman profil jika ada session
                include("include/profile.php");
                }else{
                //pemanggilan halaman form login
                include("include/login.php");
                }
               }            
        ?>    
</html>