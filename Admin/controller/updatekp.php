<?php
include '../../connection.php';
$nmkp=$_POST['nmkp'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];


$simpan = mysql_query("UPDATE kepala_perpus SET nama_kp='$nmkp', username = '$uname', password='$pass' WHERE kd_kp = 'KP01'");


if ($simpan)
{
  echo "<script>alert('Data Anda Berhasil Tersimpan !');</script>";
}
else
{
    echo "<script>alert('Data Anda Gagal Tersimpan !');</script>";
}

echo "<meta http-equiv='refresh' content='0; url=../view/editkp.php'>";
?>
