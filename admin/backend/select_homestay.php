<?php
include "../koneksi/koneksi.php";

$no=1;
$sql = mysqli_query ($koneksi, "select * from tb_homestay");
while ($result = $sql->fetch_assoc()) {
?>
        <td class="text-center"><?php echo $no++; ?></td>
        <td class="text-center"><?php echo $result['nama']; ?></td>
        <td class="text-center"><?php echo $result['alamat']; ?></td>
        <td class="text-center"><?php echo $result['no_hp']; ?></td>
        <td align="center">
        <a href="?halaman=homestay&aksi=edit_homestay&id=<?php echo $result ['id_homestay']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Edit</a>    
        <a href="?halaman=homestay&aksi=hapus_homestay&id=<?php echo $result ['id_homestay']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-trash fa-sm text-white-50"></i> Hapus</a>    
    </td>

      </tr>
    <?php }
    ?>


