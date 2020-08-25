<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
// Переменные, которые отправляет пользователь
$offerusername = $_POST['offerusername'];
$offerphone = $_POST['offerphone'];
$modalusername = $_POST['modalusername'];
$modalphone = $_POST['modalphone'];
$brifusername = $_POST['brifusername'];
$brifphone = $_POST['brifphone'];
$brifemail = $_POST['brifemail'];
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $msg = "Форма успешна отправлена";
    $mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    // Настройки вашей почты
    $mail->Host       = 'smtp.mail.ru'; // SMTP сервера GMAIL
    $mail->Username   = 'shmel092697@mail.ru'; // Логин на почте
    $mail->Password   = '09p26a97'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('shmel092697@mail.ru', 'Рустам'); // Адрес самой почты и имя отправителя
    // Получатель письма
    $mail->addAddress('nusratov_r@mail.ru');

    // Само письмо
    // -----------------------
    $mail->isHTML(true);

    $mail->Subject = 'Новая заявка';
    $mail->Body    = "<b>Имя:</b> $offerusername$modalusername$brifusername <br>
        <b>Телефон:</b> $offerphone$modalphone$brifphone <br>
        <b>Почта:</b> $brifemail ";
        
    // Проверяем отравленность сообщения
    if ($mail->send()) {
        header('Location: thanks.php');
    } else {
        echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
    }
} catch (Exception $e) {
    echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}
