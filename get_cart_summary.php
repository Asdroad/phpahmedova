<?php
session_start();

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    // Получаем содержимое корзины из сессии
    $totalPrice = 0;
    $cartItems = $_SESSION['cart'];

    // Выводим содержимое корзины
    foreach ($cartItems as $item) {
        // Учитываем цену товара, умноженную на его количество
        $totalPrice += $item['itemPrice'] * $item['quantity'];
    }

    echo "<p>Общая стоимость: {$totalPrice} руб.</p>";
} else {
    // Выводим сообщение, если корзина пуста
    echo "<p>Корзина пуста</p>";
}
?>
