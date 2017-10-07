<?php
$dbhost='localhost';
$dbroot='root';
$dbname='db_perpus_ekonomi';
$dbpass='';

$dbconnection= mysql_connect ($dbhost,$dbroot,$dbpass);
if ($dbconnection)
{
  mysql_select_db($dbname, $dbconnection);
}
else
{
  die ('Could not connect : ' . mysql_error ());
}
?>
