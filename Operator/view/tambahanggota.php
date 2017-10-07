<!DOCTYPE html>
<html lang="en">
<body>

  <form class="form-horizontal form-label-left" action="../register.php?nextpage=Operator/dashboard.php?p=view/dataanggota.php" method="post" novalidate>
    <span class="section"><center>Input Data Anggota</center></span>

    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="npm">Nomok Pokok Mahasiswa <span class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="npm" class="form-control col-md-7 col-xs-12" data-validate-length-range="12" data-validate-words="12" name="npm" placeholder="Nomor Pokok Mahasiswa" required="required" type="text">
      </div>
    </div>

    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama <span class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="nama" class="form-control col-md-7 col-xs-12" data-validate-length-range="20" data-validate-words="2" name="nama" placeholder="Nama" required="required" type="text">
      </div>
    </div>

    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jeniskel">Jenis Kelamin <span class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <select name="jeniskel" class="form-control">
          <option>Laki-Laki</option>
          <option>Perempuan</option>
        </select>
      </div>
    </div>

    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat <span class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <textarea id="alamat" required="required" name="alamat" class="form-control col-md-7 col-xs-12" placeholder="Alamat"></textarea>
      </div>
    </div>

    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="email" id="email" name="email" required="required" placeholder="Email" class="form-control col-md-7 col-xs-12">
      </div>
    </div>


    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telephone <span class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="tel" id="notelp" name="notelp" required="required" data-validate-length-range="8,20" placeholder="No Telp" class="form-control col-md-7 col-xs-12">
      </div>
    </div>

          <div class="item form-group">
            <label for="prodi" class="control-label col-md-3 col-sm-3 col-xs-12">Program Studi  <span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select name="prodi" class="form-control">
                <?php
                include 'connection.php';
                $sql=mysql_query("SELECT * FROM prodi");
                while ($record=mysql_fetch_assoc($sql))
                {
                  echo '<option>'.$record['nama_prodi'].'</option>';
                } ?>
                </select>
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input placeholder="Username" id="uname" class="form-control col-md-7 col-xs-12" data-validate-length-range="20" data-validate-words="2" name="uname" placeholder="Username" required="required" type="text">
            </div>
          </div>

    <div class="item form-group">
      <label for="pass" class="control-label col-md-3">Password</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input placeholder="Password" id="pass" type="password" name="pass" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
      </div>
    </div>

    <div class="col-md-6 col-md-offset-3">
      <button id="send" type="submit" class="btn btn-lg btn-primary">DAFTAR</button>
      <a href="dashboard.php?p=view/dataanggota.php"><button type="button" name="button"  class="btn btn-lg btn-danger">BATAL</button></a>
    </div>
  </form>
  </body>
</html>
