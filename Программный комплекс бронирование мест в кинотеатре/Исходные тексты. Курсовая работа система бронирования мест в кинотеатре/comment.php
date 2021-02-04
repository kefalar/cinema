<?php
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$comment = filter_var(trim($_POST['comment']),FILTER_SANITIZE_STRING);


include('conection.php');
$date=date('Y-m-d');

$user=$_COOKIE['user'];
$result = mysqli_query($link,"INSERT INTO `feedback` (`name`,`date`,`text`, `check_f`) VALUES('$user','$date','$comment', '0')");

$link->close();
header('Location: feedback.php');
ob_enf_fluch();

 ?>
