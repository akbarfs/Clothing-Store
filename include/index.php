<?php 
 $sql_k = "SELECT `judul`,`isi` FROM `konten` WHERE 
 `id_konten`='2'";
 $query_k = mysqli_query($koneksi,$sql_k);
 while($data_k = mysqli_fetch_row($query_k)){
 $judul_konten = $data_k[0];
 $isi_konten = $data_k[1];
 }
 ?>
 <section id="notes-item">
 <div class="container">
 <div class="row featurette">
 <div class="col-md-7">
 <h2 class="featurette-heading">
 <?php echo $judul_konten;?></span></h2>
 <p class="lead"><?php echo $isi_konten;?></p>
 </div>
 <div class="col-md-5">
 <img src="images/flat-shopping-composition-with-fitting-room-store-people-there_1284-56976.jpg" 
 class="img-fluid mx-auto featurette-image">
 </div>
 </div>
 <hr class="featurette-divider">
 </div>
 </section><!-- #notes-item -->

 <section class="slider_section">
         <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">

            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="first-slide" src="images/Slide1.jpg" alt="First slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>Produk <br> <strong class="black_bold">Terbaru </strong><br>
                           <strong class="yellow_bold">Kami </strong></h1>
                        <p>kunjungi produk terbaru kami  <br>
                          yang telah ditambahkan di tahun 2021 </p>
                        <a  href="index.php?include=produk">Lihat lebih banyak</a>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="second-slide" src="images/Slide2.jpg" alt="Second slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>Produk <br> <strong class="black_bold">Terbaru </strong><br>
                           <strong class="yellow_bold">Kami </strong></h1>
                        <p>kunjungi produk terbaru kami  <br>
                          yang telah ditambahkan di tahun 2021 </p>
                        <a  href="index.php?include=produk">Lihat lebih banyak</a>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="third-slide" src="images/Slide3.jpg" alt="Third slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>Produk <br> <strong class="black_bold">Terbaru </strong><br>
                           <strong class="yellow_bold">Kami </strong></h1>
                        <p>kunjungi produk terbaru kami  <br>
                          yang telah ditambahkan di tahun 2021 </p>
                        <a  href="index.php?include=produk">Lihat lebih banyak</a>
                     </div>
                  </div>
               </div>

            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class='fa fa-angle-right'></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class='fa fa-angle-left'></i>
            </a>
            
         </div>

      </section>

            <!-- our product -->
            <div class="product">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>our <strong class="black">products</strong></h2>
                     <span>We package the products with best services to make you a happy customer.</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="product-bg">
         <div class="product-bg-white">
         <div class="container">
            <div class="row">
            <?php 
            $sql_p = "SELECT `id_pakaian`, `pakaian`,`harga`, `foto` FROM `pakaian` ORDER BY `pakaian` DESC LIMIT 6";
            $query_p = mysqli_query($koneksi,$sql_p);
            while($data_p = mysqli_fetch_row($query_p)){
                $id_pakaian = $data_p[0];
                $pakaian = $data_p[1];
                $harga = $data_p[2];
                $foto = $data_p[3];
            ?>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box"><a href="index.php?include=detail-pakaian&data=<?php echo $id_pakaian;?>"
                     <i><img src="Admin/gmbr/<?php echo $foto;?>"/></i>
                     <h3><?php echo $pakaian;?></h3>
                     <span><?php echo $harga;?></span>
                     <a>
                  </div>
               </div>
               <?php }?>
