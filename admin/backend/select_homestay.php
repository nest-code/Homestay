<?php
include "../koneksi/koneksi.php";

$no=1;
$sql = mysqli_query ($koneksi, "select * from tb_homestay");
while ($result = $sql->fetch_assoc()) {
?>
        <td class="text-center"><?php echo $no++; ?></td>
        <!-- <td class="text-center"><?php echo $result['id_homestay']; ?></td> -->
        <td class="text-center"><?php echo $result['nama']; ?></td>
        <td class="text-center"><?php echo $result['alamat']; ?></td>
        <td class="text-center"><?php echo $result['no_hp']; ?></td>

        <td align="center">
          <a href="backend/map.php?id=<?php  echo $result['id_homestay']; ?>" target="_blank" class="btn btn-info" title="Edit"><span class="glyphicon glyphicon-eye-open"></span> Lokasi</a>
        </td>
        <td align="center">
        <a href="?halaman=homestay&aksi=edit_sampah&id=<?php echo $result ['id_homestay']; ?>" class="btn btn-info" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
        <a href="?halaman=homestay&aksi=hapus_homestay&id=<?php echo $result ['id_homestay']; ?>"class="btn btn-danger" title="Hapus"><span class="glyphicon glyphicon-trash"></span></a>
        </td>
      </tr>
    <?php }
    ?>
