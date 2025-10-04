<?php
session_start();


if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <h2 class="title is-2">Welcome, <?= $_SESSION['username'] ?></h2>
        <p class="subtitle">This is your dashboard.</p>

        <a href="logout.php" class="button is-danger">Logout</a>
    </div>

</body>
</html>
