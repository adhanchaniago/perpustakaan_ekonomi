<!DOCTYPE html>
<html lang="en">
<body>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Tabel Data Pinjaman</h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="table-responsive">
          <table id="datatable-buttons" class="table table-striped table-bordered">
            <thead>
                <tr>
                <th>
                  NPM
                </th>
                <th>
                  Nama Anggota
                </th>
                <th>
                  Kode Buku
                </th>
                <th>
                  Judul Buku
                </th>
                <th>
                  Jumlah Pinjaman
                </th>
                <th>
                  Tanggal Pinjam
                </th>
                <th>
                  Tanggal Tempo
                </th>
                <th>
                  Tanggal Kembali
                </th>
                <th>
                  Denda
                </th>
                <th>
                  Status
                </th>
                <th>
                  Managemen Data
                </th>
              </tr>
            </thead>
            <tbody>
              <?php
              include '../connection.php';
              $sql=mysql_query("SELECT * from anggota,buku,peminjaman,transaksi_peminjaman
              WHERE anggota.npm=peminjaman.npm and buku.kd_buku=transaksi_peminjaman.kd_buku and transaksi_peminjaman.kd_peminjaman=peminjaman.kd_peminjaman");
              while ($row = mysql_fetch_array($sql))
              {
                echo
                ('<tr>
                  <td><form action="dashboard.php?page=carianggota.php" method="post"> <input class="btn btn-success btn-group btn-group-lg" name="carianggota" type="submit" value="'.$row['npm'].'"></form></td>
                  <td>'.$row['nama_anggota'].'</td>
                  <td>'.$row['kd_buku'].'</td>
                  <td>'.$row['jdl_buku'].'</td>
                  <td>'.$row['jumlah'].'</td>
                  <td>'.$row['tgl_pinjam'].'</td>
                  <td>'.$row['tgl_tempo'].'</td>
                  <td>'.$row['tgl_kembali'].'</td>
                  <td>'.$row['denda'].'</td>
                  <td>'.$row['status'].'</td>
                  <td>');
                  ?>

                  <?php
                  if ($row['status']=='Belum Kembali')
                  { echo ('
                        <a href="../Admin/controller/pinjamankembali.php?nofak='.$row['id_faktur'].'&tgltem='.$row['tgl_tempo'].'">
                          <button type="button" class="btn btn-primary" btn-group btn-group-lg" name="button">
                          <i class="fa fa-check"></i></button>
                        </a>
                        <a href="../Admin/controller/hapuspinjaman.php?id_faktur='.$row['id_faktur'].'">
                          <button type="button" class="btn btn-danger btn-group btn-group-lg" name="button">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                        </a>
                    </td>
                  </tr>');
                  }
                  else
                  {echo ('
                        <a href="#">
                          <button type="button" class="btn btn-success" btn-group btn-group-lg" name="button">
                          <i class="fa fa-check"></i></button>
                        </a>
                        <a href="../Admin/controller/hapuspinjaman.php?id_faktur='.$row['id_faktur'].'">
                          <button type="button" class="btn btn-danger btn-group btn-group-lg" name="button">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                        </a>
                    </td>
                  </tr>');
                  }
                  ?>

                <?php }?>
               </tbody>
             </table>
           </div>
           <br>
           <button type="button" class="btn btn-primary btn-group btn-group-lg" name="button">
           <i class="fa fa-check"></i></button> <strong> Status Buku Belum Kembali</strong>
           <br>
          <button type="button" class="btn btn-success btn-group btn-group-lg" name="button">
          <i class="fa fa-check"></i></button> <strong> Status Buku Sudah Kembali</strong>

           </div>
          </div>
         </div>
       </div>
     </div>

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
