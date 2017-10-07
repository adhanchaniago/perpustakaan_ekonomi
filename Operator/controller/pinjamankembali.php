<?php

$nofak=$_GET['nofak'];
$tgl_tempo=$_GET['tgltem'];

include '../../connection.php';
$qrydenda=mysql_query("SELECT DATEDIFF(CURRENT_DATE,'$tgl_tempo') AS terlambat");
while ($getdenda=mysql_fetch_assoc($qrydenda))
{
  $lamaterlambat=$getdenda['terlambat'];
}

if ($lamaterlambat > 0 )
{
  echo 'Kena Denda';
  $totaldenda=$lamaterlambat*500;
  $setdenda=mysql_query("UPDATE transaksi_peminjaman SET tgl_kembali=CURDATE(),denda=$totaldenda,status='Sudah Kembali' Where id_faktur=$nofak; ");
}
else
{
  echo 'Tidak Kena Denda';
  $setdenda=mysql_query("UPDATE transaksi_peminjaman SET tgl_kembali=CURDATE(),denda=0,status='Sudah Kembali' Where id_faktur=$nofak; ");
}

header ('location: ../dashboard.php?p=view/datapinjaman.php');

?>
