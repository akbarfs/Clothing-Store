<?php 
      if(isset($_GET['data'])){
      $id_pakaian = $_GET['data'];
      //gat data pakaian
      $sql = "SELECT `p`.`foto`,`k`.`kategori_pakaian`,`p`.`pakaian`,
      `p`.`harga`,`p`.`warna`,`s`.`size`,
      `m`.`merek`, `p`.`deskripsi` FROM `pakaian` `p`
      INNER JOIN `kategori_pakaian` `k` ON 
      `p`.`id_kategori_pakaian`=`k`.`id_kategori_pakaian`
      INNER JOIN `size` `s` ON `p`.`id_size` = `s`.`id_size`
      INNER JOIN `merek` `m` ON `p`.`id_merek`= `m`.`id_merek`
      WHERE `p`.`id_pakaian`='$id_pakaian'";
      $query = mysqli_query($koneksi,$sql);
      while($data = mysqli_fetch_row($query)){
        $foto = $data[0];
        $kategori_pakaian = $data[1];
        $pakaian = $data[2];
        $harga = $data[3];
        $warna = $data[4];
        $size = $data[5];
        $merek = $data[6];
        $deskripsi = $data[7];
      }
    }
?>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
        <?php include("includes/header.php") ?> 
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
        <?php include("includes/sidebar.php") ?> 
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Detail Pakaian</h3>
        <div class="row mt">
          <div class="col-lg-12">
                <table class="table table-bordered">
                    <tbody>                      
                      <tr>
                        <td><strong>Gambar<strong></td>
                        <td><img src="gmbr/<?php echo $foto;?>" class="img-fluid" width="200px;"></td>
                      </tr>               
                      <tr>
                        <td width="20%"><strong>Kategori pakaian<strong></td>
                        <td width="80%"><?php echo $kategori_pakaian;?></td>
                      </tr>                 
                      <tr>
                        <td width="20%"><strong>pakaian<strong></td>
                        <td width="80%"><?php echo $pakaian;?></td>
                      </tr>                 
                      <tr>
                        <td width="20%"><strong>harga<strong></td>
                        <td width="80%"><?php echo $harga;?></td>
                      </tr>
                      <tr>
                        <td width="20%"><strong>Merek<strong></td>
                        <td width="80%"><?php echo $merek;?></td>
                      </tr>
                      <tr>
                        <td width="20%"><strong>Size<strong></td>
                        <td width="80%"><?php echo $size;?></td>
                      </tr>
                      <tr>
                        <td width="20%"><strong>Warna<strong></td>
                        <td width="80%"><?php echo $warna;?></td>
                      </tr>
                      <tr>
                        <td width="20%"><strong>Deskripsi<strong></td>
                        <td width="80%"><?php echo $deskripsi;?></td>
                      </tr> 
                    </tbody>
                  </table>  
                  <button class="btn btn-theme04"><a href="index.php?include=pakaian">Kembali</a></button>
                </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <?php include("includes/footer.php") ?> 
    <?php include("includes/script.php") ?> 

</body>

</html>
