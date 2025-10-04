<?php
require_once '../config/db.php';

$stmt = $conn->query("SELECT salaries.*, employees.name FROM salaries JOIN employees ON salaries.employee_id = employees.id");
$salaries = $stmt->fetchAll();
?>

<h2>Salary List</h2>
<table border="1" cellpadding="5">
    <tr>
        <th>Employee Name</th>
        <th>Salary</th>
        <th>Payment Date</th>
    </tr>
    <?php foreach ($salaries as $salary): ?>
    <tr>
        <td><?= $salary['name'] ?></td>
        <td><?= $salary['salary'] ?></td>
        <td><?= $salary['payment_date'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<?php
require_once '../config/db.php';


$stmt = $conn->query("SELECT salaries.*, employees.name FROM salaries JOIN employees ON salaries.employee_id = employees.id");
$salaries = $stmt->fetchAll();

$total_salary_stmt = $conn->query("SELECT SUM(salary) AS total_salary FROM salaries");
$total_salary = $total_salary_stmt->fetch()['total_salary'];
?>

<h2>Salary List</h2>
<p>Total Salary Paid: <?= number_format($total_salary, 2) ?></p>

<table border="1" cellpadding="5">
    <tr>
        <th>Employee Name</th>
        <th>Salary</th>
        <th>Payment Date</th>
    </tr>
    <?php foreach ($salaries as $salary): ?>
    <tr>
        <td><?= $salary['name'] ?></td>
        <td><?= $salary['salary'] ?></td>
        <td><?= $salary['payment_date'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
