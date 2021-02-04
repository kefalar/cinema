<!DOCTYPE html>
<html lang="ru"><?php
ini_set('display_errors', 'Off'); 
$id_session=$_GET['id'];
ob_start();
include('conection.php');
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <a href="/" class="my-link" text-decoration="none">выход</a>
  <title>Форма регистрации</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container mt-4">

    <div class="row">
      <div class="col">
        <h3>Удалить пользователя</h3>
        <form action="delete_person.php" method="post">
          <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
          <button class="btn btn-success" type="submit">Удалить</button>
        </form>
        <h3>Список пользователей</h3>
          <?php $result1=mysqli_query($link,"SELECT * FROM `visitors`");
          $counter=1;
          while ($row = mysqli_fetch_array($result1)):?>
            <p>Пользователь №<?=$counter?> </p>
            <p>id: <?=$row['id']?> name: <?=$row['name']?> login: <?=$row['login']?></p>
            <p>email: <?=$row['email']?> password: <?=$row['password']?></p>
            <p>______</p>
          <?php $counter++;
        endwhile;?>
        </div>
        <div class="col">
          <h3>Добавить сеанс</h3>
          <form action="add_session.php" method="post">
            <input type="text" class="form-control" name="name_session" id="name_session" placeholder="Введите название фильма"><br>
            <input type="text" class="form-control" name="date" id="date" placeholder="Введите дату в формате гггг-мм-дд"><br>
            <input type="text" class="form-control" name="time" id="time" placeholder="Введите время в формате чч:мм"><br>
            <input type="text" class="form-control" name="cost" id="cost" placeholder="Введите цену за билет"><br>
            <input type="text" class="form-control" name="hall" id="hall" placeholder="Введите номер зала"><br>
            <button class="btn btn-success" type="submit">Добавить сеанс</button>
          </form>
          <h3>Удалить сеанс</h3>
          <form action="delete_session.php" method="post">
            <input type="text" class="form-control" name="id_ses" id="id_ses" placeholder="Введите id"><br>
            <button class="btn btn-success" type="submit">Удалить</button>
          </form>
          <h3>Список сеансов</h3>
          <?php $result2=mysqli_query($link,"SELECT * FROM `film_session`");
          $counter=1;
          while ($row = mysqli_fetch_array($result2)):?>
            <p>Сеанс №<?=$counter?> </p>
            <p>id: <?=$row['id']?> name: <?=$row['name']?> date: <?=$row['date']?></p>
            <p>time: <?=$row['time']?> price: <?=$row['cost']?> hall: <?=$row['hall']?></p>
            <p>______</p>
          <?php $counter++;
        endwhile;?>
          </div>
          <div class="col">
            <h3>Добавить фильм</h3>
            <form action="add_film.php" method="post">
              <input type="text" class="form-control" name="name_session2" id="name_session2" placeholder="Введите название фильма"><br>
              <p>Дата вводится в формате гггг-мм-дд</p>
              <input type="text" class="form-control" name="date2" id="date2" placeholder="Введите дату начала проката в формате гггг-мм-дд"><br>
              <input type="text" class="form-control" name="date22" id="date22" placeholder="Введите дату конца проката в формате гггг-мм-дд"><br>
              <input type="text" class="form-control" name="info" id="info" placeholder="Введите описание фильма"><br>
              <button class="btn btn-success" type="submit">Добавить фильм</button>
            </form>
            <h3>Удалить фильм</h3>
            <form action="delete_film.php" method="post">
              <input type="text" class="form-control" name="id_film" id="id_film" placeholder="Введите id"><br>
              <button class="btn btn-success" type="submit">Удалить</button>
            </form>
            <h3>Список Фильмов</h3>
            <?php $result3=mysqli_query($link,"SELECT * FROM `films`");
            $counter=1;
            while ($row = mysqli_fetch_array($result3)):?>
              <p>Фильм №<?=$counter?> </p>
              <p>film_id: <?=$row['film_id']?> name: <?=$row['name']?></p>
              <p>begin_date: <?=$row['begin_date']?> end_date: <?=$row['end_date']?></p>
              <p>______</p>
            <?php $counter++;
          endwhile;?>
            </div>
            <div class="col">
              <h3>Список Купленных билетов</h3>
              <?php $result3=mysqli_query($link,"SELECT * FROM `tickets`");
              $counter=1;
              while ($row = mysqli_fetch_array($result3)):?>
                <p>Билет №<?=$counter?> </p>
                <p>ticket_id: <?=$row['ticket_id']?> name: <?=$row['user']?></p>
                <p>price: <?=$row['price']?> hall: <?=$row['hall']?> row: <?=(int)($row['place']/10)+1?> place: <?=$row['place']%10+1?></p>
                <p>______</p>
              <?php $counter++;
            endwhile;?>
              </div>

      </div>
  </div>
</body>
</html>
