<?php
  $halaman = @$_GET['halaman'];
  $aksi = @$_GET['aksi'];

if ($halaman =="homestay"){
        if ($aksi== "") {
          include'page/hal_homestay.php';
        }elseif ($aksi == "select_pengumuman") {
          include 'data/select_sampah.php';
        }elseif ($aksi == "tambah_homestay"){
          include 'page/hal_tambah_homestay.php';
        }elseif ($aksi == "hapus_homestay"){
          include 'backend/hapus_homestay.php';
        }elseif ($aksi == "edit_homestay"){
          include 'page/hal_ubah_homestay.php';
        }

}elseif ($halaman =="peta"){
        if ($aksi== "") {
          include'page/hal_peta.php';
        }
}elseif ($halaman =="beranda"){
    if ($aksi== "") {
      include'page/index.php';
    }
}elseif ($halaman =="logut"){
  if ($aksi== "") {
    include'backend/logut.php';
  }
}

?>
