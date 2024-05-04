<?php
// Подключение к базе данных (необходимо изменить параметры подключения на ваши)
$host = 'localhost:3306'; // Хост базы данных
$dbname = 'PHPAHMEDOVA'; // Имя базы данных
$username = 'root'; // Имя пользователя базы данных
$password = 'babaka456'; // Пароль пользователя базы данных

// Создание подключения
$conn = new mysqli($host, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получение данных из формы регистрации
$email = $_POST['registerEmail'];
$username = $_POST['registerUsername'];
$password = $_POST['registerPassword'];

// Хэширование пароля
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// SQL запрос для вставки данных в таблицу пользователей
$sql = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "Регистрация прошла успешно!";

} else {
    echo "Ошибка при регистрации: " . $conn->error;
}

// Закрытие соединения
$conn->close();
header("Location: index.php");
exit;
?>
