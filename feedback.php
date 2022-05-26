<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];
$room = $_POST['room'];



$to = 'viktorkyrylovych88@gmail.com';
$subject = 'Заявка на хостел (Стандарт)';    
$body ="Имя: $name\n Почта: $email\n Отзыв:\n $feedback";
$subject = '=?UTF-8?B?'.base64_encode($subject).'?=';
$headers.="From: mypost@mail.domain\nReply-To: no-reply@mail.domain\r\n";
$headers.="Content-type: text/plain; charset=UTF-8\r\n";
$headers.="Content-transfer-encoding: quoted-printable";

if (mail ($to, $subject, $body, $headers)) {
    header("Location: http://127.0.0.1:5500/index.html");
} else {  
 $result='<div class="alert alert-danger">Что-то не так... Попробуйте позже</div>';
}


