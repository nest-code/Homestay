<?php
  $halaman = @$_GET['halaman'];
  $aksi = @$_GET['aksi'];

if ($halaman =="hal_sampah") {
        if ($aksi == "") {
          include'hal_datasampah.php';
        }elseif ($aksi == "select_pengumuman") {
          include 'data/select_sampah.php';
        }elseif ($aksi == "tambah_sampah"){
          include 'hal_tambah_sampah.php';
        }elseif ($aksi == "hapus_sampah"){
          include 'data/hapus_sampah.php';
        }elseif ($aksi == "edit_sampah"){
          include 'data/edit_sampah.php';
        }

}elseif ($halaman =="homestay"){
        if ($aksi== "") {
          include'page/hal_homestay.php';
        }elseif ($aksi == "select_pengumuman") {
          include 'data/select_sampah.php';
        }elseif ($aksi == "tambah_homestay"){
          include 'backend/tambah_homestay.php';
        }elseif ($aksi == "hapus_homestay"){
          include 'backend/hapus_homestay.php';
        }elseif ($aksi == "edit_sampah"){
          include 'data/edit_sampah.php';
        }

}elseif ($halaman =="peta"){
        if ($aksi== "") {
          include'page/hal_peta.php';
        }
        
}

?>
