<?php
$filmname=filter_var(trim($_POST['name_session2']),FILTER_SANITIZE_STRING);
$date=filter_var(trim($_POST['date2']),FILTER_SANITIZE_STRING);
$date2=filter_var(trim($_POST['date22']),FILTER_SANITIZE_STRING);
$info=filter_var(trim($_POST['info']),FILTER_SANITIZE_STRING);
ob_start();
include('conection.php');
if($filmname=='' or $date=='' or $date2=='' or $info==''){
  header('Location: admin.php');
}
else{
  $resultnewfilm=mysqli_query($link,"INSERT INTO `films` (`name`,`begin_date`,`end_date`,`info`)
  VALUES('$filmname','$date','$date2','$info')");
  header('Location: admin.php');
  if(!$resultnewfilm){
    echo("Ошибка добавления фильма");
  }
}
?>
