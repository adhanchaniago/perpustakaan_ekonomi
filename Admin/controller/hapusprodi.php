<?php
include '../../connection.php';
$kd_prodi=$_GET['kd_prodi'];
$sql=mysql_query("DELETE FROM prodi WHERE kd_prodi='$kd_prodi'");
header('location: ../dashboard.php?p=view/dataprodi.php');
?>
