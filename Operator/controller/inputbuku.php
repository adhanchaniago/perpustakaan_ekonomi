<?php

	$kd_buku = $_POST['kdbuku'];
	$jdl_buku = $_POST['jdlbuku'];
	$kdktgbuku = $_POST['ktgbuku'];
	$pengarang = $_POST['pengarang'];
	$penerbit = $_POST['penerbit'];
  $jumlah = $_POST['jumlah'];
  $rak_buku = $_POST['rakbuku'];

	include '../../connection.php';
	$bukusql=mysql_query("SELECT * FROM kategori_buku");
	while ($getkategori = mysql_fetch_array($bukusql))
	{
		if ($kdktgbuku == $getkategori['nama_ktg'])
		{
			$temp=$getkategori['kd_ktg_buku'];
			$save = mysql_query("INSERT INTO buku (kd_buku,jdl_buku,kd_ktg_buku,pengarang,penerbit,jumlah,rak_buku)
			VALUES ('$kd_buku','$jdl_buku','$temp','$pengarang','$penerbit','$jumlah','$rak_buku')");
		}
	}

if ($save){
				echo "<script>alert('Data buku telah tersimpan!');</script>";
}
else{
					echo "<script>alert('Data buku gagal tersimpan!');</script>";
}

echo "<meta http-equiv='refresh' content='0; url=../dashboard.php?p=view/databuku.php'>";

?>
