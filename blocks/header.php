<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Вход</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="login.php" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Введите ваш email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Пароль</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Введите ваш пароль" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Войти</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none me-3">
        <img src="img/iconflutter.svg" alt="Icon" style="max-width: 30px; margin: 10px">
        <span class="fs-4">SilentSonics</span>
    </a>

    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto align-items-center" style="font-family: Helvetica, sans-serif;">
        <a class="mx-2 py-2 link-body-emphasis text-decoration-none" href="index.php">Главная</a>
        <a class="mx-2 py-2 link-body-emphasis text-decoration-none" href="contacts.php">Контакты</a>
        <a class="mx-2 py-2 link-body-emphasis text-decoration-none" href="support.php">Поддержка</a>
        <a class="mx-2 py-2 link-body-emphasis text-decoration-none" href="refsystem.php">Реферальная система</a>
        <a href="cart.php" class="mx-2 py-2 link-body-emphasis text-decoration-none">
            <img src="img/cart.svg" alt="basket" style="max-width: 25px;">
        </a>
    </nav>
    <a class="mx-2 btn btn-outline-primary" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Войти</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
