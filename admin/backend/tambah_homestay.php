<?php
include 'backend/insert_homestay.php';
?>
<div class="col-md-9">
    <h2><small>Tambah Kotak Sampah</small></h2>
    <hr>
    <form class="form-horizontal" id="form" action="" method="post" enctype="multipart/form-data">

          <div class="form-group has-feedback">
            <div class="col-md-12">
                <label> Nama Homestay:</label>
            </div>
            <div class="col-sm-6">
              <i class="form-control-feedback"></i>
              <input type="text" class="form-control" name="nama" required>
            </div>
          </div>

          <div class="form-group has-feedback">
            <div class="col-md-12">
                <label> Alamat</label>
            </div>
            <div class="col-sm-6">
              <i class="form-control-feedback"></i>
              <input type="text" class="form-control" name="alamat" required>
            </div>
          </div>

          <div class="form-group has-feedback">
            <div class="col-md-12">
                <label>No Hp</label>
            </div>
            <div class="col-sm-6">
              <i class="form-control-feedback"></i>
              <input type="text" class="form-control" name="no_hp" required>
            </div>
          </div>

          <div class="form-group has-feedback">
            <div class="col-md-12">
                <label>Alamat</label>
            </div>
            <div class="col-sm-6">
              <i class="form-control-feedback"></i>
             <textarea name="alamat" id=""  class="form-control"></textarea>
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


<script type="text/javascript">

  var mymap = L.map('mapid').setView([-7.747074, 110.355320], 12);

  L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    id: 'mapbox.streets'
  }).addTo(mymap);

  var marker = L.marker([-7.747074, 110.355320]).addTo(mymap);
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
