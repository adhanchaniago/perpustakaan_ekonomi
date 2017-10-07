<!DOCTYPE html>
<html lang="en">
<body>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Data Buku</h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="table-responsive">
          <table id="datatable" class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>
                Kode Buku
              </th>
              <th>
                Judul Buku
              </th>
              <th>
                Kategori Buku
              </th>
              <th>
                Pengarang
              </th>
              <th>
                Penerbit
              </th>
              <th>
                Jumlah
              </th>
              <th>
                Rak Buku
              </th>
            </tr>
            </thead>
            <tbody>
            <?php
            include '../connection.php';
            $sql=mysql_query("SELECT * FROM buku,kategori_buku WHERE buku.kd_ktg_buku=kategori_buku.kd_ktg_buku");
            while ($row = mysql_fetch_array($sql))
            {
              echo
              ('<tr>
                <td>'.$row['kd_buku'].'</td>
                <td>'.$row['jdl_buku'].'</td>
                <td>'.$row['nama_ktg'].'</td>
                <td>'.$row['pengarang'].'</td>
                <td>'.$row['penerbit'].'</td>
                <td>'.$row['jumlah'].'</td>
                <td>'.$row['rak_buku'].'</td>
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
