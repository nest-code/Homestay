<div class="col-sm-9">
<h2><small>Data Homestay</small></h2>
<hr>
<form method="" class="form-group"  align="right">
  <a  href="?halaman=homestay&aksi=tambah_homestay" class="btn btn-info" title="tambah">
    <span class="glyphicon glyphicon-check"></span> Tambah Data
  </a>
</form>
<div class="panel panel-default">
  <div class="panel-heading">
       <h4>Data Homestay</h4>
  </div>
  <div class="panel-body">
      <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                  <tr>
                      <th class="text-center">No</th>
                      <!-- <th class="text-center">ID Homestay</th>  -->
                      <th class="text-center">Nama</th>
                      <th class="text-center">Alamat</th>
                      <th class="text-center">No HP</th>
                      <th class="text-center">Lokasi</th>
                      <th class="text-center">Aksi</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                    include 'backend/select_homestay.php';
                  ?>
              </tbody>
           </table>
       </div>
   </div>
</div>
</div>
