<?php
include '../../connection.php';
$kd_ktg_buku = $_POST['kdktgbuku'];
$nama_ktg = $_POST['namaktg'];

$save = mysql_query("INSERT INTO kategori_buku (kd_ktg_buku, nama_ktg) VALUES ('$kd_ktg_buku','$nama_ktg')");
if ($save){
				echo "<script>alert('Data kategori telah tersimpan!');</script>";
}
else{
				echo "<script>alert('Data kategori gagal tersimpan!');</script>";
}

echo "<meta http-equiv='refresh' content='0; url=../dashboard.php?p=view/datakategori.php'>";

 ?>
