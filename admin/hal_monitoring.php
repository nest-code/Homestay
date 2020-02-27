<div class="col-sm-9">
  <h2>Monitoring Sampah</h2>
  <hr></hr>
<div class="row">
  <?php
    include "../koneksi/koneksi.php";

    $no=1;
    $sql = mysqli_query ($koneksi, "select * from data_sampah ");
    while ($result = $sql->fetch_assoc()) {
    ?>

 <div class="col-sm-5">
   <div align="center" class="caption">
     <h2>Kotak Sampah <?php echo $result['id_sampah'];?></h2>
   </div>
   <div class="">

       <?php
       $status=$result['status'];
         if ($result['status']=='kosong') {
                     echo '<img src="../assets/img/kosong.jpg" style="width:100%" />';
         }if  ($result['status']=='setengah penuh') {
                 echo '<img src="../assets/img/hampir-penuh.jpg" style="width:100%" />';
         }if ($result['status']=='penuh') {
                 echo '<img src="../assets/img/penuh.jpg" style="width:100%" />';
         }
        ?>
   </div>
 </div>
    <?php }
    ?>
</div>
</div>
