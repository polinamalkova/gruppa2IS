<?php
include_once __DIR__ . '/database.php';
session_start(); // Добавьте эту строку для запуска сессии

$name = $_SESSION['name'];
$famlia = $_SESSION['famlia'];
$otchestvo = $_SESSION['otchestvo'];
$email = $_SESSION['email'];
$login = $_SESSION['login'];

echo "Фамилия: " . $famlia . "<br>";
echo "Имя: " . $name . "<br>";
echo "Отчество: " . $otchestvo . "<br>";
echo "Email: " . $email . "<br>";
echo "Логин: " . $login . "<br>";

$conn->close();

?>
