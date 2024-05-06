<?php
session_start();

if (isset($_POST['itemId']) && isset($_POST['itemName']) && isset($_POST['itemDescription']) && isset($_POST['itemPrice'])) {
    $item = [
        'itemId' => $_POST['itemId'],
        'itemName' => $_POST['itemName'],
        'itemDescription' => $_POST['itemDescription'],
        'itemPrice' => $_POST['itemPrice'],
        'itemImage' => $_POST['imageUrl']
    ];

    // Добавляем товар в корзину или увеличиваем количество, если он уже есть в корзине
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = []; // Если корзина не существует, создаем пустой массив
    }

    // Проверяем, есть ли уже такой товар в корзине
    $itemIndex = array_search($item['itemId'], array_column($_SESSION['cart'], 'itemId'));

    if ($itemIndex !== false) {
        // Увеличиваем количество товара
        $_SESSION['cart'][$itemIndex]['quantity']++;
    } else {
        // Добавляем новый товар в корзину
        $item['quantity'] = 1;
        array_push($_SESSION['cart'], $item);
    }

    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Не переданы все необходимые данные о товаре.']);
}
?>
