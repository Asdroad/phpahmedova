<?php
// Начало сессии
session_start();

header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

// Функция для добавления товара в корзину
function addToCart($itemId, $itemName, $itemDescription) {
    // Проверяем, существует ли массив корзины в сессии, если нет, создаем его
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['itemId'])) {
        addToCart($_POST['itemId'], $_POST['itemName'], $_POST['itemDescription']);
    }
    // Добавляем товар в корзину
    $_SESSION['cartItems'][] = array(
        "id" => $itemId,
        "name" => $itemName,
        "description" => $itemDescription
    );
}

// Функция для удаления товара из корзины
function removeFromCart($itemId) {
    // Проверяем, существует ли массив корзины в сессии
    if (isset($_SESSION['cartItems'])) {
        // Ищем индекс товара в корзине по его id
        $index = array_search($itemId, array_column($_SESSION['cartItems'], 'id'));
        // Если товар найден, удаляем его из корзины
        if ($index !== false) {
            unset($_SESSION['cartItems'][$index]);
            // Сбрасываем ключи массива
            $_SESSION['cartItems'] = array_values($_SESSION['cartItems']);
        }
    }
}

// Пример добавления товара в корзину
addToCart(1, "Товарымывымыв 1", "Описание товара 1");
addToCart(2, "Товар 2", "Описание товара 2");
addToCart(3, "Товар 3", "Описание товара 3");

// Обработка запроса на удаление товара из корзины
if (isset($_POST['removeItemId'])) {
    removeFromCart($_POST['removeItemId']);
    // Переадресация обратно на страницу корзины для обновления списка товаров
    header("Location: cart.php");
    exit; // Добавлено для завершения выполнения скрипта
}
?>

<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>PHP веб сайт</title>
</head>
<body>
<?php require "blocks/header.php" ?>
<main>
    <!-- Контент страницы корзины -->
    <div class="container mt-5">
        <h3>Ваша корзина</h3>
        <div class="row">
            <?php
            // Получаем данные о товарах из сессии
            if (isset($_SESSION['cartItems'])) {
                $cartItems = $_SESSION['cartItems'];
                // Генерация карточек товаров в корзине
                foreach ($cartItems as $item) {
                    echo '
                        <div class="col">
                            <div class="card mb-4 rounded-3 shadow-sm">
                                <div class="card-header py-3">
                                    <h4 class="my-0 fw-normal">' . $item["name"] . '</h4>
                                </div>
                                <div class="card-body">
                                    <p>' . $item["description"] . '</p>
                                    <form action="cart.php" method="post">
                                        <input type="hidden" name="removeItemId" value="' . $item["id"] . '">
                                        <button type="submit" class="btn btn-danger">Удалить из корзины</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        ';
                }
            }
            ?>
        </div>
        <div class="text-center">
            <button type="button" class="btn btn-primary">Оформить заказ</button>
        </div>
    </div>
</main>
<?php require "blocks/footer.php" ?>
</body>
</html>
