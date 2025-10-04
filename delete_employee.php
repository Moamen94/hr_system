<?php
require_once '../config/db.php';

$id = $_GET['id'];

$stmt = $conn->prepare("DELETE FROM employees WHERE id = ?");
$stmt->execute([$id]);

header("Location: employee_list.php");
exit();
