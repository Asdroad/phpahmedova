<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <title>PHP веб сайт</title>
</head>
<body>
<?php require 'blocks/header.php' ?>
<main>
    <div class="row row-cols-1 row-cols-md-2 mb-3 text-center">
        <?php
        require_once 'config.php';

        $sql = "SELECT * FROM Products";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='col'>
                        <div class='card mb-4 rounded-3 shadow-sm'>
                            <div class='card-header py-3'>
                                <h4 class='my-0 fw-normal'>" . $row["name"] . "</h4>
                            </div>
                            <div class='card-body'>
                                <img src='" . $row["image_url"] . "' class='card-img-top' alt='" . $row["name"] . "' style='max-height: 400px;'>
                                <h1 class='card-title pricing-card-title'>" . $row["price"] . "₽<small class='text-body-secondary fw-light'>/день</small></h1>
                                <ul class='list-unstyled mt-3 mb-4'>
                                    <li>" . $row["description"] . "</li>
                                </ul>
                                <button type='button' class='w-100 btn btn-lg btn-primary' onclick=\"addToCart('" . $row["product_id"] . "', '" . $row["name"] . "', '" . $row["description"] . "', '" . $row["price"] . "', '".$row["image_url"]."')\">Попробовать</button>
                            </div>
                        </div>
                    </div>";
            }
        }
        ?>
    </div>
    <footer class="pt-4 my-md-10 pt-md-10 border-top">
        <div class="row">
            <div class="col-6 col-md offset-md-2">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a>
                    </li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-auto text-center">
            <img src="img/iconflutter.svg" alt="Icon" style="max-width: 150px;">
        </div>
    </footer>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function addToCart(itemId, itemName, itemDescription, itemPrice, imageUrl) {
        // Отправляем AJAX-запрос на сервер
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'add_to_cart.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                if (response.success) {
                    alert('Товар успешно добавлен в корзину!');
                } else {
                    alert('Произошла ошибка при добавлении товара в корзину.');
                }
            }
        };
        xhr.send('itemId=' + itemId + '&itemName=' + encodeURIComponent(itemName) + '&itemDescription=' + encodeURIComponent(itemDescription) + '&itemPrice=' + encodeURIComponent(itemPrice) + '&imageUrl=' + encodeURIComponent(imageUrl)); // Исправлено на imageUrl
    }
</script>
<script>
    // Функция для удаления товара из корзины
    function removeFromCart(itemId) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'remove_from_cart.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                if (response.success) {
                    // Если количество товара больше единицы, отправляем запрос на уменьшение количества на одну единицу
                    if (response.quantity > 0) {
                        alert('Количество товара уменьшено на одну единицу. Текущее количество: ' + response.quantity);
                    } else {
                        // Если количество товара равно нулю, то удаляем товар полностью
                        alert('Товар успешно удален из корзины!');
                    }
                    // Обновляем содержимое корзины и общую стоимость
                    loadCartContent();
                    loadCartSummary();
                } else {
                    alert('Произошла ошибка при удалении товара из корзины: ' + response.message);
                }
            }
        };
        xhr.send('itemId=' + itemId);
    }
</script>
</body>
</html>
