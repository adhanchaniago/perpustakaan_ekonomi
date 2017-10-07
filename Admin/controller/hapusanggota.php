<?php
include '../../connection.php';
$npm=$_GET['npm'];
$sql=mysql_query("DELETE FROM anggota WHERE npm='$npm'");
header('location: ../dashboard.php?p=view/dataanggota.php');
?>
