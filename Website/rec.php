<?php
include_once __DIR__ . '/database.php';

$name = $conn->real_escape_string($_POST['name']);
$famlia = $conn->real_escape_string($_POST['famlia']);
$phone = $conn->real_escape_string($_POST['phone']);
$email = $conn->real_escape_string($_POST['email']);
$login = $conn->real_escape_string($_POST['login']);
$password = $conn->real_escape_string($_POST['password']);


$stmt = $conn->prepare("INSERT INTO user (name, famlia, phone, email, login, password) VALUES (?, ?, ?, ?, ?, ?)");

if (!$stmt) {
    echo json_encode(array("success" => false, "message" => "Ошибка: " . $conn->error));
    exit();
}

$stmt->bind_param("ssssss", $name, $famlia, $phone, $email, $login, $password);

if ($stmt->execute()) {
    $_SESSION['name'] = $name;
    $_SESSION['famlia'] = $famlia;
    $_SESSION['phone'] = $phone;
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
