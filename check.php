<?php

    $email = $_POST['email'];
    $message = $_POST['message'];

    $error = '';
    if(trim($message)== '')
        $error='Введите ваш email';
    else if(trim($message)=='')
        $error = 'Введите само сообщение';
    else if(trim($message)<10)
        $error= 'Сообщение должно быть больше 10 символов';

    if($error!=''){
        echo $error;
        exit();
    }
