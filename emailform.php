<?php

$message = "Это самое простое сообщение в мире!";
$to = "skturner@yandex.ru";
$from = "skturnercz@gmail.com";
$subject = "Тема сообщения";
$subject = "=?utf-8?B?".base64_encode($subject)."?=";
$headers = "from: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
mail ($to, $subject, $message, $headers);

?>
