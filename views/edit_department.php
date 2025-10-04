<?php
require_once '../config/db.php';

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM departments WHERE id = ?");
$stmt->execute([$id]);
$dept = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];

    $stmt = $conn->prepare("UPDATE departments SET name=? WHERE id=?");
    $stmt->execute([$name, $id]);

    header("Location: department_list.php");
    exit();
}
?>

<h2>Edit Department</h2>
<form method="POST">
    Department Name: <input type="text" name="name" value="<?= $dept['name'] ?>" required><br>
    <button type="submit">Save Changes</button>
</form>
