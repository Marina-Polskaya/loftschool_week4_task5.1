<?php
include '../vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.rambler.ru', 465, 'SSL'))
  ->setUsername('Marina-loftschool@rambler.ru')
  ->setPassword('23456') //Пароль другой, изменила для публикации
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Домашнее задание'))
  ->setFrom(['Marina-loftschool@rambler.ru' => 'Марина Морогова'])
  ->setTo(['marina_0880@mail.ru' => 'Ученикам школы Loftschool'])
  ->setBody('Проверка отправки сообщения для домашнего задания')
  ;

// Send the message
$result = $mailer->send($message);