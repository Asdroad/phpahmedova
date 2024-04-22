<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Контактная форма</title>
</head>
<body>
<?php require "blocks/header.php" ?>
<div class="container mt-5" style="margin-bottom: 20px;">
    <h3>Контактная форма</h3>
    <form action="index.php" method="post">
        <input type="email" name="email" placeholder="Введите Email" class="form-control"><br>
        <textarea name="message" class="form-control" placeholder="Введите ваше сообщение"></textarea><br>
        <button type="submit" name="send" class="btn btn-outline-primary">Отправить</button>
    </form>
</div>
<?php require "blocks/footer.php" ?>
</body>
</html>
