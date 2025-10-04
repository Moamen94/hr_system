<?php
session_start();

require_once '../config/db.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];


if ($password !== $confirm_password) {
    header("Location: register.php?error=true");
    exit();
}

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);


$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
$stmt->execute([$username, $email, $hashedPassword]);


header("Location: login.php");
exit();
?>
