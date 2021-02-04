<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Konohagakure cinema</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <style> h1 {
    background: #D9FFAD; /* Цвет фона под заголовком */
    padding: 2px; /* Поля вокруг текста */
   }</style>
</head>
<body
background="back2.jpg" no-repeat>
  <div class="container mt-4">

    <div class="row">
      <div class="col">
        <h1>Форма регистрации</h1>
          <form action="check.php" method="post">
            <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
            <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
            <input type="text" class="form-control" name="email" id="email" placeholder="Введите почту"><br>
            <input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль"><br>
            <button class="btn btn-success" type="submit">Зарегестрировать</button>
          </form>
        </div>
        <div class="col">
          <h1>Форма авторизации</h1>
            <form action="auth.php" method="post">
              <input type="text" class="form-control" name="login2" id="login2" placeholder="Введите логин"><br>
              <input type="password" class="form-control" name="password2" id="password2" placeholder="Введите пароль"><br>
              <button class="btn btn-success" type="submit">Войти</button>
            </form>
          </div>


      </div>
  </div>
</body>
</html>
