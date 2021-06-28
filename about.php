
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Сайт</title>
</head>
<body>
<body style="">
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 matovoye-steklo bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">ANIMESTAR</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="/index.php">Главная</a>
    <a class="p-2 text-dark" href="/left.php">Информация</a>
    <a class="p-2 text-dark" href="/logo.php">О себе</a>
  </nav>
  <?php
  if($_COOKIE['user'] == 'Куки'):
  ?>
  <a class="btn btn-outline-primary" href="/">Кабинет пользователя</a>
  <?php else: ?>
  <a class="btn btn-outline-primary" href="/">Войти</a>
  <?php endif; ?>
  </div>
  <div class="container mt-5">
  <h3>Контактная форма</h3>
  <form action="check.php" method="post">
      <input type="email" name="email" placeholder="Введите Email"
       class="form-control"><br>
       <textarea name="message" class="form-control"
        placeholder="Введите ваше сообщение"></textarea><br>
        <button type="submit" name="send" class="btn btn-success">Отправить</button>
</form>
</div>
</body>
</html>  