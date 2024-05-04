<?php
$host = 'localhost:3306'; // Хост базы данных
$dbname = 'PHPAHMEDOVA'; // Имя базы данных
$username = 'root'; // Имя пользователя базы данных
$password = 'babaka456'; // Пароль пользователя базы данных

// Подключение к базе данных с использованием PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Установка атрибутов PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Ошибка подключения к базе данных: " . $e->getMessage());
}

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
