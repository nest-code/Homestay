<?php
  include "../koneksi/koneksi.php";
  $sql = mysqli_query ($koneksi, "select id_homestay,lat,lng from tb_homestay ");
  $x = $sql->fetch_assoc();
?>

<!DOCTYPE html>
<html>
  <head>
    <!-- map leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
  
  </head>


<div class="col-sm-9">
<h2><small>Data Homestay</small></h2>
<hr>

<div class="panel panel-default">
  <div class="panel-heading">
      <h4>Lokasi Persebaran Homestay</h4>
  </div>
  <div class="panel-body">
<style media="screen">
  #mapid { 
    height: 500px;
    left-margin: 100 px;
    }
</style>



<div id="mapid"></div>
<script type="text/javascript">
  var mymap = L.map('mapid').setView([<?php echo $x['lat'];  ?>, <?php  echo $x['lng']; ?>], 12);
  L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', 
  {
    maxZoom: 18,
    title: 'Courtyard by Marriott',
    id: 'mapbox.streets'
  }).addTo(mymap);

  // var markersx = new google.maps.Markerx({
  //   position: mymap,
  //   maps: maps,
  //   title: 'Hello World!'
  // });

  <?php
  include "../koneksi/koneksi.php";
  $sql = mysqli_query ($koneksi, "select id_homestay,lat,lng from tb_homestay ");
  while ($result = $sql->fetch_assoc()) {
  ?>    
  var marker = L.marker([<?php echo $result['lat'];  ?>, <?php  echo $result['lng']; ?>]).addTo(mymap);
  <?php } ?>

</script>

</html>


    </div>
</div>
</div>
