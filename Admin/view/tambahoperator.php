<!DOCTYPE html>
<html lang="en">
<body>
        <form class="form-horizontal form-label-left" action="../Admin/controller/inputoperator.php" method="post">
          <span class="section"><center>Input Data Oprator</center></span>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"for="kdbuku">Masukan Kode Operator<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="kdop" type="text" name="kdop" class="form-control" placeholder="Kode Operator" required>
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jdlbuku">Masukan Nama Operator<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="namaop" type="text" name="namaop" class="form-control" placeholder="Nama Operator" required>
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ktgbuku">Masukan No Telp<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="notelp" type="text" name="notelp" class="form-control" placeholder="Nomor Telp" required>
          </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengarang">Masukan Email<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="email" type="email" name="email" class="form-control" placeholder="Pengarang">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="penerbit">Masukan Username<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="username" type="text" name="username" class="form-control" placeholder="username" required>
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jumlah">Masukan Password<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="password" type="password" name="password" class="form-control" placeholder="password" required>
            </div>
          </div>

          <div class="col-md-6 col-md-offset-3">
            <button id="send" type="submit" class="btn btn-lg btn-primary">TAMBAH</button>
            <a href="dashboard.php?p=view/dataoperator.php"><button type="button" name="button" class="btn btn-lg btn-danger">BATAL</button></a>
          </div>
        </form>
        </body>
      </html>
