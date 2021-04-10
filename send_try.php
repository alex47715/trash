<?php
    // Переменные, которые отправляет пользователь
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    //Фильтры для защиты
    $name = htmlspecialchars($name);
    $phone = htmlspecialchars($phone);
    $email = htmlspecialchars($email);
    $msg = htmlspecialchars($msg);
    
    $name = urldecode($name);
    $phone = urldecode($phone);
    $email = urldecode($email);
    $msg = urldecode($msg);

    $name = trim($name);
    $phone = trim($phone);
    $email = trim($email);
    $msg = trim($msg);

    //Отправка сообщения

    if (mail("dima346922336@gmail.com", "Вопрос заказчика", "ФИО: ".$name.". Телефон: ".$phone.". E-mail: ".$email.". Сообщение: ".$msg ,"From: dpireiko@mail.ru   \r\n")) {
        echo "Сообщение успешно отправлено.";
    } 
    else {
        echo "При отправке сообщения возникли ошибки.";
    }
?>