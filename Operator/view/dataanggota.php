<!DOCTYPE html>
<html lang="en">
  <body>
        <!-- page content -->
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabel Data Anggota</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
					          <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>NPM</th>
                          <th>Nama</th>
                          <th>Jenis Kelamin</th>
                          <th>Alamat</th>
                          <th>Email</th>
                          <th>No.Telp</th>
                          <th>Program Studi</th>
                          <th>Status</th>
                          <th>Managemen Data</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        include '../connection.php';
                        $sql=mysql_query("SELECT * FROM anggota,prodi WHERE anggota.kd_prodi=prodi.kd_prodi");
                        while ($row = mysql_fetch_array($sql))
                        {
                          echo
                          ('
                          <tr>
                            <td>'.$row['npm'].'</td>
                            <td>'.$row['nama_anggota'].'</td>
                            <td>'.$row['jeniskel'].'</td>
                            <td>'.$row['almt'].'</td>
                            <td>'.$row['email'].'</td>
                            <td>'.$row['no_telp'].'</td>
                            <td>'.$row['nama_prodi'].'</td>
                            <td>'.$row['status'].'</td>
                            <td>
                                <a href="dashboard.php?p=view/editanggota.php'.'&npm='.$row['npm'].'">
                                  <button type="button" class="btn btn-primary btn-group btn-group-lg" name="button">
                                  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                                </a>
                                <a href="./controller/hapusanggota.php?npm='.$row['npm'].'">
                                  <button type="button" class="btn btn-danger btn-group btn-group-lg" name="button">
                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                                </a>
                            </td>
                          </tr>');
                        }
                         ?>
                    </tbody>
                    </table>
                  </div>
				            </div>
                </div>
              </div>
            </div>
        <!-- /page content -->

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>

    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        var table = $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->
  </body>
</html>
