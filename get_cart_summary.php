<?php
session_start();

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
// Получаем содержимое корзины из сессии
    $summ = 0;
    $cartItems = $_SESSION['cart'];

// Выводим содержимое корзины
    foreach ($cartItems as $item) {
        $summ += $item['itemPrice'];
    }

    echo "<p>Общая стоимость: $summ руб.</p>";
}
?>
