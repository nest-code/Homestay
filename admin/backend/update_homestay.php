<?php
include_once "../koneksi/koneksi.php";
if(isset($_POST['kirim'])) {
$id=$_POST['id_homestay'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$no_hp=$_POST['no_hp'];
$lat=$_POST['lat'];
$lng=$_POST['lng'];

$sql = "UPDATE tb_homestay SET nama='$nama', alamat='$alamat', no_hp='$no_hp', lat='$lat', lng='$lng' WHERE id_homestay='$id'";
mysqli_query($koneksi,$sql);
if ($sql){
  ?>
  <script src="../assets/js/sweetalert.min.js"></script>
  <script type="text/javascript">
  swal({
    title: "Sukses",
    text: "Data telah ditambahkan",
    icon: "success",
    confirmButtonText: "Ok",
    closeOnConfirm: false
  },
  function(){
    window.location="?halaman=homestay";
  });
  </script>
  <?php
    }
}
?>
