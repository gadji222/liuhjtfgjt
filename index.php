<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title>Сайт</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

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
  <a class="btn btn-outline-primary" href="/auth.php">Кабинет пользователя</a>
  <?php else: ?>
  <a class="btn btn-outline-primary" href="/auth.php">Войти</a>
  <?php endif; ?>
  </div>
  
<div class="container mt-5">
    <h3 class="md-5">Топ 10 популярные аниме</h3>
    <div class="d-flex flex-wrap">
   
   <div class="card mb-5 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Атака титанов</h4>
      </div>
      <div class="card-body">
        <img src="img/1.png" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, которые не обладают особым интеллектом, зато едят людей и получают от этого удовольствие. После продолжительной борьбы остатки человечества построили высокую стену, окружившую страну людей, через которую титаны пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся свидетелями страшного события — участок стены разрушается супертитаном, появившимся прямо из воздуха.
    </li>
    
        </ul>
        <a button type="button" class="btn btn-lg btn-block btn-outline-primary" href="https://yummyanime.club/catalog/item/vtorzhenie-gigantov">Смотреть</button></a>    </div>

</div>
   <div class="card mb-5 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Тетрадь смерти</h4>
      </div>
      <div class="card-body">
        <img src="img/5.png" class="img-thumbnail"  width="300" height="">
        <ul class="list-unstyled mt-3 mb-4">
          <li>Манга за авторством Цугуми Обы, проиллюстрированная Такэси Обатой, выпускавшаяся в журнале Weekly Shonen Jump с 1 декабря 2003 года. Согласно опросу, проведённому в 2007 году министерством культуры Японии, занимает 10-е место среди лучшей манги всех времён.</li>
        <li>«Тетрадь Смерти» 2 сезон обрела невероятную популярность 1 сезон в начале века смотреть онлайн онлайн, сделав историю все сезоны противостояния Киры и все серии гениального детектива L Death Note классикой детективного жанра Тетрадь смерти и просто культовым аниме. Скрыть
</li>
        </ul>
        <a button type="button" class="btn btn-lg btn-block btn-outline-primary" href="https://yummyanime.club/catalog/item/tetrad-smerti-final-nyj-ishod">Смотреть</button></a>    </div>
</div>        
<div class="card mb-5 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Токийский гиль</h4>
      </div>
      <div class="card-body">
        <img src="img/3.png" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li>С обычным студентом Кэном Канэки случается беда, парень попадает в больницу. Но на этом неприятности не заканчиваются: ему пересаживают органы гулей – существ, поедающих плоть людей. После злосчастной операции Канэки становится одним из чудовищ, пытается стать своим, но для людей он теперь изгой, обреченный на уничтожение.</li>
    
        </ul>
        <a button type="button" class="btn btn-lg btn-block btn-outline-primary" href="https://yummyanime.club/catalog/item/tokijskij-gul-tv-2">Смотреть</button></a>    </div>
        </div>
        <div class="card mb-5 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Наруто</h4>
      </div>
      <div class="card-body">
        <img src="img/4.png" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li>Сёнэн-манга Масаси Кисимото, рассказывающая о жизни шумного и непоседливого ниндзя-подростка Наруто Удзумаки, мечтающего достичь всеобщего признания и стать Хокагэ - главой своего селения и сильнейшим ниндзя. Манга выпускалась с 21 сентября 1999 года по 10 ноября 2014 года издательством Shueisha в журнале Weekly Shonen Jump.
</li>
   
        </ul>
        <a button type="button" class="btn btn-lg btn-block btn-outline-primary" href="https://yummyanime.club/catalog/item/naruto-tv-1">Смотреть</button></a>    </div>
</div>    
<div class="card mb-5 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Стальной алхимик</h4>
      </div>
      <div class="card-body">
        <img src="img/6.png" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li>Манга Хирому Аракавы. Манга ежемесячно издавалась с августа 2001 года по июнь 2010 года в журнале Shonen Gangan, принадлежащем компании Square Enix. В манге насчитывается 108 глав, опубликованных в 27 томах. В 2011 году издательство «Комикс-Арт» объявило о лицензировании манги в России. Русское издание первого тома было опубликовано 26 января 2012 года. 31 декабря 2018 года издательство Азбука-Аттикус объявило о переиздании манги.
</li>
        
        </ul>
        <a button type="button" class="btn btn-lg btn-block btn-outline-primary" href="https://yummyanime.club/catalog/item/stalnoj-alhimik-tv1">Смотреть</button></a>    </div>
