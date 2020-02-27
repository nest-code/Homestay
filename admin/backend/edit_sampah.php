<?php
$id_sampah = @$_GET['id'];
$ids=$id_sampah;



include '../koneksi/koneksi.php';

$sql = mysqli_query ($koneksi, "select id_sampah,lat,lng from data_sampah where id_sampah='$id_sampah'");
$result = $sql->fetch_assoc();

?>


<div class="col-md-9">
    <h2><small>Tambah Kotak Sampah</small></h2>

    <hr>
    <form class="form-horizontal" id="form" action="" method="post" enctype="multipart/form-data">

          <div class="form-group has-feedback">
            <div class="col-md-2">
                <label><h4> Serial Kotak Sampah :</h4></label>
            </div>
            <div class="col-sm-2">
              <i class="form-control-feedback"></i>
              <input type="text" class="form-control" value="<?php echo $result['id_sampah'] ?>" name="id_sampah">
              <span class="help-block">*Wajib diisi!</span>
            </div>
          </div>

          <div class="form-group has-feedback">
            <div class="col-md-2">
                <label><h4> Lokasi Kotak Sampah :</h4></label>
            </div>
            <div class="col-sm-10">
              <div id="mapid" style="height: 300px"></div>
              <br>
              <input type="hidden" name="lat" id="lat" value="">
              <input type="hidden" name="lng" id="lng" value="">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-9">
              <input type="submit"  class="btn btn-primary"  name="kirim" value="Simpan">
              <input type="reset"   class="btn btn-default"  nama="reset" value="Reset">
            </div>
          </div>
</form>
</div>
<script type="text/javascript">
var mymap = L.map('mapid').setView([<?php echo $result['lat'];  ?>, <?php  echo $result['lng']; ?>], 15);

  // var mymap = L.map('mapid').setView([-7.747074, 110.355320], 15);

  L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    id: 'mapbox.streets'
  }).addTo(mymap);

  var marker = L.marker([<?php echo $result['lat'];  ?>, <?php  echo $result['lng']; ?>]).addTo(mymap);

  // var marker = L.marker([-7.747074, 110.355320]).addTo(mymap);
  var inputLat = document.getElementById('lat');
  var inputLng = document.getElementById('lng');
  inputLat.value = marker.getLatLng().lat;
  inputLng.value = marker.getLatLng().lng;

  function klik(e) {
    marker.setLatLng(e.latlng);
    inputLat.value = marker.getLatLng().lat;
    inputLng.value = marker.getLatLng().lng;
  }
  mymap.on('click',klik);
</script>
<?php

  include '../koneksi/koneksi.php';
  $kirim =@$_POST['kirim'];

  if ($kirim) {
      $id_sampahs = $_POST['id_sampah'];
      $lat	     = $_POST['lat'];
      $lng     	 = $_POST['lng'];


      $sql = $koneksi->query("update data_sampah set id_sampah='$id_sampahs', lat='$lat',lng='$lng' where id_sampah='$ids'");


    if ($sql){
        ?>
        <script src="../assets/js/sweetalert.min.js"></script>
        <script type="text/javascript">
        swal({
          title: "Sukses",
          text: "Data berhasil diubah",
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
