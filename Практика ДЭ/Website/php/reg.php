<?php
include_once __DIR__ . '/database.php';

session_start(); // Добавьте эту строку для запуска сессии

$name = $conn->real_escape_string($_POST['name']);
$famlia = $conn->real_escape_string($_POST['famlia']);
$otchestvo = $conn->real_escape_string($_POST['otchestvo']);
$email = $conn->real_escape_string($_POST['email']);
$login = $conn->real_escape_string($_POST['login']);
$password = $conn->real_escape_string($_POST['password']);
$confirm_password = $conn->real_escape_string($_POST['confirm_password']);


if($password != $confirm_password) {
    echo json_encode(array("success" => false, "message" => "Пароли не совпадают!"));
    exit();
}


$stmt = $conn->prepare("INSERT INTO client (name, famlia, otchestvo,  email, login, password) VALUES (?, ?, ?, ?, ?, ?)");

if (!$stmt) {
    echo json_encode(array("success" => false, "message" => "Ошибка: " . $conn->error));
    exit();
}

$stmt->bind_param("ssssss", $name, $famlia, $otchestvo, $email, $login, $password);

if ($stmt->execute()) {
    // Store user data in session variables
    $_SESSION['name'] = $name;
    $_SESSION['famlia'] = $famlia;
    $_SESSION['otchestvo'] = $otchestvo;
    $_SESSION['email'] = $email;
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
    header("Location: ../cab.php");
    echo json_encode(array("success" => true, "message" => "Пользователь успешно зарегестрирован"));
} else {
    echo json_encode(array("success" => false, "message" => "Ошибка: " . $stmt->error));
}

$stmt->close();
$conn->close();
?>