</div>    
<div class="card mb-5 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Ванпанчмен</h4>
      </div>
      <div class="card-body">
        <img src="img/7.png" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li>Японский веб-комикс, созданный мангакой под псевдонимом ONE, который публикуется в свободном доступе в интернете с 2009 года. В 2012 году был начат выпуск работы в формате цифровой манги с иллюстрациями Юсукэ Мураты под руководством ONE. Манга лицензирована для издания в России издательством «Азбука-Аттикус». Общий выпуск манги только в Японии в 2017 году превысил 14 миллионов экземпляров.
</li>

        </ul>
        <a button type="button" class="btn btn-lg btn-block btn-outline-primary" href="https://yummyanime.club/catalog/item/vanpanchmen">Смотреть</button></a>    </div>
</div>    

<div class="card mb-5 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Ван пис</h4>
      </div>
      <div class="card-body">
        <img src="img/11.png" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li>Гол Д. Роджер — король пиратов, добившийся за свою жизнь богатства, славы и власти - спрятал где-то на просторах этого мира загадочное сокровище, которое все называют «Ван-Пис». После смерти Роджера множество смельчаков кинулись на поиски этого большого куша. И наступила великая эпоха пиратов! Вот и паренёк по имени Луффи, живущий в маленькой прибрежной деревушке, мечтает стать пиратом. Ещё в детстве он ненароком съел дьявольский плод «резина-резина» и приобрёл невероятные способности. Повзрослев, он покидает родные места в погоне за величайшим сокровищем!
</li>

        </ul>
        <a button type="button" class="btn btn-lg btn-block btn-outline-primary" href="https://yummyanime.club/catalog/item/van-pis-tv">Смотреть</button></a>    </div>
</div>  

<div class="card mb-5 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Клинок рассекающий демонов</h4>
      </div>
      <div class="card-body">
        <img src="img/8.png" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li>Эпоха Тайсё. Ещё с древних времён ходят слухи, что в лесу обитают человекоподобные демоны, которые питаются людьми и выискивают по ночам новых жертв. Тандзиро Камадо — старший сын в семье, потерявший отца и взявший на себя заботу о родных. Однажды он уходит в соседний город, чтобы продать древесный уголь. Вернувшись утром, парень обнаруживает перед собой страшную картину: вся родня зверски убита, а единственная выжившая - младшая сестра Нэдзуко, обращённая в демона, но пока не потерявшая человечность. С этого момента начинается долгое и опасное путешествие Тандзиро и Нэдзуко, в котором мальчик намерен разыскать убийцу и узнать способ исцеления сестры.
</li>
        </ul>
        <a button type="button" class="btn btn-lg btn-block btn-outline-primary" href="https://yummyanime.club/catalog/item/klinok-rassekayushij-demonov">Смотреть</button></a>    </div>
</div>    

<div class="card mb-5 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Синий экзорцист</h4>
      </div>
      <div class="card-body">
        <img src="img/9.png" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li>Манга, написанная и иллюстрированная Кадзуэ Като. История вращается вокруг Рина Окумуры, подростка, который обнаруживает, что он и его брат-близнец Юкио - сыновья Сатаны. Выходит в журнале Jump Square издательства Shueisha с апреля 2009 года; по состоянию на декабрь 2020 года в формате танкобонов выпущена в 26 томах.
</li>

        </ul>
        <a button type="button" class="btn btn-lg btn-block btn-outline-primary" href="https://yummyanime.club/catalog/item/sinij-ekzorcist">Смотреть</button></a>    </div>
</div>  

<div class="card mb-5 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Наруто ураганные хроники</h4>
      </div>
      <div class="card-body">
        <img src="img/10.png" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li>В мире Наруто незаметно пролетели два года. Бывшие новички пополнили ряды опытных синоби в ранге тюнин и дзёнин. Главные герои не сидели на месте – каждый стал учеником одного из легендарных Саннин – трех великих ниндзя Конохи. Парень в оранжевом продолжил обучение у мудрого, но эксцентричного Дзирайи, постепенно восходя на новую ступень боевого мастерства. Сакура выдвинулась в помощницы и доверенные лица целительницы Цунадэ – нового вождя Деревни Листвы. Ну а Саскэ, чья гордыня привела к изгнанию из Конохи, вступил во временный союз со зловещим Оротимару, причем каждый считает, что лишь использует другого до поры до времени.
</li>

        </ul>
        <a button type="button" class="btn btn-lg btn-block btn-outline-primary" href="https://yummyanime.club/catalog/item/naruto-uragannye-hroniki">Смотреть</button></a>    </div>
</div>

</body>
</html>