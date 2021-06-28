<?php
if($_COOKIE['user'] == 'Куки')
    setcookie('user', 'Куки', time() - 3600, '/');
else
    setcookie('user', 'Куки', time() + 3600, '/');
header('Location: /');
?>