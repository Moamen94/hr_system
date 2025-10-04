<?php

require_once '../config/db.php';


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>




<?php
$stmt = $conn->query("SELECT employees.*, departments.name AS department_name FROM employees LEFT JOIN departments ON employees.department_id = departments.id");
$employees = $stmt->fetchAll();
?>

<h2>Employee List</h2>
<table border="1" cellpadding="5">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Department</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($employees as $emp): ?>
    <tr>
        <td><?= $emp['name'] ?></td>
        <td><?= $emp['email'] ?></td>
        <td><?= $emp['phone'] ?></td>
        <td><?= $emp['department_name'] ?></td>
        <td>
            <a href="edit_employee.php?id=<?= $emp['id'] ?>">Edit</a> |
            <a href="delete_employee.php?id=<?= $emp['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
