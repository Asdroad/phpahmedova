<?php
require_once "config.php"; // Подключение к базе данных

$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $referral_code = $_POST["message"];

    // Проверка введенного реферального кода
    $query = "SELECT * FROM referrals WHERE email = ? AND unique_code = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$email, $referral_code]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        $success = true;
    }
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
    <title>Реферальная система</title>
</head>
<body>
<?php require "blocks/header.php" ?>
<?php require "blocks/need_auth.php" ?>
<div class="container mt-5" style="margin-bottom: 20px;">
    <h3>Реферальная система</h3>
    <form action="index.php" method="post">
        <input type="email" name="email" placeholder="Введите email" class="form-control" required><br>
        <textarea name="message" class="form-control" placeholder="Введите уникальный код, равный 10 символам" required></textarea><br>
        <button type="submit" name="send" class="btn btn-outline-primary">Отправить</button>
    </form>
</div>

<!-- Модальное окно -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Реферальный код</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Ваш реферальный код введен корректно. Скидка будет применена.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<?php require "blocks/footer.php" ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Скрипт для отображения модального окна -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var myModal = new bootstrap.Modal(document.getElementById("myModal"));

        <?php if ($success): ?>
        myModal.show();
        <?php endif; ?>
    });
</script>

</body>
</html>
