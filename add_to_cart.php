<?php
session_start();

if (isset($_POST['itemId']) && isset($_POST['itemName']) && isset($_POST['itemDescription']) && isset($_POST['itemPrice']) && isset($_POST['imageUrl'])) {
    $item = [
        'itemId' => $_POST['itemId'],
        'itemName' => $_POST['itemName'],
        'itemDescription' => $_POST['itemDescription'],
        'itemPrice' => $_POST['itemPrice'],
        'itemImage' => $_POST['imageUrl']
    ];

    // Добавляем товар в корзину
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = []; // Если корзина не существует, создаем пустой массив
    }
    array_push($_SESSION['cart'], $item); // Добавляем элемент в массив

    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Не переданы все необходимые данные о товаре.']);
}
?>
