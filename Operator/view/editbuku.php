<!DOCTYPE html>
<html>
  <body>
    <?php
    $kdbuku=$_GET['kdbuku'];
    ?>
                  <?php include '../connection.php';
                  $sql=mysql_query("SELECT * FROM buku WHERE kd_buku='$kdbuku'");
                  while ($row = mysql_fetch_assoc($sql))
                  { ?>
                  <form class="form-horizontal form-label-left" action="controller/updatebuku.php" name="register" method="post">
                  <span class="section"><center>Edit Data Buku</center></span>

                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"for="kdbuku">Masukan Kode Buku<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="kdbuku" value="<?php echo $row['kd_buku']; ?>" type="text" name="kdbuku" class="form-control" placeholder="Kode buku" required>
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jdlbuku">Masukan Judul Buku<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input value="<?php echo $row['jdl_buku']; ?>" type="text" name="jdlbuku" class="form-control" placeholder="Judul buku" required>
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ktgbuku">Masukan Kode Kategori Buku<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select name="ktgbuku" class="form-control">
                        <?php
                        $sql=mysql_query("SELECT * FROM kategori_buku");
                        while ($record=mysql_fetch_assoc($sql))
                        {
                          if ($record['kd_ktg_buku']==$row['kd_ktg_buku'])
                          {
                           echo '<option selected="selected">';
                          }
                          else
                          {
                             echo '<option>';
                          }
                          echo $record['nama_ktg'].'</option>';
                        } ?>
                      </select>
                      </div>
                  </div>


                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengarang">Masukan Pengarang<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input value="<?php echo $row['pengarang']; ?>" type="pengarang" name="pengarang" class="form-control" placeholder="Pengarang">
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="penerbit">Masukan Penerbit<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input value="<?php echo $row['penerbit']; ?>" type="text" name="penerbit" class="form-control" placeholder="Penerbit" required>
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jumlah">Masukan Jumlah<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input value="<?php echo $row['jumlah']; ?>" type="text" name="jumlah" class="form-control" placeholder="jumlah" required>
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rakbuku">Masukan Rak Buku<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input value="<?php echo $row['rak_buku']; ?>" type="text" name="rakbuku" class="form-control" placeholder="Rak buku" required>
                    </div>
                  </div>


                  <div class="col-md-6 col-md-offset-3">
                    <button id="send" type="submit" class="btn btn-lg btn-primary">UBAH</button>
                    <a href="../Operator/dashboard.php?p=view/databuku.php"><button type="button" name="button" class="btn btn-lg btn-danger">BATAL</button></a>
                  </div>
                  </form>

                  <?php } ?>
              <!-- /page content -->
  </body>
</html>
