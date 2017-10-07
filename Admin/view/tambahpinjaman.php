<!DOCTYPE html>
<html lang="en">
<body>
        <form class="form-horizontal" action="../Admin/controller/inputpinjaman.php" method="post">
        <span class="section"><center>Daftar Anggota</center></span>
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="npm">Pilih Nomor Pokok Mahasiswa<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <select name="npm" class="form-control" required>
            <?php
            $sql=mysql_query("SELECT * FROM anggota where status='aktif'");
            while ($record=mysql_fetch_assoc($sql))
            {
              echo '<option value="'.$record['npm'].'">'.$record['npm'].' - '.$record['nama_anggota'].'</option>';
            }
            ?>
            </select>
          </div>
        </div>

        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kdbuku1">Pilih Buku Ke 1<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <select id="kdbuku1" name="kdbuku1" class="form-control" required>
            <option value="none">None</option>
            <?php
            $sql=mysql_query("SELECT * FROM buku");
            while ($record=mysql_fetch_assoc($sql))
            {
              echo '<option value="'.$record['kd_buku'].'">'.$record['kd_buku'].' - '.$record['jdl_buku'].'</option>';
            }
            ?>
            </select>
            </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kdbuku1">Pilih Buku Ke 2<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select id="kdbuku2" name="kdbuku2" class="form-control" required>
                <option value="none">None</option>
                <?php
                $sql=mysql_query("SELECT * FROM buku");
                while ($record=mysql_fetch_assoc($sql))
                {
                  echo '<option value="'.$record['kd_buku'].'">'.$record['kd_buku'].' - '.$record['jdl_buku'].'</option>';
                }
                ?>
                </select>
                </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kdbuku1">Pilih Buku Ke 3<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select id="kdbuku3" name="kdbuku3" class="form-control" required>
                    <option value="none">None</option>
                    <?php
                    $sql=mysql_query("SELECT * FROM buku");
                    while ($record=mysql_fetch_assoc($sql))
                    {
                      echo '<option value="'.$record['kd_buku'].'">'.$record['kd_buku'].' - '.$record['jdl_buku'].'</option>';
                    }

                    ?>
                    </select>
                    </div>
                    </div>

                    <div class="col-md-6 col-md-offset-3">
                      <button id="send" type="submit" class="btn btn-lg btn-primary">TAMBAH</button>
                      <a href="dashboard.php?p=view/datapeminjaman.php"><button type="button" name="button"  class="btn btn-lg btn-danger">BATAL</button></a>
                    </div>
                  </form>
                  </body>
                </html>
