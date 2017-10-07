<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Perpustakaan Ekonomi</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <!-- Meta, title, CSS, favicons, etc. -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap -->
          <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
          <!-- Font Awesome -->
          <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
          <!-- iCheck -->
          <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

            <!-- Datatables -->
            <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
            <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
            <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
            <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
            <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">


      <!-- Custom Theme Style -->
      <link href="../css/custom.css" rel="stylesheet">

    </head>

    <?php
    session_start();
    $user=$_SESSION['operator'];
    if (isset ($_SESSION['operator']) !=NULL) { ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title">
                <i class="fa fa-home"></i> <span>PerpusEkonomi</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="assets/img/img.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Operator</span>
                <?php
                        include '../connection.php';
                        $opprofile=mysql_query("SELECT * from operator WHERE kd_op='$user'");
                        while ($opname=mysql_fetch_assoc($opprofile))
                        {
                          echo '<a href="dashboard.php?p=view/profile.php"><h2>'.$opname['nama_op'].'</h2></a></center>';
                          $OPname=$opname['nama_op'];
                        }
                ?>
                <br>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Managemen</h3>
                <ul class="nav side-menu">
                  <!-- Managemen Anggota -->
                  <li><a><i class="fa fa-group"></i> Anggota <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?p=view/tambahanggota.php">Tambah Anggota</a>
                      </li>
                      <li><a href="?p=view/dataanggota.php">Data Anggota</a>
                      </li>
                    </ul>
                  </li>

                  <!-- Managemen Buku -->
                  <li><a><i class="fa fa-book"></i> Buku <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?p=view/tambahbuku.php">Tambah Buku</a>
                      </li>
                      <li><a href="?p=view/databuku.php">Data Buku</a>
                      </li>
                      <!-- Managemen Kategori Buku -->
                      <li><a><i class="fa fa-sitemap"></i> Kategori Buku <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="?p=view/tambahkategori.php">Tambah Kategori Buku</a>
                          </li>
                          <li><a href="?p=view/datakategori.php">Data Kategori Buku</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>

                  <!-- Managemen Data Pinjaman -->
                  <li><a><i class="fa fa-newspaper-o"></i> Pinjaman Buku <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?p=view/tambahpinjaman.php">Tambah Pinjaman</a>
                      </li>
                      <li><a href="?p=view/datapinjaman.php">Data Pinjaman</a>
                      </li>
                    </ul>
                  </li>

                  <!-- Managemen Data Prodi -->
                  <li><a><i class="fa fa-graduation-cap"></i> Data Prodi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?p=view/tambahprodi.php">Tambah Prodi</a>
                      </li>
                      <li><a href="?p=view/dataprodi.php">Data Prodi</a>
                      </li>
                    </ul>
                  </li>

                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a  href="../logout.php" data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="assets/img/img.png" alt=""><?php echo $OPname; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="dashboard.php?p=view/profile.php">  Profile</a>
                    </li>
                    <!-- <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li> -->
                    <li>
                      <a href="javascript:;">Help</a>
                    </li>
                    <li><a href= <?php
                      echo '../logout.php?user=operator'; ?> ><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">1</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image">
                                          <img src="../assets/img/user.png" alt="Profile Image" />
                                      </span>
                        <span>
                                          <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                                          NPM 12345 Belum Di Aktifkan Sebagai Anggota, Mohon Di Aktifkan Segera..
                                      </span>
                      </a>
                    </li>
                    <!-- <li>
                      <a>
                        <span class="image">
                                          <img src="assets/img/img.png" alt="Profile Image" />
                                      </span>
                        <span>
                                          <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                                          Film festivals used to be do-or-die moments for movie makers. They were where...
                                      </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image">
                                          <img src="assets/img/img.png" alt="Profile Image" />
                                      </span>
                        <span>
                                          <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                                          Film festivals used to be do-or-die moments for movie makers. They were where...
                                      </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image">
                                          <img src="assets/img/img.png" alt="Profile Image" />
                                      </span>
                        <span>
                                          <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                                          Film festivals used to be do-or-die moments for movie makers. They were where...
                                      </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul> -->
                </li>

              </ul>
            </nav>
          </div>

        </div>
        <!-- /top navigation -->


        <!-- page content -->
        <div class="right_col" role="main">
          <?php
      		$p=isset ($_GET['p']) ? $_GET['p'] : 'view/dataanggota.php';
      		if ($p=='view/dataanggota.php' || $p=='view/databuku.php' || $p=='view/datapinjaman.php' ) {?>

                  <div class="row top_tiles">
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                        <div class="icon"><i class="fa fa-book"></i>
                        </div>
                        <div class="count"><?php
                        include '../connection.php';
                        $sql = mysql_query("SELECT SUM(jumlah) as total FROM buku");
                        $row = mysql_fetch_array($sql);
                        echo $row['total'];
                         ?></div>
                        <h3>Banyak Buku</h3>
                        <p>Perpustakaan Fakultas Ekonomi.</p>
                      </div>
                    </div>

                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                        <div class="icon"><i class="fa fa-group"></i>
                        </div>
                        <div class="count"><?php
                        include '../connection.php';
                        $record=mysql_query("SELECT * from anggota where status='aktif'");
                        echo mysql_num_rows($record);
                         ?></div>
                        <h3>Banyak Anggota</h3>
                        <p>Perpustakaan Fakultas Ekonomi.</p>
                      </div>
                    </div>

                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                        <div class="icon"><i class="fa fa-book"></i>
                        </div>
                        <div class="count"><i class="fa fa-book"></i></div>
                        <h3>Buku Popular</h3>
                        <p>Buku Terbanyak Di Pinjam.
                        </p>
                      </div>
                    </div>

                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                        <div class="icon"><i class="fa fa-user"></i>
                        </div>
                        <div class="count"><i class="fa fa-user"></i></div>
                        <h3>Anggota Popular</h3>
                        <p>Anggota Sering Meminjam.</p>
                      </div>
                    </div>
                  </div>
                <?php }?>
            <div class="">
            <?php
            $p=isset ($_GET['p']) ? $_GET['p'] : 'view/dataanggota.php';
            include $p; ?>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Perpustakaan Ekonomi
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->


            <!-- jQuery -->
            <script src="../vendors/jquery/dist/jquery.min.js"></script>
            <!-- Bootstrap -->
            <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
            <!-- FastClick -->
            <script src="../vendors/fastclick/lib/fastclick.js"></script>
            <!-- NProgress -->
            <script src="../vendors/nprogress/nprogress.js"></script>
            <!-- iCheck -->
            <script src="../vendors/iCheck/icheck.min.js"></script>

           <!-- Custom Theme Scripts -->
           <script src="../js/custom.js"></script>

           <!-- Datatables -->
           <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
           <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
           <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
           <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
           <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
           <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
           <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
           <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
           <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
           <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
           <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
           <script src="../vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
           <script src="../vendors/jszip/dist/jszip.min.js"></script>
           <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
           <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

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
