<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Форма регистрации</title>
</head>
<body>
  <div class="wrappers">
    <?php
      if($_COOKIE['user'] == ''):
    ?>
    <div class="first-wrapper">
    <h1>Форма регистрации</h1>
    <form action="validation-form/check.php" method="post">
      <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"> <br>
      <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"> <br>
      <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"> <br>
      <button class="btn" type="submit">Зарегистрироваться</button>
    </form>
  </div>
  <div class="second-wrapper">
    <h1>Форма авторизации</h1>
    <form action="validation-form/auth.php" method="post">
      <input type="text" class="form-control" name="login" id="login2" placeholder="Введите логин"> <br>
      <input type="password" class="form-control" name="pass" id="pass2" placeholder="Введите пароль"> <br>
      <button class="btn" type="submit">Авторизоваться</button>
    </form>
  </div>
  <?php else: ?>
    <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="exit.php">здесь</a>.</p>
  </div>
</body>
</html>