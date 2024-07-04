<?php
session_start();

$hostName = "31.129.99.31";
$dbUser = "2is-b07_2is-b07";
$dbName = "2is-b07_2is-b07";
$dbPassword = "2qCy5WmZqR";

$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>