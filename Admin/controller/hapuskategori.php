<?php
include '../../connection.php';
$kd_ktg_buku=$_GET['kd_ktg_buku'];
$sql=mysql_query("DELETE FROM kategori_buku WHERE kd_ktg_buku='$kd_ktg_buku'");
header('location: ../dashboard.php?p=view/datakategori.php');
?>
