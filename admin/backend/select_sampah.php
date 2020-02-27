<?php
include "../koneksi/koneksi.php";

$no=1;
// $sql = mysqli_query ($koneksi, "select * from data_sampah order by id_sampah desc limit 1");
$sql = mysqli_query ($koneksi, "select * from data_sampah");
while ($result = $sql->fetch_assoc()) {
?>
        <td class="text-center"><?php echo $no++; ?></td>
        <td class="text-center"><?php echo $result['id_sampah']; ?></td>
        <td class="text-center"><?php echo $result['jarak_sampah']; ?> cm</td>
        <td class="text-center"><?php echo $result['tgl_waktu']; ?></td>
        <?php
        if($result['status']=='kosong'){
          ?>
          <td  style="background-color:#4CAF50" class="text-center"><?php echo $result['status']; ?></td>
          <?php } elseif ($result['status']=='penuh') {
          ?>
          <td  style="background-color:red" class="text-center"><?php echo $result['status']; ?></td>
          <?php } elseif ($result['status']=='setengah penuh') {
          ?>
          <td  style="background-color:yellow" class="text-center"><?php echo $result['status']; ?></td>
          <?php
          } else{
          ?>
          <td class="text-center"><?php echo $result['status']; ?></td>
          <?php } ?>

        <!-- <td align="center">
          <a href="data/map.php" target="_blank" class="btn btn-info" title="Edit"><span class="glyphicon glyphicon-eye-open"></span> Lokasi<a> -->

 <td align="center">
          <a href="data/map.php?id_sampah=<?php  echo $result['id_sampah']; ?>" target="_blank" class="btn btn-info" title="Edit"><span class="glyphicon glyphicon-eye-open"></span> Lokasi</a>
        </td>


        <td align="center">


        <a href="?halaman=hal_sampah&aksi=edit_sampah&id=<?php echo $result ['id_sampah']; ?>" class="btn btn-info" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>

        <a href="?halaman=hal_sampah&aksi=hapus_sampah&id=<?php echo $result ['id_sampah']; ?>"class="btn btn-danger" title="Hapus"><span class="glyphicon glyphicon-trash"></span></a>
        </td>
      </tr>
    <?php }
    ?>
