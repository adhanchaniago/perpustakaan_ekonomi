
 <?php
 include '../../connection.php';
 $id_fak=$_GET['id_faktur'];
   $sql=mysql_query("DELETE FROM transaksi_peminjaman WHERE id_faktur='$id_fak'");
   header('location: ../dashboard.php?p=view/datapinjaman.php');

  ?>
