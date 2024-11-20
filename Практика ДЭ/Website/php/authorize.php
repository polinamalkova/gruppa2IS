<?php
include_once __DIR__ . '/database.php';

session_start(); // Add this line to start the session

$login = $_POST['login'];
$password = $_POST['password'];

if ($login === 'admin' && $password === 'qwerty_admin') {
    header("Location: ../admin.html");
    exit();
}

// Поиск пользователя в базе данных
$sql = "SELECT * FROM client WHERE login = '$login' AND password = '$password'";
$result = $conn->query($sql);

// Проверка результатов запроса
if ($result->num_rows > 0) {
    // Авторизация успешна, сохранение данных пользователя в сессии
    $row = $result->fetch_assoc();
    $_SESSION['name'] = $row['name'];
    $_SESSION['famlia'] = $row['famlia'];
    $_SESSION['email'] = $row['email'];

    // Перенаправление в личный кабинет
    header("Location: ../cab.php");
} else {
    // Неправильный логин или пароль, вывод сообщения об ошибке
    echo "Неправильный логин или пароль";
}


// Закрытие подключения к базе данных
$conn->close();
?>

