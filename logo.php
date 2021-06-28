
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
<p class="lead">Я Булгучев Мурад
    <br>Я открытый, веселый, искренний, с активной жизненной позицией человек,
    <br>стремящийся узнавать что-то новое, экспериментировать,
    <br>творчески расти и доводить любое начаное дело до конца.
    <br>Легко устаноавливаю контакт с однокурсниками, с учитялями и
    <br>располагаю к себе, так как уважительно отношусь у учащимся и щедра на похвалу.
    <br>Cтиль общения демократический
    </p>
      </div>
    </div>
</body>
</html>  
