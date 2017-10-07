<?php
include '../../connection.php';
	$kd_op = $_POST['kdop'];
	$nama_op = $_POST['namaop'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$no_telp = $_POST['notelp'];
  $email = $_POST['email'];

	$save=mysql_query("INSERT INTO operator (kd_op, nama_op, username, password, no_telp, email) VALUES ('$kd_op','$nama_op','$username','$password','$no_telp','$email')");
  if ($save){
  				echo "<script>alert('Data operator telah tersimpan!');</script>";
  }
  else{
  					echo "<script>alert('Data operator gagal tersimpan!');</script>";
  }

  echo "<meta http-equiv='refresh' content='0; url=../dashboard.php?p=view/dataoperator.php'>";

  ?>
