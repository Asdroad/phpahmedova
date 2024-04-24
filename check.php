<?php

$errors = [];

// Получаем данные из формы
$email = $_POST['email'];
$message = $_POST['message'];

// Проверяем корректность email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Некорректный email';
}

// Проверяем, было ли введено сообщение
if (empty($message)) {
    $errors[] = 'Введите сообщение';
} elseif (strlen($message) < 10) {
    $errors[] = 'Сообщение должно содержать не менее 10 символов';
}

// Если есть ошибки, выводим их
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
} else {
    // Если ошибок нет, можно обрабатывать данные дальше, например, сохранить в базу данных или отправить по электронной почте
    echo "Данные успешно отправлены!";
}
?>
