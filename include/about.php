<?php 
 $sql_k = "SELECT `judul`,`isi` FROM `konten` WHERE 
 `id_konten`='1'";
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
 </div>
 <hr class="featurette-divider">
 </div>
 </section><!-- #notes-item -->

 <section id="notes-item">
 <div class="container">
 <div class="row featurette">
 <div class="col-md-7">
 <h2 class="featurette-heading">Sosial Media</span></h2>
 <p class="lead"><a href="https://www.facebook.com/login">facebook</a></p>
 <p class="lead"><a href="https://www.instagram.com/login">instagram</a></p>
 <p class="lead"><a href="https://www.twitter.com/login">twitter</a></p>
 <p class="lead"><a href="https://www.linkedin.com/login">linkedin</a></p>
</div>
 </div>
 <hr class="featurette-divider">
 </div>
 </section><!-- #notes-item -->
