<?php
include '../includes/db.php';
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];

$sql = "DELETE FROM staff WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    header("Location: staff.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
