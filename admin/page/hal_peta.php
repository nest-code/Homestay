<div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Lokasi</h1>
            <a href="?halaman=beranda" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-back fa-sm text-white-50"></i>Kembali</a>
          </div>
          <div class="row">
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-12">
                <div class="card-header py-12">
                  <h6 class="m-0 font-weight-bold text-primary">Lokasi Persebaran Homestay</h6>
                </div>
                <div class="card-body">
                <?php
                include "../koneksi/koneksi.php";
                $sql = mysqli_query ($koneksi, "select id_homestay,lat,lng from tb_homestay ");
                $x = $sql->fetch_assoc();
                ?>
                <div class="col-sm-12">
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

                <?php
                include "../koneksi/koneksi.php";
                $sql = mysqli_query ($koneksi, "select id_homestay,lat,lng from tb_homestay ");
                while ($result = $sql->fetch_assoc()) {
                ?>    
                var marker = L.marker([<?php echo $result['lat'];  ?>, <?php  echo $result['lng']; ?>]).addTo(mymap);
                <?php } ?>

                </script>


                </div>
                </div>
              </div>
            </div>
          </div>
        </div>


