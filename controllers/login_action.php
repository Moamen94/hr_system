<?php
session_start();

require_once '../config/db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
$stmt->bindParam(':username', $username);
$stmt->execute();
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
  
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    
    
    header("Location: ../views/dashboard.php");
    exit();
} else {
    header("Location: login.php?error=true");
    exit();
}
?>
