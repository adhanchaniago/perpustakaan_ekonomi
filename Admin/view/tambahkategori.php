<!DOCTYPE html>
<html lang="en">
<body>
        <form class="form-horizontal form-label-left" action="../Admin/controller/inputkategori.php" method="post">
          <span class="section"><center>Input Data Kategori Buku</center></span>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"for="kdktgbuku">Masukan Kode Kategori Buku<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="kdktgbuku" type="text" name="kdktgbuku" class="form-control" placeholder="Kode kategori buku" required>
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jdlbuku">Masukan Nama Kategori Buku<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="namaktg" type="text" name="namaktg" class="form-control" placeholder="Nama kategori buku" required>
            </div>
          </div>

          <div class="col-md-6 col-md-offset-3">
            <button id="send" type="submit" class="btn btn-lg btn-primary">TAMBAH</button>
            <a href="dashboard.php?p=view/datakategori.php"><button type="button" name="button" class="btn btn-lg btn-danger">BATAL</button></a>
          </div>
        </form>
        </body>
      </html>
