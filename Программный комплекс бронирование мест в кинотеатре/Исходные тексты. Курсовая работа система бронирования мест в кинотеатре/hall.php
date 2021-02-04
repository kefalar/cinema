<!DOCTYPE html>
<?php
$id_session=$_GET['id'];
include('conection.php');
$info=mysqli_query($link,"SELECT * FROM `film_session` WHERE `id`='$id_session'");
$info2=mysqli_fetch_assoc($info);
ini_set('display_errors', 'Off'); 
?>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title>Konohagakure cinema</title>
  <link rel="stylesheet" type="text/css" href="style.css" >
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <style>
   a {
     color: black;
   }
  </style>
</head>
<body
background="back.jpg" no-repeat>
  <table
  border="1"
  align="center"
  rules="rows"
  style="width:60%;">
    <!--Создаём строку-->
    <tr>
      <!--Создаём ячейку строки-->
      <td>
        <!--ШАПКА САЙТА-->
        <table
        border="0"
        background=""
        cellpadding="10"
        style="width:100%; border-radius:5px;">
            <!--Создаём строку таблицы-->
            <tr >
            <!--Создаём столбец таблицы-->
            <th>
              <!--Содержание ячейки столбца-->
              <h1>
                <a href="/" class="my-link" text-decoration="none">
                <img src="favicon.ico" height="30" width="30">Konohagakure cinema<img src="favicon.ico" height="30" width="30"></h1></a>
              <h3><img src="favicon.ico" height="20" width="20">Сайт для бронирования мест в кинотеатре<img src="favicon.ico" height="20" width="20"></h3>
              <!--Закрываем таблицу-->
            </th>
            <th>
              <h3>
                <?php if($_COOKIE['user']==''):?>
                  <form action="registr.php" method="post">
                  <button class="btn btn-success" type="submit">Войти</button>
                <?php else:?>
                  <p>Добрый день  <?=$_COOKIE['user']?>, чтобы выйти нажмите <a href="/exit.php">здесь</p>
                <?php endif; ?>
                </form>
              </h3>
            </th>
            </tr>

        </table>

        <!--ОСНОВНОЙ КОНТЕНТ-->

        <table
        border="1"
        bgcolor="#e6e6fa"
        cellpadding="10"
        style="width:100%; border-radius:5px;">
          <!--Создаём строку-->
          <tr>
            <td
            rowspan="2"
            style="width:80%">
              <h2><?=$info2['name']?></h2>
              <!--Начинаем абзац с красной строки-->
              <form action="checkbox-form.php?id=<?=$id_session?>" method="post">
                <?php
                $counter=1;
                $counter2=1;
                $serline=unserialize($info2['places']);
                for($i=0;$i<10;$i++):?>
                <p></p>
                <p align="center" ><?=$i+1?> ряд
                  <?php for($j=0; $j<10;$j++):
                    if($serline[$counter-1]=='0'):?>
                    <input type="checkbox" class="checkbox" name="formDoor[]" value="<?=$counter?>" /><?=$counter2?>
                  <?php else:?>
                    <input type="checkbox" class="checkbox" name="formDoor[]" value="<?=$counter?>" disabled/><?=$counter2?>
                  <?php endif;
                    $counter+=1;
                    $counter2+=1;?>
                  <?php endfor;?>
                  <?php $counter2=1;?>

                </p>
              <?php endfor;?>
              <input type="submit" name="formSubmit" value="Выбрать места" />
            </form>
              <!--Закрываем ячейку-->

            </td>

            <!--САЙДБАР-->

            <!--Создаём ячейку сайдбара-->

            </tr>
            <!--Создаём строку с дополнительной информацией-->
        </table>

        <!--ПОДВАЛ-->

        <!--Создаём таблицу подвала-->
        <table
          border="1"
          height="100"
          cellpadding="10"
          style="width:100%; border-radius:5px;">
          <!--Создаём строку.-->
          <tr >
            <!--Создаём столбец-->
            <th>
            <h3>Полезная информация</h3>
            <p><a href="https://www.kinopoisk.ru/" class="my-link" text-decoration="none">Кинопоиск</a>
            <a href="https://www.imdb.com/" class="my-link" text-decoration="none">IMDB</a>
          <a href="https://www.mirea.ru/" class="my-link" text-decoration="none">МИРЭА</a>
        <a href="https://www.twitch.tv/gamelifeow" class="my-link" text-decoration="none">Партнер</a></p>
        <p>(c) 2019-2020 ООО"ИКБО-11-18"</p>
            <!--Закрываем таблицу подвала. При желании в подвале можно
            сделать несколько строк и столбцов-->
            </th>
          </tr>
        </table>
        <!--Закрываем таблицу контейнера-->
      </td>
    </tr>
  </table>
</body>
</html>
