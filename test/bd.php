<?php
session_start();

$hostName = "127.0.0.1";
$dbUser = "root";
$dbName = "bd";
$dbPassword = "";

$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>