<?php 
    if((isset($_GET['aksi']))&&(isset($_GET['data']))){
      if($_GET['aksi']=='hapus'){
        $id_kategori_pakaian = $_GET['data'];

    $sql_dh = "delete from `kategori_pakaian` 
    where `id_kategori_pakaian` = '$id_kategori_pakaian'";
    mysqli_query($koneksi,$sql_dh);
  }
}
?>

<body>
  <section id="container">
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
        <h3><i class="fa fa-angle-right"></i> Daftar Kategori Pakaian</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
                <div class="col-md-8"><h4><i class="fa fa-angle-right"></i> List</h4></div>
                <div class="col-md-2"></div>
                <div class="col-md-1"><a href="index.php?include=tambah-kategori-pakaian" class="btn btn-sm btn-info float-left">Tambah Kategori Pakaian</a></div>
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
                      <th width="50%">kategori Pakaian</th>
                      <th width="15%"><center>Aksi</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql_k = "SELECT `id_kategori_pakaian`,`kategori_pakaian` 
                    FROM `kategori_pakaian` ";
                    $sql_k .= " ORDER BY `kategori_pakaian` ";
                    $query_k = mysqli_query($koneksi,$sql_k);
                    $no = 1;
                    while($data_k = mysqli_fetch_row($query_k)){
                    $id_kategori_pakaian = $data_k[0];
                    $kategori_pakaian = $data_k[1];
                    ?>
                    <tr>
                    <td><?php echo $no;?></td>
                      <td><?php echo $kategori_pakaian;?></td>
                      <td align="center">
                      <a href="index.php?include=edit-kategori-pakaian&data=<?php echo $id_kategori_pakaian;?>" 
                      class="btn btn-xs btn-info"> Edit</a>
                      <a href="javascript:if(confirm('Apakah Anda yakin ingin menghapus data 
                      <?php echo $kategori_pakaian; ?>?'))window.location.href = 
                      'index.php?include=kategori-pakaian&aksi=hapus&data=<?php echo 
                      $id_kategori_pakaian;?>&notif=hapusberhasil'" 
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
    <?php include("includes/script.php") ?> 

</body>

</html>
