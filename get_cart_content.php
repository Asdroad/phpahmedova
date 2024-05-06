<?php
session_start();

$totalItems = 0; // Переменная для хранения общего количества товаров

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    // Получаем содержимое корзины из сессии
    $cartItems = $_SESSION['cart'];

    // Выводим содержимое корзины
    foreach ($cartItems as $item) {
        // Увеличиваем общее количество товаров
        $totalItems += $item['quantity'];

        // Выводим информацию о товаре
        echo "<p>Товар: {$item['itemName']} ({$item['quantity']} шт.)</p>";
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

// Выводим общее количество товаров в корзине
echo "<p>Общее количество товаров в корзине: {$totalItems}</p>";
?>
