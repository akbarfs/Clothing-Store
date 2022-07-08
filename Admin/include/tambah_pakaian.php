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
            <h4><i class="fa fa-angle-"></i> Form Tambah Pakaian</h4>
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" enctype="multipart/form-data" method="post" action="index.php?include=konfirmasi-tambah-pakaian" >
                <div class="col-sm-10">
          <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
          <?php if($_GET['notif']=="tambahkosong"){?>
            <div class="alert alert-danger" role="alert">Maaf Anda Belum Mengisi Data 
            <?php echo $_GET['jenis'];?></div>
          <?php }?>
          <?php }?>
          </div>
          <div class="form-group ">
                  <label class="control-label col-md-3">Gambar</label>
                  <div class="col-md-4">
                    <input type="file" id="CustomFile" name="foto" >
                  </div>
          </div>
          <div class="form-group ">
                  <select class="form-control" id="kategori" name="kategori_pakaian">
                    <option value="0">- Pilih Kategori Pakaian -</option>
                    <?php 
                  $sql_k = "SELECT `id_kategori_pakaian`,`kategori_pakaian` FROM 
                  `kategori_pakaian` ORDER BY `kategori_pakaian`";
                  $query_k = mysqli_query($koneksi, $sql_k);
                  while($data_k = mysqli_fetch_row($query_k)){
                  $id_kat = $data_k[0];
                  $kat = $data_k[1];
                  ?>
                  <option value="<?php echo $id_kat;?>"><?php echo $kat;?></option>
                <?php }?>
                    </select>
                    </div>
                    <div class="form-group ">
                    <label for="edit_pakaian" class="control-label col-lg-2">Pakaian</label>
                    <div class="col-lg-10">
                      <input class=" form-control" name="pakaian" id="pakaian" minlength="1" type="text" value="" required />
                    </div>
                    </div>
                    <div class="form-group ">
                    <label for="edit_pakaian" class="control-label col-lg-2">Harga</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="harga" name="harga" minlength="1" type="text" value="" required />
                    </div>
                    </div>
                    <div class="form-group ">
                    <label for="edit_pakaian" class="control-label col-lg-2">Warna</label>
                      <div class="col-lg-10">
                      <input class=" form-control" id="warna" name="warna" minlength="1" type="text" value="" required />
                      </div>
                    </div>
                    <div class="form-group ">
                    <select class="form-control" id="merek" name="merek">
                      <option value="0">- Pilih Merek -</option>
                      <?php 
                  $sql_b = "SELECT `id_merek`,`merek` FROM 
                  `merek` ORDER BY `merek`";
                  $query_b = mysqli_query($koneksi, $sql_b);
                  while($data_b = mysqli_fetch_row($query_b)){
                  $id_brand = $data_b[0];
                  $brand = $data_b[1];
                  ?>
                  <option value="<?php echo $id_brand;?>"> <?php echo $brand;?></option>
                <?php }?>
                    </select>
                    </div>
                    <div class="form-group ">
                    <select class="form-control" id="size" name="size">
                    <option value="0">- Pilih size -</option>
                    <?php 
                  $sql_s = "SELECT `id_size`,`size` FROM 
                  `size` ORDER BY `size`";
                  $query_s = mysqli_query($koneksi, $sql_s);
                  while($data_s = mysqli_fetch_row($query_s)){
                  $id_ukuran = $data_s[0];
                  $ukuran = $data_s[1];
                  ?>
                  <option value="<?php echo $id_ukuran;?>"><?php echo $ukuran;?></option>
                <?php }?>
                    </select>
                    </div>
                    <div class="form-group ">
                    <label for="detail" class="control-label col-lg-2">Deskripsi</label>
                    <div class="col-lg-10">
                    <textarea class="form-control" name="deskripsi" id="editor1" minlength="1" required rows="5"></textarea>
                    </div>
                    </div>
                  
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Simpan</button>
                      <button class="btn btn-theme04"><a href="index.php?include=pakaian">Kembali</a></button>
                    </div>
                  </div>
                </form>
              </div>
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