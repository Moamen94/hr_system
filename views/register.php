<?php

session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <h2 class="title is-2">Register New User</h2>

        <form action="register_action.php" method="POST">
            <div class="field">
                <label class="label">Username</label>
                <div class="control">
                    <input class="input" type="text" name="username" placeholder="Username" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Email</label>
                <div class="control">
                    <input class="input" type="email" name="email" placeholder="Email" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Password</label>
                <div class="control">
                    <input class="input" type="password" name="password" placeholder="Password" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Confirm Password</label>
                <div class="control">
                    <input class="input" type="password" name="confirm_password" placeholder="Confirm Password" required>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-primary">Register</button>
                </div>
            </div>
        </form>

        <?php
        if (isset($_GET['error'])) {
            echo '<div class="notification is-danger">Passwords do not match or some fields are missing!</div>';
        }
        ?>
    </div>

</body>
</html>
