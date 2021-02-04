<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
  $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
  $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
  $email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
  $passworduser = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
////Проверка введенных данных
  if(mb_strlen($login)<2 || mb_strlen($login)>30){
    echo "problem";
    exit();
  } else if (mb_strlen($name)<2 || mb_strlen($name)>40){
    echo "problem";
    exit();
  }
  if (filter_var($email, FILTER_SANITIZE_EMAIL) == false){
    echo "введен некоректный почтовый адресс";
    exit();
  }
  ///хеширование пароля
  $passworduser=md5($passworduser."gkso2");
///подключение файла в котором прописано подключение к базе данных
include('conection.php');

///Цикл для првоерки, удалить!

/// Добавление в базу данных
  $resultinput=mysqli_query($link,"INSERT INTO `visitors` (`Login`, `Name`, `Email`, `Password`)
  VALUES ('$login','$name','$email','$passworduser')");
  if ($resultinput==false){
    echo "Ошибка добавления в базу данных";
  }
  $link->close();
  header('Location: /');
?>
