<div class="col-sm-9">
<h2><small>Data Sampah</small></h2>
<hr>
<form method="" class="form-group"  align="right">
  <a  href="?halaman=hal_sampah&aksi=tambah_sampah" class="btn btn-info" title="tambah">
    <span class="glyphicon glyphicon-check"></span> Tambah Kotak Sampah
  </a>
</form>
<div class="panel panel-default">
  <div class="panel-heading">
       <h4>Keseluruhan Sampah</h4>
  </div>
  <div class="panel-body">
      <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                  <tr>
                      <th class="text-center">No</th>
                      <th class="text-center">Id Sampah</th>
                      <th class="text-center">Ketinggian (cm)</th>
                      <th class="text-center">Tgl_Waktu</th>
                      <th class="text-center">Status</th>
                      <th class="text-center">Lokasi</th>
                      <th class="text-center">Aksi</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                    include 'data/select_sampah.php';
                  ?>
              </tbody>
           </table>
       </div>
   </div>
</div>
</div>
