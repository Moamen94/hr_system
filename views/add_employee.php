<?php
require_once '../config/db.php';


$stmt = $conn->query("SELECT * FROM departments");
$departments = $stmt->fetchAll();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $department_id = $_POST['department_id'];

    $stmt = $conn->prepare("INSERT INTO employees (name, email, phone, department_id) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $email, $phone, $department_id]);

    header("Location: employee_list.php");
    exit();
}
?>

<h2>Add New Employee</h2>
<form method="POST">
    Name: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    Phone: <input type="text" name="phone"><br>
    Department:
    <select name="department_id">
        <?php foreach ($departments as $dept): ?>
            <option value="<?= $dept['id'] ?>"><?= $dept['name'] ?></option>
        <?php endforeach; ?>
    </select><br>
    <button type="submit">Add Employee</button>
</form>
