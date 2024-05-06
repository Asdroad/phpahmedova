<?php
session_start();

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    // Получаем содержимое корзины из сессии
    $cartItems = $_SESSION['cart'];

    // Выводим содержимое корзины
    foreach ($cartItems as $item) {
        // Выводим информацию о товаре
        echo "<p>Товар: {$item['itemName']}</p>";
        echo "<img src='{$item['itemImage']}' alt='{$item['itemName']}' style='max-width: 200px;'>";
        echo "<p>Описание: {$item['itemDescription']}</p>";
        echo "<p>Цена: {$item['itemPrice']}</p>";
        echo "<button class='btn btn-danger' onclick='removeFromCart({$item['itemId']})'>Удалить</button>"; // Добавленная кнопка удаления
        echo "<hr>";
    }
} else {
    // Выводим сообщение, если корзина пуста
    echo "<p>Корзина пуста</p>";
}
?>
