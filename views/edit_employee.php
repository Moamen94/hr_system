<?php
require_once '../config/db.php';


$id = $_GET['id'];


$stmt = $conn->prepare("SELECT * FROM employees WHERE id = ?");
$stmt->execute([$id]);
$emp = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];

    $stmt = $conn->prepare("UPDATE employees SET name=?, email=?, phone=?, department=? WHERE id=?");
    $stmt->execute([$name, $email, $phone, $department, $id]);

    header("Location: employee_list.php");
    exit();
}
?>

<h2>Edit Employee</h2>
<form method="POST">
    Name: <input type="text" name="name" value="<?= $emp['name'] ?>" required><br>
    Email: <input type="email" name="email" value="<?= $emp['email'] ?>" required><br>
    Phone: <input type="text" name="phone" value="<?= $emp['phone'] ?>"><br>
    Department: <input type="text" name="department" value="<?= $emp['department'] ?>"><br>
    <button type="submit">Save Changes</button>
</form>
