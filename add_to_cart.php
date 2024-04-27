<?php
session_start();

if (isset($_POST['itemId'])) {
    $itemId = $_POST['itemId'];
    $_SESSION['cart'][] = $itemId;
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Не передан id товара.']);
}
?>
