<!DOCTYPE html>
<html lang="en">
<body>

  <form class="form-horizontal form-label-left" action="../Admin/controller/inputprodi.php" method="post" novalidate>
    </p>
    <span class="section"><center>Tambah Prodi</center></span>

    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kd_prodi">Kode Prodi <span class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="npm" class="form-control col-md-7 col-xs-12" data-validate-length-range="12" data-validate-words="12" name="kd_prodi" placeholder="Kode Prodi" required="required" type="text">
      </div>
    </div>

    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_prodi">Nama Prodi <span class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="nama" class="form-control col-md-7 col-xs-12" data-validate-length-range="20" data-validate-words="2" name="nama_prodi" placeholder="Nama" required="required" type="text">
      </div>
    </div>

    <div class="col-md-6 col-md-offset-3">
      <button id="send" type="submit" class="btn btn-lg btn-primary">SIMPAN</button>
      <a href="dashboard.php?p=view/dataprodi.php"><button type="button" name="button"  class="btn btn-lg btn-danger">BATAL</button></a>
    </div>
  </form>
  </body>
</html>
