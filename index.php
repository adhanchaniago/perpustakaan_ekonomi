<!DOCTYPE html>
<html lang="en">
<body>
  <?php include 'assets/component.php' ?>
  <!--naviagasi-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
        </div>

        <!--Menu-->
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-left">
            <li class="active"><a href="about.html">
              <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Tentang</a></li>
            <li><a href="help.html">
              <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> Bantuan</a></li>
          </ul>
          <!--Login Button-->
          <ul class="nav navbar-nav navbar-right">
            <li><a href="formlogin.php">
              <button type="button" class="btn btn-primary btn-group btn-group-lg" name="button">
                <span class="glyphicon glyphicon-log-in" aria-hidden="true">
                LOGIN</button>
            </a></li>
          </ul>
        </div>

      </div>
  </nav>


  <div>
    <img class="img-responsive" width="100%/9" src="assets/img/header.jpg" alt="" />
  </div>

  <div class="container">
    <marquee style="font-size:20px;">Selamat Datang Di Sistem Informasi Perpustakaan Fakultas Ekonomi</marquee>
  </div>



  <!-- Main jumbotron for a primary marketing message or call to action -->

  <div class="jumbotron">
      <center><h2>Pencarian Buku</h2></center>
      <form class="form-horizontal-center" action="caribuku.php" method="post">
        <div class="form-group form-group-lg">
          <label class="col-sm-2 control-label" for="formGroupInputLarge"></label>
          <div class="col-sm-8">
            <input class="form-control" type="text" name="caribuku" placeholder="Masukan Kata Kunci Pencarian">
          </div>
        </div>
        <button type="submit" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
      </form>
  </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->

  <hr>
      <footer>
        <center> Copiryght 2016 &copy; Kelompok 2 Sistem Informasi </center>
      </footer>
  </body>
</html>
