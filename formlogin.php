<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="css/custom.css" rel="stylesheet">
</head>
  <body style="background:#F7F7F7;">

        <div>
          <img class="img-responsive" width="100%/9" src="assets/img/header.jpg" alt="" />
        </div>

    <div id="wrapper">
      <div id="login" class=" form">
        <section class="login_content">
          <form action="login.php" method="post">
            <h1>Login Form</h1>
            <div>
              <input type="text" name="username" class="form-control" placeholder="Username" required="" />
            </div>
            <div>
              <input type="password" name="password" class="form-control" placeholder="Password" required="" />
            </div>
            <div>
              <button class="btn btn-primary btn-lg submit" type="submit" name="button">LOGIN</button>
              <a href="index.php"><button type="button" name="button"  class="btn btn-lg btn-danger">BATAL</button></a>
            </div>

            <div class="clearfix"></div>
            <div class="separator">

              <p class="change_link">Belum Memiliki Akun ?
                <a href="formregister.php"> Buat Akun Disini </a>
              </p>
              <div class="clearfix"></div>
              <br />
              <div>
              <a href="index.php">   <h1><i class="fa fa-home" style="font-size: 26px;"></i> Perpustakaan Ekonomi</h1> </a>
                <p>©2016 All Rights Reserved. Kelompok 2 Sistem Informasi</p>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </body>
</html>
