<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Корзина</title>
</head>
<body>
<?php require "blocks/header.php" ?>

<main>
    <div class="container mt-5">
        <h3>Ваша корзина</h3>
        <div class="row">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Товар 1</h4>
                    </div>
                    <div class="card-body">
                        <p>Описание товара...</p>
                        <button type="button" class="btn btn-danger">Удалить из корзины</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button type="button" class="btn btn-primary">Оформить заказ</button>
        </div>
    </div>
</main>

<?php require "blocks/footer.php" ?>

</body>
</html>
