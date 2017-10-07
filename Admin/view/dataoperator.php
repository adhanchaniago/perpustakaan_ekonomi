<!DOCTYPE html>
<html lang="en">
<body>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Tabel Data Operator</h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="table-responsive">
          <table id="datatable" class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>
                Kode Operator
              </th>
              <th>
                Nama Operator
              </th>
              <th>
                No Telp
              </th>
              <th>
                Email
              </th>
              <th>
                Username
              </th>
              <th>
                password
              </th>
              <th>
                Managemen Data
              </th>
            </tr>
            </thead>
            <tbody>
            <?php
            include '../connection.php';
            $sql=mysql_query("SELECT * FROM operator WHERE 1");
            while ($row = mysql_fetch_array($sql))
            {
              echo
              ('<tr>
                <td>'.$row['kd_op'].'</td>
                <td>'.$row['nama_op'].'</td>
                <td>'.$row['no_telp'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['username'].'</td>
                <td>'.$row['password'].'</td>
                <td>
                    <a href="../Admin/view/editoperator.php?kdop='.$row['kd_op'].'">
                      <button type="button" class="btn btn-primary btn-group btn-group-lg" name="button">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                    </a>
                    <a href="../Admin/controller/hapusoperator.php?kdop='.$row['kd_op'].'">
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
