<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homestay</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/js/dataTables.bootstrap.css">
  <link rel="stylesheet" href="../assets/js/dataTables.bootstrap.js">
  <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
  <link href="../assets/css/sweetalert.css" rel="stylesheet">

  <!-- map leaflet -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
</head>
<body>
<div class="container-fluid">
      <div class="row content1">
        <div class="col-sm-3 sidenav">
          <div class="page-header">
            <!-- <a href="index.php?halaman=hal_monitoring"><img src="../assets/img/logo.png" class="img-responsive" alt="logo"></a> -->
          </div>
          <ul class="nav nav-pills nav-stacked">
            <!-- <li><a href="?halaman=hal_sampah">DATA SAMPAH</a></li> -->
            <li><a href="?halaman=homestay">DATA HOMESTAY</a></li>
            <li><a href="?halaman=peta">PETA PERSEBARAN HOMESTAY</a></li>

            <!-- <li><a href="?halaman=hal_monitoring">MONITORING</a></li> -->
            
            <li><a href="logout.php">KELUAR</a></li>
          </ul>
        </div>
        <?php
          include 'page_admin.php';
        ?>
</div>
</div>

<footer class="container-fluid">
    <p>CopyRight@MAPACCING</p>
</footer>

  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/sweetalert.min.js"></script>
  <script  src="../assets/js/js/jquery.tinymce.min.js"></script>
  <script  src="../assets/js/js/tinymce.min.js"></script>
  <script type="text/javascript">
  tinymce.init({
    selector: '#detail_informasi',
    height: 350,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code help wordcount'
  ],
  toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css']
  });
  </script>

  <script src="../assets/js/jquery.dataTables.js"></script>
   <script src="../assets/js/dataTables.bootstrap.js"></script>
       <script>
           $(document).ready(function () {
               $('#dataTables-example').dataTable();
           });
        </script>

</body>
</html>
<!-- <script type="text/javascript">
setTimeout(function(){
 window.location.reload(1);
}, 5000);
</script> -->
