<?php

	$NPM = $_POST['npm'];
	$kdbuku1 = $_POST['kdbuku1'];
	$kdbuku2 = $_POST['kdbuku2'];
	$kdbuku3 = $_POST['kdbuku3'];

	include '../connection.php';
  $pinjamsql = mysql_query("INSERT INTO peminjaman VALUES (NULL,'$NPM', CURRENT_DATE, (CURDATE()+7))");

  $getlast=mysql_query("SELECT * FROM peminjaman ORDER BY kd_peminjaman DESC LIMIT 1");
  while ($record=mysql_fetch_assoc($getlast))
  {
    $lastkdpeminjaman=$record['kd_peminjaman'];
  }
  if($kdbuku1!='none')
  {
    $pinjambuku = mysql_query("INSERT INTO transaksi_peminjaman VALUES (null,'$lastkdpeminjaman','$kdbuku1',NULL,0,1,'Belum Kembali')");
  }
  if($kdbuku2!='none')
  {
    $pinjambuku = mysql_query("INSERT INTO transaksi_peminjaman VALUES (null,'$lastkdpeminjaman','$kdbuku2',NULL,0,1,'Belum Kembali')");
  }
  if($kdbuku3!='none')
  {
    $pinjambuku = mysql_query("INSERT INTO transaksi_peminjaman VALUES (null,'$lastkdpeminjaman','$kdbuku3',NULL,0,1,'Belum Kembali')");
  }

  if ($pinjamsql && $pinjambuku)
  {
    echo "<script>alert('Data Pinjaman telah tersimpan!');</script>";
  }
  else
  {
    echo "<script>alert('Data Pinjaman gagal tersimpan!');</script>";
  }

  header ('location: ../dashboard.php?p=view/datapinjaman.php');

?>
