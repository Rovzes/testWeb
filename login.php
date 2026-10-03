<?php
$pageTitle = "Вход";
require __DIR__ . "/includes/header.php";
?>

<form action="enter.php" method="post" class="login-form">
    <div class="form-field">
        <label for="email">E-mail</label>
        <input id="email" name="email" type="email" required>
    </div>
    <div class="form-field">
        <label for="passwd">Password</label>
        <input id="passwd" name="passwd" type="password" required minlength="8">
    </div>
    <div class="form-field form-field--checkbox">
        <input id="remember" name="remember" type="checkbox" value="1">
        <label for="remember">Запомнить меня</label>
    </div>
    <button type="submit">Войти</button>
</form>

<?php require __DIR__ . "/includes/footer.php"; ?>