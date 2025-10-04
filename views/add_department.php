<?php
require_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];

    $stmt = $conn->prepare("INSERT INTO departments (name) VALUES (?)");
    $stmt->execute([$name]);

    header("Location: department_list.php");
    exit();
}
?>

<h2>Add New Department</h2>
<form method="POST">
    Department Name: <input type="text" name="name" required><br>
    <button type="submit">Add Department</button>
</form>
