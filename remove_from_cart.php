<?php
session_start();

if (isset($_POST['itemId'])) {
    $itemId = $_POST['itemId'];

    // Проверяем, существует ли товар в корзине
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['itemId'] == $itemId) {
                // Удаляем товар из корзины
                unset($_SESSION['cart'][$key]);
                echo json_encode(['success' => true]);
                exit;
            }
        }
    }
    // Если товар не найден в корзине
    echo json_encode(['success' => false, 'message' => 'Товар не найден в корзине.']);
} else {
    // Если не передан идентификатор товара
    echo json_encode(['success' => false, 'message' => 'Не передан идентификатор товара.']);
}
?>
