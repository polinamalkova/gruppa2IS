<?php
include_once __DIR__ . '/database.php';

$name = $_POST['name'];
$famlia = $_POST['famlia'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$login = $_POST['login'];
$password = $_POST['password'];


header('Location: сab.php');
exit();
?