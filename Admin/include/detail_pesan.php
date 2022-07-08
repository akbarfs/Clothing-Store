<?php
if (isset($_GET['data'])) {
    $id_pelanggan = $_GET['data'];
    $_SESSION['pelanggan'] = $id_pelanggan;
    $sql_d = "SELECT * from `pelanggan` where `id_pelanggan` = '$id_pelanggan'";
    $query_d = mysqli_query($koneksi, $sql_d);
    while ($data = mysqli_fetch_array($query_d)) {
        //$id_user = $data['id_user'];
        $nama = $data['nama'];
        $email = $data['email'];
        $telepon = $data['telepon'];
        $pesan = $data['pesan'];
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
        <h3><i class="fa fa-angle-right"></i> Detail Pesan</h3>
        <div class="row mt">
          <div class="col-lg-12">
                <table class="table table-bordered">
                    <tbody>                      
                      <tr>
                      <td width="20%"><strong>Nama<strong></td>
                        <td width="80%"><?php echo $nama;?></td>

                      </tr>               
                      <tr>
                        <td width="20%"><strong>Email<strong></td>
                        <td width="80%"><?php echo $email;?></td>
                      </tr>                 
                      <tr>
                        <td width="20%"><strong>Telepon<strong></td>
                        <td width="80%"><?php echo $telepon;?></td>
                      </tr>                 
                      <tr>
                        <td width="20%"><strong>Pesan<strong></td>
                        <td width="80%"><?php echo $pesan;?></td>
                      </tr>
                    </tbody>
                  </table>  
                  <button class="btn btn-theme04" type="button"><a href="index.php?include=pesan">Kembali</a></button>

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
