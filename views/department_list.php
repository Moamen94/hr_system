<?php
require_once '../config/db.php';
$stmt = $conn->query("SELECT * FROM departments");
$departments = $stmt->fetchAll();
?>

<h2>Department List</h2>
<a href="add_department.php">+ Add Department</a>
<table border="1" cellpadding="5">
    <tr>
        <th>Department Name</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($departments as $dept): ?>
    <tr>
        <td><?= $dept['name'] ?></td>
        <td>
           
            <a href="edit_department.php?id=<?= $dept['id'] ?>">Edit</a> |
            <a href="delete_department.php?id=<?= $dept['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
