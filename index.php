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
        <img src="img/basket.svg" alt="basket" style="max-width: 25px;">
    </nav>
    <a class="mx-2 btn btn-outline-primary" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Войти</a>
</div>

<main>
    <div class="row row-cols-1 row-cols-md-2 mb-3 text-center">
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">MacBook Pro (13 дюймов, M2, 2022 г.)</h4>
                </div>
                <div class="card-body">
                    <img src="img/macbook_pro_13.jpg" class="card-img-top" alt="MacBook Pro 13" style="max-height: 400px;">
                    <h1 class="card-title pricing-card-title">500₽<small class="text-body-secondary fw-light">/день</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Apple M2 chip</li>
                        <li>8-ядерный процессор, 6 производительных ядра и 6 энергоэффективных ядра</li>
                        <li>10-core GPU</li>
                        <li>16GB оперативной памяти</li>
                        <li>256GB SSD</li>
                        <li>1 день в подарок в качестве тестового времени </li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-primary">Попробовать</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">MacBook Pro (14 дюймов, ноябрь 2023 г.)</h4>
                </div>
                <div class="card-body">
                    <img src="img/macbook_pro_14.jpg" class="card-img-top" alt="MacBook Pro 13" style="max-height: 400px;" >
                    <h1 class="card-title pricing-card-title">750₽<small class="text-body-secondary fw-light">/день</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Apple M3 chip</li>
                        <li>8-ядерный процессор, 4 производительных ядра и 4 энергоэффективных ядра</li>
                        <li>10-core GPU</li>
                        <li>16GB оперативной памяти</li>
                        <li>256GB SSD</li>
                        <li>1 день в подарок в качестве тестового времени </li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-primary">Попробовать</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 mb-3 text-center">
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">MacBook Pro (16 дюймов, ноябрь 2023 г.)</h4>
                </div>
                <div class="card-body">
                    <img src="img/macbook_pro_16.jpg" class="card-img-top" alt="MacBook Pro 13" style="max-height: 400px;" >
                    <h1 class="card-title pricing-card-title">1000₽<small class="text-body-secondary fw-light">/день</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Apple M3 Pro chip</li>
                        <li>12-ядерный процессор, 6 производительных ядра и 6 энергоэффективных ядра</li>
                        <li>18-core GPU</li>
                        <li>36GB оперативной памяти</li>
                        <li>1TB SSD</li>
                        <li>12 часов  в подарок в качестве тестового времени </li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-primary">Попробовать</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">MacBook Air (13 дюймов, ноябрь 2020 г.)</h4>
                </div>
                <div class="card-body">
                    <img src="img/macbook_air_13.jpg" class="card-img-top" alt="MacBook Pro 13" style="max-height: 400px;" >
                    <h1 class="card-title pricing-card-title">350₽<small class="text-body-secondary fw-light">/день</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Apple M1 chip</li>
                        <li>8-ядерный процессор, 4 производительных ядра и 4 энергоэффективных ядра</li>
                        <li>8-core GPU</li>
                        <li>8GB оперативной памяти</li>
                        <li>256GB SSD</li>
                        <li>1 день в подарок в качестве тестового времени </li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-primary">Попробовать</button>
                </div>
            </div>
        </div>
    </div>
    <footer class="pt-4 my-md-10 pt-md-10 border-top">
        <div class="row">
            <div class="col-6 col-md offset-md-2"> <!-- Добавлен класс offset-md-2 для создания отступа по бокам -->
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
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
<!-- Модальное окно входа -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Логин</h5>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
