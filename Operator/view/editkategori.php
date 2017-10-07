<!DOCTYPE html>
<html>
  <body>
      <?php
      $kdktgbuku=$_GET['kd_ktg_buku']; ?>

                <!-- page content -->
                    <?php include '../connection.php';
                    $sql=mysql_query("SELECT * FROM kategori_buku WHERE kd_ktg_buku='$kdktgbuku'");
                    while ($row = mysql_fetch_assoc($sql))
                    { ?>
                    <form class="form-horizontal form-label-left" action="controller/updatekategori.php" method="post">
                    <span class="section"><center>Edit Data Buku</center></span>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12"for="kdbuku">Ubah Kode Kategori Buku<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="kdktgbuku" value="<?php echo $row['kd_ktg_buku']; ?>" type="text" name="kdktgbuku" class="form-control" placeholder="Kode buku" required>
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namaktg">Ubah Nama Kategori<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input value="<?php echo $row['nama_ktg']; ?>" type="text" name="namaktg" class="form-control" placeholder="Nama Kategori Buku" required>
                      </div>
                    </div>




                    <div class="col-md-6 col-md-offset-3">
                      <button id="send" type="submit" class="btn btn-lg btn-primary">UBAH</button>
                      <a href="../Operator/dashboard.php?p=view/datakategori.php"><button type="button" name="button" class="btn btn-lg btn-danger">BATAL</button></a>
                    </div>
                    </form>

                    <?php } ?>
                <!-- /page content -->
  </body>
</html>
