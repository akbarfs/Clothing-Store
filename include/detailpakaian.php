<table class="table-bordered">
<?php 
    if(isset($_GET['data'])){
    $id_pakaian = $_GET['data'];
      
      $sql_d = "SELECT `p`.`foto`,`k`.`kategori_pakaian`,`p`.`pakaian`,
      `p`.`harga`,`p`.`warna`,`s`.`size`,`m`.`merek`, `p`.`deskripsi` FROM `pakaian` `p`
      INNER JOIN `kategori_pakaian` `k` ON 
      `p`.`id_kategori_pakaian`=`k`.`id_kategori_pakaian`
      INNER JOIN `size` `s` ON `p`.`id_size` = `s`.`id_size`
      INNER JOIN `merek` `m` ON `p`.`id_merek`= `m`.`id_merek` WHERE `p`.`id_pakaian`='$id_pakaian'";

$query_d = mysqli_query($koneksi,$sql_d);
while($data_d = mysqli_fetch_row($query_d)){
    $foto = $data_d[0];
    $kategori_pakaian = $data_d[1];
    $pakaian = $data_d[2];
    $harga = $data_d[3];
    $warna = $data_d[4];
    $size = $data_d[5];
    $merek = $data_d[6];
    $deskripsi = $data_d[7];
}
?>
                      <tr>
                        <td width="40%" rowspan="6"><img src="Admin/gmbr/<?php echo $foto;?>" class="img-fluid" alt="<?php echo $pakaian;?>" title="<?php echo $pakaian;?>"></td>
                      <td colspan="2"><h4><?php echo $pakaian;?></h4></td>
                      </tr>
                      <tr>
                        <td width="17%"><strong>Kategori pakaian<strong></td>
                        <td width="43"><?php echo $kategori_pakaian;?></td>
                      </tr>                               
                      <tr>
                        <td width="17%"><strong>harga<strong></td>
                        <td width="43%"><?php echo $harga;?></td>
                      </tr>
                      <tr>
                        <td width="17%"><strong>Warna<strong></td>
                        <td width="43%"><?php echo $warna;?></td>
                      </tr>
                      <tr>
                        <td width="17%"><strong>Size<strong></td>
                        <td width="43%"><?php echo $size;?></td>
                      </tr>
                      <tr>
                        <td width="17%"><strong>Merek<strong></td>
                        <td width="43%"><?php echo $merek;?></td>
                      </tr>
                      <tr>
                    <td colspan="3">
                        <h5>Deskripsi</h5>
                        <p><?php echo $deskripsi;?></p>
                        </td>
                    </tr>
 <?php }?>
</table>
