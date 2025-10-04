<?php
require_once '../config/db.php';

$id = $_GET['id'];


$stmt = $conn->prepare("UPDATE leaves SET status = 'Approved' WHERE id = ?");
$stmt->execute([$id]);

header("Location: leave_list.php");
exit();
