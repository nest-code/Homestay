<?php
include "../koneksi/koneksi.php";
if(isset($_POST['kirim'])){


$id_sampah=$_POST['id_sampah'];
$lat=$_POST['lat'];
$lng=$_POST['lng'];


$sql = "insert into data_sampah (id_sampah, lat, lng)values('$id_sampah','$lat','$lng')";
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
    window.location="?halaman=hal_sampah";
  });
  </script>
  <?php
    }
}
?>
