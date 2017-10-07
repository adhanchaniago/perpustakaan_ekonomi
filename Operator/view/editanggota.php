<!DOCTYPE html>
<html>
  <body>
    <?php
    $Npm=$_GET['npm'];
     ?>
      <!-- page content -->
      <?php include '../connection.php';
      $sql=mysql_query("SELECT * FROM anggota WHERE npm='$Npm'");
      while ($row = mysql_fetch_assoc($sql))
      { ?>
      <form class="form-horizontal form-label-left" action="controller/updateanggota.php" name="register" method="post">
        <span class="section"><center>Edit Data Anggota</center></span>

        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="npm">Nomor Pokok Mahasiswa<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input value="<?php echo $row['npm']; ?>" type="text" name="npm" class="form-control" placeholder="Nomor Pokok Mahasiswa" required>
          </div>
        </div>

        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namaanggota">Nama Anggota<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input value="<?php echo $row['nama_anggota']; ?>" type="text" name="namaanggota" class="form-control" placeholder="Nama Anggota" required>
            </div>
        </div>

        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jeniskel">Jenis Kelamin<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <select name="jeniskel" class="form-control" required>
              <?php
              $sql=mysql_query("SELECT jeniskel FROM anggota WHERE npm='$Npm'");
              while ($record=mysql_fetch_assoc($sql))
              {
              echo '<option selected="selected">'.$record['jeniskel'].'</option>';
              if ($record['jeniskel']=='Laki-Laki')
              {
                echo '<option>Perempuan</option>';
              }
              else
              {
                echo '<option>Laki-Laki</option>';
              }
              }
              ?>
              </select>
            </div>
        </div>

        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
          <textarea name="almt" class="form-control" rows="3" cols="100" placeholder="Alamat"><?php echo $row['almt'] ?></textarea>
            </div>
        </div>

        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="notelp">No Telp<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
          <input value="<?php echo $row['no_telp']; ?>" type="notelp" name="notelp" class="form-control" placeholder="Nomor Telp">
        </div>
        </div>

        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input value="<?php echo $row['email']; ?>" type="text" name="email" class="form-control" placeholder="Email" required>
          </div>
        </div>

        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kdprodi">Pilih Program Studi<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <select name="kdprodi" class="form-control" required>
              <?php
              $sql=mysql_query("SELECT * FROM prodi");
              while ($record=mysql_fetch_assoc($sql))
              {
                if ($record['kd_prodi']==$row['kd_prodi'])
                {
                 echo '<option selected="selected">';
                }
                else
                {
                   echo '<option>';
                }
                echo $record['nama_prodi'].'</option>';
              } ?>
              </select>
          </div>
        </div>

        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <select name="status" class="form-control">
            <?php
            $sql=mysql_query("SELECT status FROM anggota WHERE npm='$Npm'");
            while ($record=mysql_fetch_assoc($sql))
            {
            echo '<option selected="selected">'.$record['status'].'</option>';
            if ($record['status']=='aktif')
            {
              echo '<option>nonaktif</option>';
            }
            else
            {
                echo '<option>aktif</option>';
            }
            }
            ?>
            </select>
          </div>
        </div>




      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="uname">Username<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" name="uname" class="form-control" placeholder="Username" value=<?php echo $row['username'] ?> required>
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pass">Password<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="password" name="pass" class="form-control" placeholder="Password"  value=<?php echo $row['password'] ?> required>
        </div>
      </div>


      <div class="col-md-6 col-md-offset-3">
        <button id="send" type="submit" class="btn btn-lg btn-primary">UBAH</button>
        <a href="../Operator/dashboard.php?p=view/dataanggota.php"><button type="button" name="button" class="btn btn-lg btn-danger">BATAL</button></a>
      </div>
      </form>
      <?php } ?>


      <!-- /page content -->
  </body>
</html>
