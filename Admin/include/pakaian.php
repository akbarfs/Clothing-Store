<?php  
if((isset($_GET['aksi']))&&(isset($_GET['data']))){ 
  if($_GET['aksi']=='hapus'){ 
    $id_pakaian = $_GET['data']; 

    //get foto 
    $sql_f = "SELECT `foto` FROM `pakaian` WHERE `id_pakaian`='$id_pakaian'";  
    $query_f = mysqli_query($koneksi,$sql_f); 
    $jumlah_f = mysqli_num_rows($query_f); 
 
    if($jumlah_f>0){ 
      while($data_f = mysqli_fetch_row($query_f)){ 
        $gambar = $data_f[0]; 
        //menghapus gmbr
        unlink("gmbr/$gambar"); 
      } 
    }

    //hapus data  
    $sql_dm = "delete from `pakaian` where `id_pakaian` = '$id_pakaian'";  
    mysqli_query($koneksi,$sql_dm); 
  } 
} 

?>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
        <?php include("includes/header.php") ?> 
        <?php include("includes/sidebar.php") ?> 
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Daftar Pakaian</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
            <div class="col-md-8"><h4><i class="fa fa-angle-right"></i> List</h4></div>
                <div class="col-md-2"></div>
                <div class="col-md-1"><a href="index.php?include=tambah-pakaian" class="btn btn-sm btn-info float-left">Tambah  Pakaian</a></div>
           <br>
              <div class="col-sm-12">
                <?php if(!empty($_GET['notif'])){?>
                  <?php if($_GET['notif']=="tambahberhasil"){?>
                  <div class="alert alert-success" role="alert">
                  Data Berhasil Ditambahkan</div>
                  <?php } else if($_GET['notif']=="editberhasil"){?>
                  <div class="alert alert-success" role="alert">
                  Data Berhasil Diubah</div>
                  <?php } else if($_GET['notif']=="hapusberhasil"){?>
                  <div class="alert alert-success" role="alert">
                  Data Berhasil Dihapus</div>
                <?php }?>
                <?php }?>
                </div>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th width="5%">No</th>
                      <th width="30%">kategori</th>
                      <th width="25%">Pakaian</th>
                      <th width="25%">Merek</th>
                      <th width="15%"><center>Aksi</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql_p = "SELECT `p`.`id_pakaian`, `p`.`pakaian`,  
                    `k`.`kategori_pakaian`,`m`.`merek` FROM `pakaian` `p` 
                    INNER JOIN `kategori_pakaian` `k` ON `p`.`id_kategori_pakaian` =   `k`.`id_kategori_pakaian` 
                    INNER JOIN `merek` `m` ON   `p`.`id_merek` = `m`.`id_merek`"; 

                    $sql_p .= " order by `pakaian` ";
                    $query_p = mysqli_query($koneksi,$sql_p); 
                    $no = 1; 
                    while($data_p = mysqli_fetch_row($query_p)){ 
                    $id_pakaian = $data_p[0]; 
                    $pakaian = $data_p[1]; 
                    $kategori_pakaian = $data_p[2]; 
                    $merek = $data_p[3]; 
                    ?>
                    <tr>
                    <td><?php echo $no;?></td>
                      <td><?php echo $kategori_pakaian;?></td>
                      <td><?php echo $pakaian;?></td>
                      <td><?php echo $merek;?></td>
                      <td align="center">
                      <a href="index.php?include=edit-pakaian&data=<?php echo $id_pakaian;?>" 
                      class="btn btn-xs btn-info"> Edit</a>
                      <a href="index.php?include=detail-pakaian&data=<?php echo $id_pakaian;?>" 
                      class="btn btn-xs btn-success"> Detail</a>
                      <a href="javascript:if(confirm('Anda yakin ingin menghapus data 
                      <?php echo $pakaian; ?>?'))window.location.href = 
                      'index.php?include=pakaian&aksi=hapus&data=<?php echo 
                      $id_pakaian;?>&notif=hapusberhasil'" 
                      class="btn btn-xs btn-warning"> Hapus</a>
                      </td>
                    </tr>
                    <?php $no++;}?>
                  </tbody>
                </table>
              </section>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-4 -->
        </div>
        <!-- /row -->
    <!--main content end-->
    <?php include("includes/footer.php") ?>
  </section>
  <?php include("includes/script.php") ?>
</body>

</html>