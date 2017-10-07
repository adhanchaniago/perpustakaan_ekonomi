<?php
include '../../connection.php';
	$kd_ktg_buku = $_POST['kdktgbuku'];
	$nama_ktg = $_POST['namaktg'];

	$save=mysql_query("UPDATE kategori_buku SET kd_ktg_buku = '$kd_ktg_buku', nama_ktg = '$nama_ktg' WHERE kategori_buku.kd_ktg_buku='$kd_ktg_buku'");
  if ($save){
  				echo "<script>alert('Data kategori buku telah tersimpan!');</script>";
  }
  else{
  					echo "<script>alert('Data kategori buku gagal tersimpan!');</script>";
  }

  echo "<meta http-equiv='refresh' content='0; url=../dashboard.php?p=view/datakategori.php'>";

  ?>
