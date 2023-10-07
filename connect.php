<?php
// Start the session
session_start();
$servername = "127.0.0.1";
$usernameRoot = "root";
$passwordRoot = "";
$dbname = "a1";

$conn = new mysqli($servername, $usernameRoot, $passwordRoot, $dbname);
if ($conn->connect_error) {
     die("Error connecting: " . $conn->connect_error);
}
