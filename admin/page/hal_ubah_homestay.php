<?php
include 'backend/update_homestay.php';
include "../koneksi/koneksi.php";
$id = @$_GET['id'];

$sql = mysqli_query ($koneksi, "select * from tb_homestay where id_homestay='$id'");
$result = $sql->fetch_assoc();
    ?>
<div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Homestay</h1>
            <a href="?halaman=homestay" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-back fa-sm text-white-50"></i> Kembali</a>
          </div>
          <div class="row">
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-12">
                <div class="card-header py-12">
                  <h6 class="m-0 font-weight-bold text-primary">Data Homestay</h6>
                </div>
                <div class="card-body">
                <div class="col-md-9">
  
    <form class="form-horizontal" id="form" action="" method="post" enctype="multipart/form-data">
          <div class="form-group has-feedback">
            <div class="col-md-12">
                <label>Nama Homestay:</label>
            </div>
            <div class="col-sm-6">
              <i class="form-control-feedback"></i>
              <input type="hidden" class="form-control" name="id_homestay" value="<?php echo $id ?>" required>
              <input type="text" class="form-control" name="nama" value="<?php echo $result['nama'];?>" required>
            </div>
          </div>

          <div class="form-group has-feedback">
            <div class="col-md-12">
                <label> Alamat </label>
            </div>
            <div class="col-sm-6">
              <i class="form-control-feedback"></i>
              <input type="text" class="form-control" name="alamat" value="<?php echo $result['alamat'];?>"  required>
            </div>
          </div>

          <div class="form-group has-feedback">
            <div class="col-md-12">
                <label>No Hp</label>
            </div>
            <div class="col-sm-6">
              <i class="form-control-feedback"></i>
              <input type="text" class="form-control" name="no_hp" value="<?php echo $result['no_hp'];?>" maxlength="13"  required>
            </div>
          </div>

  

          <div class="form-group has-feedback">
            <div class="col-md-12">
                <label> Lokasi Homestay :</label>
            </div>
            <div class="col-sm-12">
              <div id="mapid" style="height: 300px"></div>
              <br>
              <input type="hidden" name="lat" id="lat" value="">
              <input type="hidden" name="lng" id="lng" value="">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-6">
              <input type="submit"  class="btn btn-primary"  name="kirim" value="Simpan">
              <input type="reset"   class="btn btn-default"  nama="reset" value="Reset">
            </div>
          </div>
    </form>
</div>
                
               
                </div>
              </div>
            </div>
          </div>
        </div>

<script type="text/javascript">

var mymap = L.map('mapid').setView([-7.747074, 110.355320], 12);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
  maxZoom: 18,
  id: 'mapbox.streets'
}).addTo(mymap);

var marker = L.marker([<?php echo $result['lat'];?>, <?php echo $result['lng'];?>]).addTo(mymap);
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

