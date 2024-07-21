<?php
include '../includes/db.php';
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $grade = $_POST['grade'];
    $email = $_POST['email'];

    $sql = "INSERT INTO students (name, grade, email) VALUES ('$name', '$grade', '$email')";
    if ($conn->query($sql) === TRUE) {
        header("Location: students.php");
    } else {
        $error = "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<?php include '../includes/header.php'; ?>
<h2>Add New Student</h2>
<?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
<form method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <label for="grade">Grade:</label>
    <input type="text" id="grade" name="grade" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <button type="submit">Add Student</button>
</form>
</div>
</body>
</html>
