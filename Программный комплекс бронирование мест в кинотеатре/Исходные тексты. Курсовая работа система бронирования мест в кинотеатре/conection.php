<?php

$user = 'id13907090_root';
$password = 'VhC0KA{x7n]!DA)L';
$db = 'id13907090_cinema_db';
$host = 'localhost';
$port = 3307;

$link = mysqli_connect($host,$user,$password,$db);

  if ($link->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
?>
