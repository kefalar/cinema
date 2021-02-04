<!DOCTYPE html>
<?php include('conection.php');
ini_set('display_errors', 'Off'); 
 ?>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title>Konohagakure cinema</title>
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  
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
            <!--Создаём ячейку

            оставшиеся 20% для сайдбара-->
            <td
            rowspan="2"
            style="width:80%">
              <h2>В прокате</h2>

              <?php
              $res = mysqli_query($link,"SELECT * FROM `films`");
              while($row = mysqli_fetch_assoc($res)):?>
                <h3 style=”padding-left:30px”><img src="favicon.ico" height="20" width="20"><?=$row['name']?></h3><h4 style=”padding-left:30px”> <?=$row['begin_date']?></h4>
                <p><?=$row['info']?></p>
            <?php endwhile;?>
              <!--Закрываем ячейку-->

            </td>

            <!--САЙДБАР-->

            <!--Создаём ячейку сайдбара-->
            <td bgcolor="#e6e6fa">
              <h3>Меню</h3>
              <!--Абзац для ссылки на страницу сайта-->
              <p>
                <!--Ссылка на страницу сайта-->
                <a href="films_list.php">
                <!--Картинка маркера перед названием страницы-->
                <img src="gamelife.jpg" height="30" width="30">
                <!--Название страницы
                style="margin-left:5px;" - отступ названия от маркера-->
                <span style="margin-left:5px;">Забронировать место</span></a>
                <!--Закрываем абзац-->
              </p>
              <p>
                <a href="feedback.php">
                <img src="gamelife2.jpg" height="30" width="30">
                <span style="margin-left:5px;">Отзывы</span;></a>
              </p>
              <p>
                <?php if($_COOKIE['user']!=''):?>
                  <a href="Cabinet.php">
                <?php else:?>
                  <a href="registr.php">
                <?php endif;?>
                <img src="gamelife3.jpg" height="30" width="30">
                <span style="margin-left:5px;">Личный кабинет</span></a>
              </p>
            <!--Закрываем строку Меню-->
            </td>
            </tr>
            <!--Создаём строку с дополнительной информацией-->
            <tr>
            <!--Ячейка с дополнительной информацией-->
            <td
            bgcolor="#e6e6fa"
            align="left">
            <h3><img src="favicon.ico" height="20" width="20">Konohagakure cinema</h3>
            <p>Адрес кинотеатра: Ул. Большая Московская дом 5. метро Шипиловское</p>
            <!--Закрываем ячейку с общей информацией
            и таблицу основного контента-->
            </td>
          </tr>
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
