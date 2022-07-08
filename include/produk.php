<div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Produk</h2>
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
            $sql_p = "SELECT `id_pakaian`, `pakaian`,`harga`, `foto` FROM `pakaian`";
            
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
