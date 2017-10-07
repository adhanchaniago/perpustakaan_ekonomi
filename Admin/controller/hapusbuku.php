<?php
include '../../connection.php';
$kd_buku=$_GET['kd_buku'];
$sql=mysql_query("DELETE FROM buku WHERE kd_buku='$kd_buku'");
header('location: ../dashboard.php?p=view/databuku.php');
?>
