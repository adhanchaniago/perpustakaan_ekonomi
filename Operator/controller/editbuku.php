<!DOCTYPE html>
<html lang="en">
<body>
<?php
include '../assets/component-dash.php';
$kdbuku=$_GET['kdbuku'];
session_start();
if (isset ($_SESSION['user']) !=NULL){ ?>


  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand active" href="../logout.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
      </div>
      <?php
      $page=isset($_GET['page']) ? $_GET['page'] : 'dataanggota.php'; ?>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li
          <?php if ($page!='profile.php' && $page!='help.php')
          echo 'class="active"';?>><a href="#"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Dashboard</a></li>
          <li <?php if ($page=='profile.php')
          echo 'class="active"';?>
          ><a href="dashboard.php?page=profile.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profile</a></li>
          <li><a href="dashboard.php?page=help.php"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> Bantuan</a></li>
          <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li></ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">

        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><center><h4>Sistem Perpustakaan<br><h5>Fakultas Ekonomi</h5></h4></center></li>
            <li>
              <center> <img src="../assets/img/op.png" width=70% class="img-responsive img-circle">
                <h3>
                  Operator
                </h3>
                <?php
                $user=$_SESSION['user'];
                include '../connection.php';
                $opprofile=mysql_query("SELECT * from operator WHERE kd_op='$user'");
                while ($opname=mysql_fetch_assoc($opprofile))
                {
                  echo '<a href="?page=profile.php"><h4 class="text-muted">'.$opname['nama_op'].'</h4></a></center>';
                }
                ?>
              </li>
              <hr>
            <li><a href="dashboard.php?page=dataanggota.php">
              <span class="glyphicon glyphicon-education" aria-hidden="true"></span> Data Anggota</a></li>
            <li class="active" ><a href="dashboard.php?page=databuku.php" class="list-group-item">
              <span class="glyphicon glyphicon-book" aria-hidden="true"></span> Data Buku</a></li>
            <li><a href="dashboard.php?page=datapinjaman.php">
              <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> Data Pinjaman</a></li>
          </ul>
        </div>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard Operator</h1>
            <div class="row placeholders">
                    <div class="col-xs-6 col-sm-3 placeholder">
                      <img src="../assets/img/buku.png" class="img-responsive" alt="Generic placeholder thumbnail">
                      <h3>Banyak Buku</h3>
                      <h4 class="text-muted">
                        <?php
                        include '../connection.php';
                        $sql = mysql_query("SELECT SUM(jumlah) as total FROM buku");
                        $row = mysql_fetch_array($sql);
                        echo $row['total'].' Buku';
                         ?></h4></h4>
                    </div>
                    <div class="col-xs-6 col-sm-3 placeholder">
                      <img src="../assets/img/anggota.png" class="img-responsive" alt="Generic placeholder thumbnail">
                      <h3>Banyak Anggota</h3>
                      <h4 class="text-muted">
                        <?php
                        include '../connection.php';
                        $record=mysql_query("SELECT * from anggota");
                        echo mysql_num_rows($record).' Anggota';
                         ?></h4>
                    </div>
                    <div class="col-xs-6 col-sm-3 placeholder">
                      <img src="../assets/img/bukudipinjam.png" class="img-responsive" alt="Generic placeholder thumbnail">
                      <h3>Buku Sering Dipinjam</h3>
                      <h4 class="text-muted">Judul Buku A</h4>
                    </div>
                    <div class="col-xs-6 col-sm-3 placeholder">
                      <img src="../assets/img/anggotaseringminjam.png" class="img-responsive" alt="Generic placeholder thumbnail">
                      <h3>Anggota Sering Meminjam</h3>
                      <h4 class="text-muted">Nama Anggota A</h4>
                    </div>
            </div>



            <?php include '../connection.php';
            $sql=mysql_query("SELECT * FROM buku WHERE kd_buku='$kdbuku'");
            while ($row = mysql_fetch_assoc($sql))
            { ?>
            <form class="form-horizontal" action="updatebuku.php" name="register" method="post">
            <h2 class="form-signin-heading">Edit Data Buku</h2>
            <label for="kdbuku">Masukan Kode Buku</label><br>
            <input value="<?php echo $row['kd_buku']; ?>" type="text" name="kdbuku" class="form-control" placeholder="Kode buku" required>

            <br>
            <label for="jdlbuku">Masukan Judul Buku</label><br>
            <input value="<?php echo $row['jdl_buku']; ?>" type="text" name="jdlbuku" class="form-control" placeholder="Judul buku" required>

            <br>
            <label for="ktgbuku">Masukan Kode Kategori Buku</label><br>
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

            <br>
            <label for="pengarang">Masukan Pengarang</label><br>
            <input value="<?php echo $row['pengarang']; ?>" type="pengarang" name="pengarang" class="form-control" placeholder="Pengarang">

            <br>
            <label for="penerbit">Masukan Penerbit</label><br>
            <input value="<?php echo $row['penerbit']; ?>" type="text" name="penerbit" class="form-control" placeholder="Penerbit" required>

            <br>
            <label for="jumlah">Masukan Jumlah</label><br>
            <input value="<?php echo $row['jumlah']; ?>" type="text" name="jumlah" class="form-control" placeholder="jumlah" required>

            <br>
            <label for="rakbuku">Masukan Rak Buku</label><br>
            <input value="<?php echo $row['rak_buku']; ?>" type="text" name="rakbuku" class="form-control" placeholder="Rak buku" required>

            <br>
            <br>
            <div class="col-md-6">
            <a href="updatebuku.php?kd_buku='.$row['kd_buku'].'">
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="simpan"><strong>EDIT</strong></button></a>
            </div>
            <div class="col-md-6">
            <a href="dashboard.php?page=databuku.php">
            <button type="button" class="btn btn-lg btn-danger btn-block" name="button">
              <strong>CANCEL</strong></button>
              <br>
            </a>
            </div>
            <br>
            </form>

            <?php } ?>

        </div>

      </div>
    </div>
  <?php
  }
  else
  {
    header('location: ../formlogin.php');
  }
  ?>
    </body>
  </html>
