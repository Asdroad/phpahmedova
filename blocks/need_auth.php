<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Регистрация</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="register.php" method="post">
                    <div class="mb-3">
                        <label for="registerEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="registerEmail" name="registerEmail" placeholder="Введите ваш email" required>
                    </div>
                    <div class="mb-3">
                        <label for="registerUsername" class="form-label">Логин</label>
                        <input type="text" class="form-control" id="registerUsername" name="registerUsername" placeholder="Введите ваш логин" required>
                    </div>
                    <div class="mb-3">
                        <label for="registerPassword" class="form-label">Пароль</label>
                        <input type="password" class="form-control" id="registerPassword" name="registerPassword" placeholder="Введите ваш пароль" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                </form>
            </div>
        </div>
    </div>
</div>

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
                    <button type="button" class="btn btn-primary btn-block" id="showRegisterModalBtn">Зарегистрироваться</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
session_start();
if (!isset($_SESSION['user_name'])) {
    echo '<script>
        $(document).ready(function() {
            $("#loginModal").modal("show");
        });
    </script>';
}
?>
<script>
    $(document).ready(function() {
        var showRegisterModalBtn = $('#showRegisterModalBtn');
        var registerModal = $('#registerModal');
        var loginModal = $('#loginModal');

        showRegisterModalBtn.on('click', function() {
            loginModal.modal('hide');
            registerModal.modal('show');
        });
    });
</script>
