<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<?php require "blocks/header.php" ?>

<main>
    <div class="container">
        <h2 class="mb-4">Корзина</h2>
        <div id="cart-content">
            <!-- Здесь будет отображаться содержимое корзины -->
        </div>
        <div id="cart-summary" class="mt-4">
            <!-- Здесь будет отображаться общая стоимость товаров в корзине -->
        </div>
    </div>
</main>

<?php require "blocks/need_auth.php" ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Функция для загрузки содержимого корзины
    function loadCartContent() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'get_cart_content.php');
        xhr.onload = function() {
            if (xhr.status === 200) {
                document.getElementById('cart-content').innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }

    // Функция для загрузки общей стоимости товаров в корзине
    function loadCartSummary() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'get_cart_summary.php');
        xhr.onload = function() {
            if (xhr.status === 200) {
                document.getElementById('cart-summary').innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }

    // Загрузка содержимого корзины при загрузке страницы
    window.onload = function() {
        loadCartContent();
        loadCartSummary();
    };

    // Функция для добавления товара в корзину
    function addToCart(itemId, itemName, itemDescription) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'add_to_cart.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                if (response.success) {
                    // Обновляем содержимое корзины и общую стоимость
                    loadCartContent();
                    loadCartSummary();
                    alert('Товар успешно добавлен в корзину!');
                } else {
                    alert('Произошла ошибка при добавлении товара в корзину.');
                }
            }
        };
        xhr.send('itemId=' + itemId + '&itemName=' + encodeURIComponent(itemName) + '&itemDescription=' + encodeURIComponent(itemDescription));
    }
</script>
</body>
</html>
