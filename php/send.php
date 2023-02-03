<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$message = $_POST['message'];

$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$mail = htmlspecialchars($mail);
$message = htmlspecialchars($message);

$name = urlencode($name);
$phone = urlencode($phone);
$mail = urlencode($mail);
$message = urlencode($message);

$name = trim($name);
$phone = trim($phone);
$mail = trim($mail);
$message = trim($message);

mail(to:'catch@alfabum.com', subject: 'Письмо с сайта', 'Имя: '.$name.' e-mail: '.$mail, )