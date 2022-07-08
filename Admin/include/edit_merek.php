<?php 
  if(isset($_GET['data'])){
    $id_merek = $_GET['data'];
    $_SESSION['id_merek']=$id_merek;

    //get data kategori pakaian
  $sql_d = "select `merek` from `merek` where 
  `id_merek` = '$id_merek'";
  $query_d = mysqli_query($koneksi,$sql_d);
  while($data_d = mysqli_fetch_row($query_d)){
    $merek= $data_d[0];
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
                <!-- FORM VALIDATION -->
                <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-"></i> Form Edit Merek</h4>
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="index.php?include=konfirmasi-edit-merek">
                  <div class="form-group ">
                    <label for="edit_merek" class="control-label col-lg-2">Merek</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="merek" name="merek" type="text" value="<?php echo $merek;?>" minlength="1" required />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Simpan</button>
                      <button class="btn btn-theme04" type="button"><a href="index.php?include=merek">Kembali</a></button>
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