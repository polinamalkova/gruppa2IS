<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="shortcut icon" href="./img/logo.png">
</head>
<body>
<header>
        <a href="index.php">
            <img src="./img/logo.png" alt="Логотип">
        </a>
        <div class="text">
        <a href="catalog.php">Каталог</a>
        <a href="geo.php">Где нас найти?</a>
        <a href="adm.php">Администратор</a>
        <a href="regi.php">Вход</a>
        </div>
    </header>
    <br>
    <p onlick="window.location.href=' ./cab.php" class="ab">Авторизация</p>
    <form id="loginForm" action="cab.php" method="post">

        <input type="text" id="login" name="login" placeholder="Логин" require><br><br>

        <input type="text" id="password" name="password" placeholder="Пароль" require><br><br>
        
        <button type="submit" onlick="window.location.href=' ./cab.php'" style="background-color: black; font-size: 20px; color: white; margin-left: 100px">Войти</button>

</form>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer>
    <p>Copy Start - магазин продажи</p>
    <p>копировального оборудования</p>
    <br>
    <div class="par">
    <div class="foo">
    <p>г.Пермь, ул. Пушкина, дом 107а</p>
    <p>+7 (342) 244-89-21</p>
    <p>+7 (342) 236-28-03</p>
</div>
<div class="fo">
    <p>Наши соц. сети</p>
    <img src="./img/set.png" alt="Соц.сети">
</div>
</div>
</footer>
</body>
</html>


<?php
session_start();
include_once __DIR__ . '/database.php';

$login = $_POST['login'];
$password = $_POST['password'];

$sql = "SELECT * FROM customers WHERE login = '$login'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($password === $row['password']) {
        $_SESSION['login'] = $row['login'];
        $_SESSION['password'] = $row['password'];
        header("Location: ./cab.php");
        exit();
    } else {
        echo "Ошибка: Неверные данные";
    }
} else {
    echo "Ошибка: Неверные данные";
}

$conn->close();

?>