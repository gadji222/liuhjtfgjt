<?php
$email = $_POST['email'];
$message = $_POST['message'];
    
$err = '';
if(trim($email) == '')
    $err = 'Введите ваш email';
else if(trim($message) == '')
    $err = 'Введите сообщение';
else if(strlen($message) < 10)
    $err = 'Сообщение должно быть более 10 символов';
    
if($err != '') {
    echo $err;
    exit;
}

$subject = "=?utf-8?B?".base64_encode("Owl-site")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

mail('murad.bulguchev06@bk.ru', $subject, $message, $headers);
header('Location: /about.php')
?>