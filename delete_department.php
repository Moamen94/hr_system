<?php
require_once '../config/db.php';

$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM departments WHERE id = ?");
$stmt->execute([$id]);

header("Location: department_list.php");
exit();
