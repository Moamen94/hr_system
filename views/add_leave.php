<?php
require_once '../config/db.php';


$stmt = $conn->query("SELECT * FROM employees");
$employees = $stmt->fetchAll();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $employee_id = $_POST['employee_id'];
    $leave_type = $_POST['leave_type'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    $stmt = $conn->prepare("INSERT INTO leaves (employee_id, leave_type, start_date, end_date) VALUES (?, ?, ?, ?)");
    $stmt->execute([$employee_id, $leave_type, $start_date, $end_date]);

    header("Location: leave_list.php");
    exit();
}
?>

<h2>Request Leave</h2>
<form method="POST">
    Employee:
    <select name="employee_id" required>
        <?php foreach ($employees as $emp): ?>
            <option value="<?= $emp['id'] ?>"><?= $emp['name'] ?></option>
        <?php endforeach; ?>
    </select><br>

    Leave Type:
    <select name="leave_type" required>
        <option value="Sick">Sick</option>
        <option value="Annual">Annual</option>
        <option value="Unpaid">Unpaid</option>
    </select><br>

    Start Date: <input type="date" name="start_date" required><br>
    End Date: <input type="date" name="end_date" required><br>

    <button type="submit">Request Leave</button>
</form>
