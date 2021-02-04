<?php
$delper=$_POST['login'];
include('conection.php');
$deleteperson=mysqli_query($link,"DELETE FROM `visitors` WHERE `login`='$delper'");
if(!$deleteperson){
  echo("Ошибка удаления");
}
else header('Location: admin.php');
?>
