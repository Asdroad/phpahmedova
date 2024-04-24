<?php
session_start();

// Проверяем, был ли передан id товара
if (isset($_POST['itemId'])) {
    // Получаем id товара из POST-запроса
    $itemId = $_POST['itemId'];

    // Добавляем товар в корзину
    $_SESSION['cart'][] = $itemId;

    // Отправляем ответ в формате JSON
    echo json_encode(['success' => true]);
} else {
    // Если id товара не был передан, отправляем ошибку
    echo json_encode(['success' => false, 'message' => 'Не передан id товара.']);
}
?>
