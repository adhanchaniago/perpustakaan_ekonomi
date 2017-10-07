<?php
$kd_prodi=$_POST['kd_prodi'];
$nama_prodi=$_POST['nama_prodi'];

include '../../connection.php';



    $qry=mysql_query("INSERT into prodi (kd_prodi,nama_prodi)
    values ('$kd_prodi','$nama_prodi')");




if ($qry)
{
  echo "<script>alert('Data Anda Berhasil Tersimpan !');</script>";
}
else {
    echo "<script>alert('Data Anda Gagal Tersimpan !');</script>";
}

header ('location: ../dashboard.php?p=view/dataprodi.php')

?>
