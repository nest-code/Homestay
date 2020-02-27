<?php
  include "../../koneksi/koneksi.php";
  date_default_timezone_set('Asia/Jakarta');
  $d = date('y-m-d H:i:s');
  $id_sampah = 299;

  $jarak_sampah = @$_GET['jarak_sampah'];
  $serial_alat = @$_GET['serial_alat'];

  $status = 'kosong';
  if ($jarak_sampah<=19) {
    $status = 'setengah penuh';
  }
  if ($jarak_sampah<10) {
    $status = 'penuh';
  }
  $sql = "update data_sampah set jarak_sampah='$jarak_sampah',tgl_waktu='$d',status='$status' where id_sampah='$serial_alat'";
  mysqli_query($koneksi,$sql);

?>
