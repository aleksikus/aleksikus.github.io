<?php
    // получим данные с формы
    $text = $_POST['text'];
    $email = $_POST['email'];
    
    // обработаем полученные данные
    $text = htmlspecialchars($text);
    $email = htmlspecialchars($email);

    $text = urldecode($text);
    $email = urldecode($email);

    $text = trim($text);
    $email = trim($email);

    // отпрвка данных до вдресата
    if(mail("alakairusi@gmail.com",
    "Новое письмо с сайта",
    "Имя: ".$text."\n".
    "Email: ".$email."\n",
    "From: no-reply@mydomain.ru \r\n")
    
    ){
        echo ('Письмо успешно отправлено');
    }
    else{
        echo ('ошибка');
    }
?>