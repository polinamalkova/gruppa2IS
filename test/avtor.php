<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="./img/log.png">
</head>
<body>
    <p onlick="window.location.href=' ./1.php" class="ab">Авторизация</p>
    <div class="pol">
    <form id="loginForm" action="1.php" method="post">

        <input type="text" id="login" name="login" placeholder="Логин" require><br><br>

        <input type="text" id="password" name="password" placeholder="Пароль" require><br><br>
        
        <button type="submit" onlick="window.location.href=' ./1.php'" class="knop">Войти</button>

</form>
</div>
<br>
<a href="index.php">Нет аккаунта?</a>
</body>
<?php
session_start();
include_once __DIR__ . '/bd.php';

$login = $_POST['login'];
$password = $_POST['password'];

$sql = "SELECT * FROM customers WHERE login = '$login'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($password === $row['password']) {
        $_SESSION['login'] = $row['login'];
        $_SESSION['password'] = $row['password'];
        header("Location: ./1.php");
        exit();
    } else {
        echo "Ошибка: Неверные данные";
    } 
} 

$conn->close();

?>
</html>

