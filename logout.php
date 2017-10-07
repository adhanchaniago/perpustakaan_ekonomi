<?php
  //memulai dan destroy session
  $sessionvar=$_GET['user'];
  session_start();
  unset($_SESSION[$sessionvar]);
  //session_destroy();
  header ('location: index.php');
?>
