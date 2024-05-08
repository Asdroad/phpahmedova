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

$stmt = $conn->prepare("INSERT INTO Users (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email , $hashed_password);
if ($stmt->execute()) {
    echo "success";
} else {
    echo $stmt->error;
}
?>
