<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "maxbezdelin@gmail.com"; // Email, на который будут отправляться сообщения
    $subject = "Обратная связь с сайта";

    $headers = "From: $email\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    $body = "Имя: $name\nEmail: $email\nСообщение:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Сообщение отправлено успешно!";
    } else {
        echo "Ошибка при отправке сообщения.";
    }
?>