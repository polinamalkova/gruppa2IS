<?php
session_start();

$hostName = "31.129.99.31";
$dbUser = "2is-b03_2is-b03";
$dbName = "2is-b03_2is-b03";
$dbPassword = "dTav2z8hny";

$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
