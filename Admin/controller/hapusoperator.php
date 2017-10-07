<?php
include '../../connection.php';
$kd_op=$_GET['kdop'];
$sql=mysql_query("DELETE FROM operator WHERE kd_op='$kd_op'");
header('location: ../dashboard.php?p=view/databuku.php');
?>
