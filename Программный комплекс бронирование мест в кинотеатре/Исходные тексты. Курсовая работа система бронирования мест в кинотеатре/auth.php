<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$login = filter_var(trim($_POST['login2']),FILTER_SANITIZE_STRING);
$passworduser = filter_var(trim($_POST['password2']),FILTER_SANITIZE_STRING);


$passworduser2=md5($passworduser."gkso2");

include('conection.php');

$result = mysqli_query($link,"SELECT * FROM `visitors`
  WHERE `login`='$login' AND `password`='$passworduser2'");
$user=mysqli_fetch_assoc($result);
$result22 = mysqli_query($link,"SELECT * FROM `visitors`");
if($user==false){
  if($login="admin" && $passworduser=="admin"){
    header('Location: admin.php');
    exit();
  }
   else {echo "пользователя не было найдено";
  exit();
}
}

setcookie('user', $user['name'], time()+600);
$link->close();
header('Location: /');

 ?>
