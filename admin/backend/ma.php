<!DOCTYPE html>
<html>
  <head>
    <!-- map leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
  </head>
  <body>
    <h3>Lokasi Tempat Sampah</h3>
    <style media="screen">
      #mapid { height: 600px; }
    </style>
    <div id="mapid"></div>

    <script type="text/javascript">
      var mymap = L.map('mapid').setView([-7.747074, 110.355320], 15);

    	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    		maxZoom: 18,
    		id: 'mapbox.streets'
    	}).addTo(mymap);

      var marker = L.marker([-7.747074, 110.355320]).addTo(mymap);

      // function klik(e) {
      //   marker.setLatLng(e.latlng);
      // }
      // mymap.on('click',klik);
    </script>

  </body>
</html>