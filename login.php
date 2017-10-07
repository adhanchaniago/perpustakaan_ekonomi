<?php

//memulai sesi
session_start();

include "connection.php";

//set null apabila uname dan pass tidak di isi
$user	= isset($_POST['username']) ? $_POST['username'] : "";
$pass	= isset($_POST['password']) ? $_POST['password'] : "";

//bool jika uname pass valid
$isvalid=false;

//direrktori user
$tablecek= array("admin","anggota","operator","kepala_perpus");
$dircek= array("Admin","Anggota","Operator","Kepala_perpus");

//cek satu per satu uname, dan pass ke tabel
for ($i=0;$i<count($tablecek);$i++)
{
	$loginquery	= mysql_query("SELECT * FROM $tablecek[$i] WHERE username = '$user' AND password = '$pass'");
	if ($loginquery)
	{
		while ($validasi= mysql_fetch_assoc($loginquery))
		{
			if ($validasi['username']==$user && $validasi['password']==$pass)
			{
				$isvalid=true;
				break;
			}
			else
			{
				$isvalid=false;
			}
		}

		if ($isvalid==true)
		{
				$qrygetkd = mysql_query("SELECT * FROM $tablecek[$i] WHERE username = '$user' AND password = '$pass'");
				while ($getrecord=mysql_fetch_assoc($qrygetkd))
				{
					if ($tablecek[$i]=='admin')
					{
						$_SESSION['admin']=$getrecord['kd_admin'];
						//$user=$_SESSION[$getrecord['kd_admin']];
					}
					else if ($tablecek[$i]=='anggota')
					{
						$_SESSION['anggota']=$getrecord['npm'];
						//$user=$_SESSION[$getrecord['npm']];
					}
					else if ($tablecek[$i]=='operator')
					{
						$_SESSION['operator']=$getrecord['kd_op'];
						//$user=$_SESSION[$getrecord['kd_op']];
					}
					else
					{
						$_SESSION['kepala']=$getrecord['kd_kp'];
						//$user=$_SESSION[$getrecord['kd_kp']];
					}
				}
				echo "<script>alert('Anda berhasil Log In. Username : $user');</script>";
				echo "<meta http-equiv='refresh' content='0; url=$dircek[$i]/dashboard.php?user=$user'>";
				$isvalid=false;
				break;
		}
		else if ($i==(count($tablecek)-1) && $isvalid==false)
		{
				echo "<script>alert('Anda Gagal Log In');</script>";
				echo "<meta http-equiv='refresh' content='0; url=formlogin.php'>";
		}

	}
	else
	{
		echo "<script>alert('Gagal Eksekusi Query');</script>";
		echo "<meta http-equiv='refresh' content='0; url=formlogin.php'>";
		break;
	}

}

?>
