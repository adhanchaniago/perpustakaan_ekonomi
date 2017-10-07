<!DOCTYPE html>
<html>
  <body>
  <?php
  $kdprodi=$_GET['kd_prodi']; ?>

              <!-- page content -->
                  <?php include '../connection.php';
                  $sql=mysql_query("SELECT * FROM prodi WHERE kd_prodi='$kdprodi'");
                  while ($row = mysql_fetch_assoc($sql));
                  { ?>
                  <form class="form-horizontal form-label-left" <?php echo 'action="controller/updateprodi.php?kd_prodi='.$kdprodi.'"'; ?> method="post">
                  <span class="section"><center>Edit Data Prodi</center></span>

                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kd_prodi">Ubah Kode Prodi<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input value=<?php echo '"'.$kdprodi.'"' ?> type="text" name="kd_prodi" class="form-control" placeholder="Kode Prodi" required>
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_prodi">Ubah Nama Prodi<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input value=<?php echo '"'.$row['nama_prodi'].'"' ?> type="text" name="nama_prodi" class="form-control" placeholder="Nama Prodi" required>
                    </div>
                  </div>


                  <div class="col-md-6 col-md-offset-3">
                    <button id="send" type="submit" class="btn btn-lg btn-primary">UBAH</button>
                    <a href="../Operator/dashboard.php?p=view/dataprodi.php"><button type="button" name="button" class="btn btn-lg btn-danger">BATAL</button></a>
                  </div>
                  </form>

                  <?php } ?>

              <!-- /page content -->
  </body>
</html>
