<?php
$filmname=filter_var(trim($_POST['name_session']),FILTER_SANITIZE_STRING);
$datesession=filter_var(trim($_POST['date']),FILTER_SANITIZE_STRING);
$timesession=filter_var(trim($_POST['time']),FILTER_SANITIZE_STRING);
$cost=filter_var(trim($_POST['cost']),FILTER_SANITIZE_STRING);
$hall=filter_var(trim($_POST['hall']),FILTER_SANITIZE_STRING);
include('conection.php');
$array=array_fill(0, 99, '0');
$array2=serialize($array);
if($filmname=='' or $datesession=='' or $timesession=='' or $cost=='' or $hall==''){
  header('Location: admin.php');
}
else{
  $resultnewsession=mysqli_query($link,"INSERT INTO `film_session` (`name`,`date`,`time`,`cost`,`hall`,`places`)
  VALUES('$filmname','$datesession','$timesession','$cost','$hall','$array2')");
  if(!$resultnewsession){
    echo("Ошибка добавления фильма");
  }
  header('Location: admin.php');
}
?>
