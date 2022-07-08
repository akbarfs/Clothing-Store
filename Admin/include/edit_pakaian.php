<?php
if(isset($_GET['data'])){
$id_pakaian = $_GET['data'];
$_SESSION['id_pakaian']=$id_pakaian;
//get data buku
$sql_m = "SELECT `id_kategori_pakaian`,`pakaian`,`harga`,`warna`,`id_merek`,
`id_size`,`deskripsi` FROM `pakaian` WHERE `id_pakaian`='$id_pakaian'";
$query_m = mysqli_query($koneksi,$sql_m);
while($data_m = mysqli_fetch_row($query_m)){
$id_kategori_pakaian= $data_m[0];
$pakaian = $data_m[1];
$harga = $data_m[2];
    $warna = $data_m[3];
    $id_merek = $data_m[4];
    $id_size = $data_m[5];
    $deskripsi = $data_m[6];
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
            <h4><i class="fa fa-angle-"></i> Form Edit Pakaian</h4>
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" enctype="multipart/form-data" method="post" action="index.php?include=konfirmasi-edit-pakaian" >
                <div class="col-sm-10">
          <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
          <?php if($_GET['notif']=="editkosong"){?>
            <div class="alert alert-danger" role="alert">Maaf data 
            <?php echo $_GET['jenis'];?> wajib di isi</div>
          <?php }?>
          <?php }?>
          </div>
          <div class="form-group ">
                  <label class="control-label col-md-3">Gambar</label>
                  <div class="col-md-4">
                    <input type="file" id="gambar" name="gambar" >
                  </div><div>
                  <select class="form-control" id="kategori_pakaian" name="kategori_pakaian">
                    <option value="0">- Pilih Kategori Pakaian -</option>
                    <?php 
                  $sql_k = "SELECT `id_kategori_pakaian`,`kategori_pakaian` FROM 
                  `kategori_pakaian` ORDER BY `kategori_pakaian`";
                  $query_k = mysqli_query($koneksi, $sql_k);
                  while($data_k = mysqli_fetch_row($query_k)){
                  $id_kat = $data_k[0];
                  $kat = $data_k[1];
                  ?>
                  <option value="<?php echo $id_kat;?>" 
                  <?php if($id_kat==$id_kategori_pakaian){?>
                  selected <?php }?>><?php echo $kat;?></option>
                <?php }?>
                    </select>
                    </div>
                    <label for="edit_pakaian" class="control-label col-lg-2">Pakaian</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="pakaian" name="pakaian" minlength="1" type="text" value="<?php echo $pakaian;?>" required />
                    </div>
                    <br>
                    <label for="edit_pakaian" class="control-label col-lg-2">Harga</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="harga" name="harga" minlength="1" type="text" value="<?php echo $harga;?>" required />
                    </div>
                    <br>
                    <label for="edit_pakaian" class="control-label col-lg-2">Warna</label>
                      <div class="col-lg-10">
                      <input class=" form-control" id="warna" name="warna" minlength="1" type="text" value="<?php echo $warna;?>" required />
                      </div>
                    <hr>
                    <select class="form-control" id="merek" name="merek">
                      <option value="">- Pilih Merek -</option>
                      <?php 
                  $sql_b = "SELECT `id_merek`,`merek` FROM 
                  `merek` ORDER BY `merek`";
                  $query_b = mysqli_query($koneksi, $sql_b);
                  while($data_b = mysqli_fetch_row($query_b)){
                  $id_brand = $data_b[0];
                  $brand = $data_b[1];
                  ?>
                  <option value="<?php echo $id_brand;?>" 
                  <?php if($id_brand==$id_merek){?>
                  selected <?php }?>><?php echo $brand;?></option>
                <?php }?>
                    </select>
                    <br>
                    <select class="form-control" id="size" name="size">
                    <option value="">- Pilih size -</option>
                    <?php 
                  $sql_s = "SELECT `id_size`,`size` FROM 
                  `size` ORDER BY `size`";
                  $query_s = mysqli_query($koneksi, $sql_s);
                  while($data_s = mysqli_fetch_row($query_s)){
                  $id_ukuran = $data_s[0];
                  $ukuran = $data_s[1];
                  ?>
                  <option value="<?php echo $id_ukuran;?>" 
                  <?php if($id_ukuran==$id_size){?>
                  selected <?php }?>><?php echo $ukuran;?></option>
                <?php }?>
                    </select>
                    <br>
                    <label for="detail" class="control-label col-lg-2">Deskripsi</label>
                    <div class="col-lg-10">
                    <textarea class="form-control" name="deskripsi" id="editor1" minlength="1" required rows="5"><?php echo $deskripsi;?></textarea>
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