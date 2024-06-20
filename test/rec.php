<?php
include_once __DIR__ . '/bd.php';

$name = $conn->real_escape_string($_POST['name']);
$surname = $conn->real_escape_string($_POST['surname']);
$phone = $conn->real_escape_string($_POST['email']);
$email = $conn->real_escape_string($_POST['phone']);
$login = $conn->real_escape_string($_POST['login']);
$password = $conn->real_escape_string($_POST['password']);


$stmt = $conn->prepare("INSERT INTO user (name, surname, email, phone, login, password) VALUES (?, ?, ?, ?, ?, ?)");

if (!$stmt) {
    echo json_encode(array("success" => false, "message" => "Ошибка: " . $conn->error));
    exit();
}

$stmt->bind_param("ssssss", $name, $surname, $email, $phone, $login, $password);

if ($stmt->execute()) {
    $_SESSION['name'] = $name;
    $_SESSION['surname'] = $surname;
    $_SESSION['email'] = $email;
    $_SESSION['phone'] = $phone;
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
    header("Location: ../1.php");
    echo json_encode(array("success" => true, "message" => "Пользователь успешно зарегестрирован"));
} else {
    echo json_encode(array("success" => false, "message" => "Ошибка: " . $stmt->error));
}

$stmt->close();
$conn->close();
?>
