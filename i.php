<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/Assets/PHPMailer/PHPMailerFunction.php');
$target_file = $_SERVER['DOCUMENT_ROOT']."/test.txt";



$mail = "z00m.serge@gmail.com";// $mail - Адрес получателя
$subject = "Тестируем почту";// $subject - Тема сообщения
$message = "Сегодня: среда (отправка файла)";// $message - Сообщение
$sender_mail = "Tsvetkov-SA@grmp.ru";// $sender_mail - Почта отправителя
$sender_name = "Сергей Цветков [Администратор]";// $sender_name - Имя отправителя


$result = SendMailGRMPAttachment($mail, $subject, $message, $sender_mail, $sender_name, $target_file);
echo "Тестируем GIT";
echo "Сообщение с вложением 'test.txt' для {$mail} от {$sender_mail} отправлено. {$result}";


/* Работает отправка

(Отправка Офера - предложения)
Sender	: 	GRMP
Reciver	:	Любой

(Отправка Офера - предложения)
Sender	: 	GRMP
Reciver	:	GRMP

(Отправка ЗАКАЗА, рассылка по списку Только если один из участников в GRMP)
Sender	: 	Любой
Reciver	:	GRMP


(Рассылка по списку, если хотя бы один из участников НЕ в GRMP)
Не работает отправка
Sender	: 	Любой
Reciver	:	Любой

*/
?>