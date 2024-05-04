<?php
require_once 'config.php'; // Подключение к базе данных

// Проверяем, была ли отправлена форма входа
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Подготавливаем и выполняем SQL-запрос для поиска пользователя с указанным email
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email); // Привязываем параметр к запросу
    $stmt->execute();
    $result = $stmt->get_result(); // Получаем результат выполнения запроса

    // Проверяем, найден ли пользователь
    if ($result->num_rows > 0) {
        // Получаем данные пользователя из результата запроса
        $user = $result->fetch_assoc();

        // Проверяем введенный пароль с сохраненным хэшем
        if (password_verify($password, $user['password'])) {
            // Начинаем сессию и устанавливаем сессионные переменные
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['username'];

            // Перенаправляем на главную страницу
            header("Location: index.php");
            exit;
        } else {
            // Если пароль не соответствует, выводим сообщение об ошибке
            echo "<p>Неверный логин или пароль. Попробуйте снова.</p>";
        }
    } else {
        // Если пользователь с указанным email не найден, выводим сообщение об ошибке
        echo "<p>Пользователь с указанным email не найден. Попробуйте снова.</p>";
    }

    // Закрываем запрос и соединение
    $stmt->close();
    $conn->close();
}
?>
