<?php
include '../../connection.php';
$npm=$_POST['npm'];
$nama_anggota=$_POST['namaanggota'];
$almt=$_POST['almt'];
$jk=$_POST['jeniskel'];
$kd_prodi=$_POST['kdprodi'];
$no_telp=$_POST['notelp'];
$email=$_POST['email'];
$status=$_POST['status'];
$username=$_POST['uname'];
$password=$_POST['pass'];


$prodisql=mysql_query("SELECT * FROM prodi");
while ($getprodi=mysql_fetch_assoc($prodisql))
{
  if($kd_prodi==$getprodi['nama_prodi'])
  {
    $temp=$getprodi['kd_prodi'];
    $simpan = mysql_query("UPDATE anggota SET jeniskel='$jk', npm = '$npm', nama_anggota = '$nama_anggota', almt = '$almt', kd_prodi = '$temp', no_telp = '$no_telp', email = '$email', status = '$status', username = '$username', password = '$password' WHERE anggota.npm = '$npm'");
  }
}

if ($simpan)
{
  echo "<script>alert('Data Anda Berhasil Tersimpan !');</script>";
}
else
{
    echo "<script>alert('Data Anda Gagal Tersimpan !');</script>";
}

echo "<meta http-equiv='refresh' content='0; url=../dashboard.php?p=view/dataanggota.php'>";
?>
