<?php 
    if((isset($_GET['aksi']))&&(isset($_GET['data']))){
      if($_GET['aksi']=='hapus'){
        $id_size = $_GET['data'];

    //hapus kategori buku
    $sql_dh = "delete from `size` 
    where `id_size` = '$id_size'";
    mysqli_query($koneksi,$sql_dh);
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
        <h3><i class="fa fa-angle-right"></i> Daftar Ukuran</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
                <div class="col-md-8"><h4><i class="fa fa-angle-right"></i> List</h4></div>
                <div class="col-md-2"></div>
                <div class="col-md-1"><a href="index.php?include=tambah-size" class="btn btn-sm btn-info float-left">Tambah  Size</a></div>
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
                      <th width="30%">Size</th>
                      <th width="50%">Detail</th>
                      <th width="15%"><center>Aksi</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql_s = "SELECT `id_size`,`size`,`detail` 
                    FROM `size` ";

                    $query_s = mysqli_query($koneksi,$sql_s);
                    $no = 1;
                    while($data_s = mysqli_fetch_row($query_s)){
                    $id_size = $data_s[0];
                    $size = $data_s[1];
                    $detail = $data_s[2];
                    ?>
                    <tr>
                    <td><?php echo $no;?></td>
                      <td><?php echo $size;?></td>
                      <td><?php echo $detail;?></td>
                      <td align="center">
                      <a href="index.php?include=edit-size&data=<?php echo $id_size;?>" 
                      class="btn btn-xs btn-info"> Edit</a>
                      <a href="javascript:if(confirm('Anda yakin ingin menghapus data 
                      <?php echo $size; ?>?'))window.location.href = 
                      'index.php?include=size&aksi=hapus&data=<?php echo 
                      $id_size;?>&notif=hapusberhasil'" 
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