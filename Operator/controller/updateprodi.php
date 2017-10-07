<?php
include '../../connection.php';
$kd_prodi=$_GET['kd_prodi'];
$nama_prodi=$_POST['nama_prodi'];


    $simpan = mysql_query("UPDATE prodi SET kd_prodi='$kd_prodi', nama_prodi = '$nama_prodi' WHERE kd_prodi = '$kd_prodi'");


if ($simpan)
{
  echo "<script>alert('Data Anda Berhasil Tersimpan !');</script>";
}
else
{
    echo "<script>alert('Data Anda Gagal Tersimpan !');</script>";
}

echo "<meta http-equiv='refresh' content='0; url=../dashboard.php?p=view/dataprodi.php'>";
?>
