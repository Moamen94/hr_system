<?php
require_once '../config/db.php';

$stmt = $conn->query("SELECT * FROM employees");
$employees = $stmt->fetchAll();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $employee_id = $_POST['employee_id'];
    $salary = $_POST['salary'];
    $payment_date = $_POST['payment_date'];

    $stmt = $conn->prepare("INSERT INTO salaries (employee_id, salary, payment_date) VALUES (?, ?, ?)");
    $stmt->execute([$employee_id, $salary, $payment_date]);

    header("Location: salary_list.php");
    exit();
}
?>

<h2>Add Salary</h2>
<form method="POST">
    Employee:
    <select name="employee_id" required>
        <?php foreach ($employees as $emp): ?>
            <option value="<?= $emp['id'] ?>"><?= $emp['name'] ?></option>
        <?php endforeach; ?>
    </select><br>

    Salary: <input type="number" name="salary" step="0.01" required><br>
    Payment Date: <input type="date" name="payment_date" required><br>

    <button type="submit">Add Salary</button>
</form>
