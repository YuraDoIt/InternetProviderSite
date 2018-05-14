<?php

$recepient = "mycase4me@gmail.com";
$sitename = "Internet provider";

$adress = trim($_POST["adress"]);
$name = trim($_POST["name"]);
$sname = trim($_POST["sname"]);
$surname = trim($_POST["surname"]);
$phone = trim($_POST["phone"]);
$email = trim($_POST["email"]);
$kind = trim($_POST["kind"]);
$taruf = trim($_POST["taruf"]);
$info = trim($_POST["info"]);

$message = "Адреса: $adress \n Ім'я : $name \n Прізвище: $sname \n По-батькові: $surname \n Телефон $phone \nE-mail: $email \nОсоба: $kind \nТариф: $taruf \nПовідомлення: $info";
// \nТелефон: $phone";
// "Имя: $name  \ne-mail: $email \nОсоба: $kind \nТариф: $taruf \n \nДодаткова інформація: $info";

$pagetitle = "Заявка с сайта \"$siteName\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>