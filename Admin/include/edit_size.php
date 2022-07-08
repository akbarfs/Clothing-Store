<?php 
  if(isset($_GET['data'])){
    $id_size = $_GET['data'];
    $_SESSION['id_size']=$id_size;

  $sql_d = "select `size`,`detail` from `size` where 
  `id_size` = '$id_size'";
  $query_d = mysqli_query($koneksi,$sql_d);
  while($data_d = mysqli_fetch_row($query_d)){
    $size= $data_d[0];
    $detail = $data_d[1];
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
            <h4><i class="fa fa-angle-"></i> Form Edit Size</h4>
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="index.php?include=konfirmasi-edit-size">
                  <div class="form-group ">
                    <label for="edit_size" class="control-label col-lg-2">Size</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="size" name="size" type="text" value="<?php echo $size;?>" minlength="1" required />
                    </div>
                    <label for="detail" class="control-label col-lg-2">Detail</label>
                    <div class="col-lg-10">
                    <textarea class="form-control" name="sinopsis" id="editor1" minlength="1" required rows="12"><?php echo $detail;?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Simpan</button>
                      <button class="btn btn-theme04" ><a href="index.php?include=size">Kembali</a></button>
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