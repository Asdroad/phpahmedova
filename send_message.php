<?php
session_start();

// Подключение к базе данных
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Проверяем длину сообщения
    if (strlen($message) < 10) {
        // Если сообщение слишком короткое, возвращаем сообщение об ошибке
        echo "Сообщение должно содержать не менее 10 символов";
        exit();
    }

    // Подготовленное выражение для вставки данных в таблицу Contact_Messages
    $stmt = $pdo->prepare("INSERT INTO Contact_Messages (email, message) VALUES (?, ?)");
    // Выполняем запрос, передавая данные вместо плейсхолдеров
    $stmt->execute([$email, $message]);

    // Выводим сообщение об успешной отправке
    echo "Сообщение успешно отправлено";
    exit();
} else {
    // Если запрос не был отправлен методом POST, возвращаем сообщение об ошибке
    echo "Неверный запрос";
    exit();
}
?>
