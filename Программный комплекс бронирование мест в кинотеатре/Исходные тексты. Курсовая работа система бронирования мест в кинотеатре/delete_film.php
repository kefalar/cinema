<?php
$delper=$_POST['id_film'];
include('conection.php');
$deleteperson=mysqli_query($link,"DELETE FROM `films` WHERE `film_id`='$delper'");

if(!$deleteperson){
  echo("Ошибка удаления");
}
else header('Location: admin.php');
?>
