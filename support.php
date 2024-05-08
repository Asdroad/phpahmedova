<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Контактная форма</title>
</head>
<body>
<?php require "blocks/header.php" ?>
<?php require "blocks/need_auth.php" ?>
<div class="container mt-5" style="margin-bottom: 20px;">
    <h3>Контактная форма</h3>
    <form id="contactForm" action="send_message.php" method="post">
        <input type="email" name="email" placeholder="Введите Email" class="form-control"><br>
        <textarea id="message" name="message" class="form-control" placeholder="Введите ваше сообщение"></textarea><br>
        <div id="errorMessage" class="text-danger" style="display: none;">Сообщение должно содержать не менее 10 символов</div>
        <button type="button" id="submitBtn" class="btn btn-outline-primary">Отправить</button>
    </form>
</div>
<?php require "blocks/footer.php" ?>

<script>
    document.getElementById('submitBtn').addEventListener('click', function() {
        var message = document.getElementById('message').value;
        if (message.length < 10) {
            document.getElementById('errorMessage').style.display = 'block';
        } else {
            document.getElementById('errorMessage').style.display = 'none';
            document.getElementById('contactForm').submit();
        }
    });
</script>

</body>
</html>
