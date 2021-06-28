
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="for.css">
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
</form>
</div>
<div class="text-box">
   <p class="lead">Сайт был создан с использованием HTML5, CSS, PHP, Bootstrap, последнее классная штука.
    <br>В панели phpmyadmin можно добавить статьи и они будут отображаться в разделе статьи.
    <br>Статьи на главной странице - это статический элемент, изменить или добавить их можно в файле const-less, база данных не отказывает влияние на главную страницу.
    <br>На сайте реализован Куки, код находится в auth.php, нажатием на кнопку войти у пользователя появляется временный куки на 3600 секунд, нажатие кнопки личный кабинет произведёт выход и удаление куки.
    <br>Обратная связь будет работать на хостинге или сервере, локально данный функционал недоступен. 
    <br>Присутствует страница 404, а такие исправление ссылок(удаление .php), файл rename.htaccess, разместив сайт на хосте, необходимо удалить rename и оставить .htaccess
    </p>
</div>
      </div>
    </div>
</body>
</html>  
