<?php
$delper=$_POST['id_ses'];
include('conection.php');
$deleteperson=mysqli_query($link,"DELETE FROM `film_session` WHERE `id`='$delper'");
$deleteperson2=mysqli_query($link,"DELETE FROM `tickets` WHERE `film_id`='$delper'");
if(!$deleteperson){
  echo("Ошибка удаления");
}
else header('Location: admin.php');
?>
