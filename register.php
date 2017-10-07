<?php
$nextpage=$_GET['nextpage'];
$npm=$_POST['npm'];
$nama=$_POST['nama'];
$jk=$_POST['jeniskel'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$notelp=$_POST['notelp'];
$prodi=$_POST['prodi'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];

include 'connection.php';

$prodisql=mysql_query("SELECT * FROM prodi");
while ($getprodi=mysql_fetch_assoc($prodisql))
{
  if($prodi==$getprodi['nama_prodi'])
  {
    $temp=$getprodi['kd_prodi'];
    $qry=mysql_query("insert into anggota (npm,nama_anggota,almt,email,no_telp,kd_prodi,username,password,status,jeniskel)
    values ('$npm','$nama','$alamat','$email','$notelp','$temp','$uname','$pass','nonaktif','$jk')");
  }
}


if ($qry)
{
  echo "<script>alert('Data Anda Berhasil Tersimpan !');</script>";
}
else {
    echo "<script>alert('Data Anda Gagal Tersimpan !');</script>";
}

echo "<meta http-equiv='refresh' content='0; url=$nextpage'>";

?>
