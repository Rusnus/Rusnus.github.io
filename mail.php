<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
// Переменные, которые отправляет пользователь
$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $msg = "Форма успешна отправлена";
    $mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    // Настройки вашей почты
    $mail->Host       = 'smtp.mail.ru'; // SMTP сервера GMAIL
    $mail->Username   = 'shmel092697@mail.ru'; // Логин на почте
    $mail->Password   = '09m26a9709p26a97'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('shmel092697@mail.ru', 'Рустам'); // Адрес самой почты и имя отправителя
    // Получатель письма
    $mail->addAddress('nusratov_r@mail.ru');

    // Само письмо
    // -----------------------
    $mail->isHTML(true);

    $mail->Subject = 'Новая заявка';
    $mail->Body    = "<b>Имя:</b> $user_name <br>
        <b>Телефон:</b> $user_phone <br>"
        // <b>Почта:</b> $offerphone$modalphone$brifphonel ";
        
    // Проверяем отравленность сообщения
    if ($mail->send()) {
        header('Location: index.html');
    } else {
        echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
    }
} catch (Exception $e) {
    echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}
