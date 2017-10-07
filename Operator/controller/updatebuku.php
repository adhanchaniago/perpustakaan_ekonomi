<?php
	$kd_buku = $_POST['kdbuku'];
	$jdl_buku = $_POST['jdlbuku'];
	$kd_ktg_buku = $_POST['ktgbuku'];
	$pengarang = $_POST['pengarang'];
	$penerbit = $_POST['penerbit'];
  $jumlah = $_POST['jumlah'];
  $rak_buku = $_POST['rakbuku'];

	include '../../connection.php';
  $bukusql=mysql_query("SELECT * FROM kategori_buku");
  while ($getkategori =mysql_fetch_assoc($bukusql))
  {
	  if ($kd_ktg_buku==$getkategori['nama_ktg']){
		$temp=$getkategori['kd_ktg_buku'];
			$simpan = mysql_query("UPDATE buku SET kd_buku = '$kd_buku', jdl_buku = '$jdl_buku', kd_ktg_buku = '$temp', pengarang = '$pengarang', penerbit = '$penerbit', jumlah = '$jumlah', rak_buku = '$rak_buku' WHERE buku.kd_buku='$kd_buku'");
	  }
  }


if ($simpan){
				echo "<script>alert('Data buku telah tersimpan!');</script>";
}
else{
					echo "<script>alert('Data buku gagal tersimpan!');</script>";
}
echo "<meta http-equiv='refresh' content='0; url= ../dashboard.php?p=view/databuku.php'>";

?>
