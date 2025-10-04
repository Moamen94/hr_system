<?php
require_once '../config/db.php';


$stmt = $conn->query("SELECT leaves.*, employees.name FROM leaves JOIN employees ON leaves.employee_id = employees.id");
$leaves = $stmt->fetchAll();
?>

<h2>Leave Requests</h2>

<table border="1" cellpadding="5">
    <tr>
        <th>Employee Name</th>
        <th>Leave Type</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($leaves as $leave): ?>
    <tr>
        <td><?= $leave['name'] ?></td>
        <td><?= $leave['leave_type'] ?></td>
        <td><?= $leave['start_date'] ?></td>
        <td><?= $leave['end_date'] ?></td>
        <td><?= $leave['status'] ?></td>
        <td>
            <a href="approve_leave.php?id=<?= $leave['id'] ?>">Approve</a> |
            <a href="reject_leave.php?id=<?= $leave['id'] ?>">Reject</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
