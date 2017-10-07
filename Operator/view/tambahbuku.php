<!DOCTYPE html>
<html lang="en">
<body>
        <form class="form-horizontal form-label-left" action="../Operator/controller/inputbuku.php" method="post">
          <span class="section"><center>Input Data Buku</center></span>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"for="kdbuku">Masukan Kode Buku<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="kdbuku" type="text" name="kdbuku" class="form-control" placeholder="Kode buku" required>
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jdlbuku">Masukan Judul Buku<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="jdlbuku" type="text" name="jdlbuku" class="form-control" placeholder="Judul buku" required>
            </div>
          </div>

          <div class="item form-group">
            <label id="kdbuku" class="control-label col-md-3 col-sm-3 col-xs-12" for="ktgbuku">Masukan Kode Kategori Buku<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select name="ktgbuku" class="form-control">
                <?php
                include '../connection.php';
                $sql=mysql_query("SELECT nama_ktg FROM kategori_buku");
                while ($record=mysql_fetch_assoc($sql))
                {
                  echo '<option>'.$record['nama_ktg'].'</option>';
                } ?>
          </select>
          </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengarang">Masukan Pengarang<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="pengarang" type="pengarang" name="pengarang" class="form-control" placeholder="Pengarang">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="penerbit">Masukan Penerbit<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="penerbit" type="text" name="penerbit" class="form-control" placeholder="Penerbit" required>
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jumlah">Masukan Jumlah<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="jumlah" type="text" name="jumlah" class="form-control" placeholder="jumlah" required>
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"for="rakbuku">Masukan Rak Buku<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="rakbuku" type="text" name="rakbuku" class="form-control" placeholder="Rak buku" required>
            </div>
          </div>

          <div class="col-md-6 col-md-offset-3">
            <button id="send" type="submit" class="btn btn-lg btn-primary">TAMBAH</button>
            <a href="dashboard.php?p=view/databuku.php"><button type="button" name="button" class="btn btn-lg btn-danger">BATAL</button></a>
          </div>
        </form>
        </body>
      </html>
