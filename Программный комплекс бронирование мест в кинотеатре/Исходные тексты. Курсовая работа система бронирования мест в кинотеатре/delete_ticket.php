<?php
$delper=$_POST['id_ticket'];
ob_start();
include('conection.php');
$res=mysqli_query($link,"SELECT * FROM `tickets` WHERE `ticket_id`='$delper'");
$reslast='';
while($res2=mysqli_fetch_assoc($res)){
    $reslast=$res2;
}
$filmname=$reslast['film'];
$picename=$reslast['price'];
$hallname=$reslast['hall'];
$place=$reslast['place'];
$res3=mysqli_query($link,"SELECT * FROM `film_session` WHERE (`name`='$filmname' and `cost`='$picename') and `hall`='$hallname'");
while($res3=mysqli_fetch_assoc($res3)){
    $reslast=$res3;
}
echo ("$filmname $picename $hallname");
$placesline=unserialize($reslast['places']);
$placesline[$place]=0;
$serializeres=serialize($placesline);
$idfilm=$reslast['id'];
$resultchange=mysqli_query($link,"UPDATE `film_session` SET `places`='$serializeres'WHERE`id`='$idfilm'");
$deleteperson=mysqli_query($link,"DELETE FROM `tickets` WHERE `ticket_id`='$delper'");
header('Location:Cabinet.php');
if(!$deleteperson){
  echo("Ошибка удаления");
}

?>
