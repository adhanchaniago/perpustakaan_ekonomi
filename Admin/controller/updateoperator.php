<?php
include '../../connection.php';
	$kd_op = $_POST['kdop'];
	$nama_op = $_POST['namaop'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$no_telp = $_POST['notelp'];
  $email = $_POST['email'];

	$save=mysql_query("UPDATE operator SET kd_op = '$kd_op', nama_op = '$nama_op', username = '$username', password = '$password', no_telp = '$no_telp', email = '$email' WHERE operator.kd_op='$kd_op'");
  if ($save){
  				echo "<script>alert('Data operator telah tersimpan!');</script>";
  }
  else{
  					echo "<script>alert('Data operator gagal tersimpan!');</script>";
  }

  echo "<meta http-equiv='refresh' content='0; url=../dashboard.php?p=view/dataoperator.php'>";

  ?>
