<?php
include '../includes/db.php';
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $position = $_POST['position'];
    $email = $_POST['email'];

    $sql = "INSERT INTO staff (name, position, email) VALUES ('$name', '$position', '$email')";
    if ($conn->query($sql) === TRUE) {
        header("Location: staff.php");
    } else {
        $error = "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<?php include '../includes/header.php'; ?>
<h2>Add New Staff</h2>
<?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
<form method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <label for="position">Position:</label>
    <input type="text" id="position" name="position" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <button type="submit">Add Staff</button>
</form>
</div>
</body>
</html>
