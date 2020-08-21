<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['username'];
$phone = $_POST['userphone'];

// // Формирование самого письма
// $title = "Заголовок письма";
// $body = "
// <h2>Новое письмо</h2>
// <b>Имя:</b> $name<br>
// <b>Почта:</b> $email<br><br>
// <b>Сообщение:</b><br>$text
// ";

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $msg = "Форма успешна отправлена";
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;


    // Настройки вашей почты
    $mail->Host       = 'smtp.mail.ru'; // SMTP сервера вашей почты
    $mail->Username   = 'vanya.rusakov.97@list.ru'; // Логин на почте
    $mail->Password   = 'rpYI3YOii2o'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('vanya.rusakov.97@list.ru', 'Имя отправителя'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('nusratov_r@mail.ru');  

//     // Прикрипление файлов к письму
// if (!empty($file['name'][0])) {
//     for ($ct = 0; $ct < count($file['tmp_name']); $ct++) {
//         $uploadfile = tempnam(sys_get_temp_dir(), sha1($file['name'][$ct]));
//         $filename = $file['name'][$ct];
//         if (move_uploaded_file($file['tmp_name'][$ct], $uploadfile)) {
//             $mail->addAttachment($uploadfile, $filename);
//             $rfile[] = "Файл $filename прикреплён";
//         } else {
//             $rfile[] = "Не удалось прикрепить файл $filename";
//         }
//     }   
// }
// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = "Новая заявка";
$mail->Body = "<b>Имя:</b> $name <br>
<b>Телефон:</b> $phone";

// Проверяем отравленность сообщения
if ($mail->send()) {
        header("Location: than.php");
    } else {
        echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
    }
} catch (Exception $e) {
    echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}


// Отображение результата
echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);