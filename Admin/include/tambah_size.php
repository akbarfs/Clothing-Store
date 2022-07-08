<?php
$id_user = $_SESSION['id_user'];
//get profil
$sql = "select `nama`,`foto` from `user` 
where `id_user`='$id_user'";
//echo $sql;
$query = mysqli_query($koneksi, $sql);
while($data = mysqli_fetch_row($query)){
$nama = $data[0];
$foto = $data[1];
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
                <!-- FORM VALIDATION -->
                <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-"></i> Form Tambah Size</h4>
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="index.php?include=konfirmasi-tambah-size">
                  <div class="form-group ">
                    <label for="tambah_size" class="control-label col-lg-2">Size</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="size" name="size" minlength="1" type="text" value="" required />
                    </div>
                    <label for="tambah_size" class="control-label col-lg-2">Detail</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="detail" name="detail" minlength="1" type="text" value="" required />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Tambah</button>
                      <button class="btn btn-theme04" type="button"><a href="index.php?include=size">Kembali</a></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->

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