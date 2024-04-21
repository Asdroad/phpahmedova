<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href = "/css/style.css">
    <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>PHP веб сайт</title>
</head>
<body>
<?php require "blocks/header.php"?>
<div class = "container">
    <h3> Контактная форма</h3>
    <form action="index.php" method="post">
        <input type ="email" name = "email" placeholder="Введите Email"
               class= "form-control">
        <textarea name = "message" class="form-control" placeholder="Ввеите ваше сообщение"></textarea>
        <button type="submit" name="send" class="btn btn-outline-primary">Отправить</button>
    </form>
</div>
    <?php require "blocks/footer.php"?>
</body>
</html>










<!--карта -->
<!--            <div class="col-6 col-md offset-md-2">-->
<!--                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2243.0711752419534!2d49.12359147682794!3d55.79200198897123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x415ead13c38db643%3A0x9563f6c8fe759e12!2z0YPQuy4g0J_Rg9GI0LrQuNC90LAsIDMyLCDQmtCw0LfQsNC90YwsINCg0LXRgdC_LiDQotCw0YLQsNGA0YHRgtCw0L0sIDQyMDAxNQ!5e0!3m2!1sru!2sru!4v1713714195515!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
<!--            </div>-->

<!--иконка-->

