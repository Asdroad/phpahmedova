<?php
session_start();

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    // Получаем содержимое корзины из сессии
    $cartItems = $_SESSION['cart'];

    // Выводим содержимое корзины
    foreach ($cartItems as $itemId) {
        // Здесь можно выполнить запрос к базе данных для получения информации о товаре
        // Например: SELECT * FROM products WHERE id = $itemId

        // Выводим информацию о товаре (замените на свой код вывода)
        echo "<p>Товар с ID $itemId</p>";
    }
} else {
    // Выводим сообщение, если корзина пуста
    echo "<p>Корзина пуста</p>";
}
?>
