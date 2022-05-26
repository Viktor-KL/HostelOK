<?php 

$name = $_POST['name'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$room = $_POST['room'];



$to = 'viktorkyrylovych88@gmail.com';
$subject = 'Заявка на хостел (Стандарт)';    
$body ="Имя: $name\n Телефон: $phone\n Дата:\n $date\n Комната:\n $room";
$subject = '=?UTF-8?B?'.base64_encode($subject).'?=';
$headers.="From: mypost@mail.domain\nReply-To: no-reply@mail.domain\r\n";
$headers.="Content-type: text/plain; charset=UTF-8\r\n";
$headers.="Content-transfer-encoding: quoted-printable";

if (mail ($to, $subject, $body, $headers)) {
    header("Location: http://127.0.0.1:5500/postorder.html");
} else {  
 $result='<div class="alert alert-danger">Что-то не так... Попробуйте позже</div>';
}


