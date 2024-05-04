<?php
session_start();
// Закрываем сеанс для пользователя и перенаправляем на страницу входа
session_unset();
session_destroy();
header("Location: index.php");
exit();
?>
