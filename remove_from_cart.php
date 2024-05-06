<?php
session_start();

if (isset($_POST['itemId'])) {
    $itemId = $_POST['itemId'];

    // Проверяем, существует ли товар в корзине
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['itemId'] == $itemId) {
                // Если количество товара больше одного, уменьшаем его на одну единицу
                // remove_from_cart.php
                if ($item['quantity'] > 1) {
                    $_SESSION['cart'][$key]['quantity'] -= 1;
                    echo json_encode(['success' => true, 'quantity' => $_SESSION['cart'][$key]['quantity']]);
                    exit;
                } else {
                    unset($_SESSION['cart'][$key]);
                    echo json_encode(['success' => true, 'quantity' => 0]);
                    exit;
                }
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
