<?php
include '../includes/db.php';
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];
$sql = "SELECT * FROM students WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $grade = $_POST['grade'];
    $email = $_POST['email'];

    $sql = "UPDATE students SET name='$name', grade='$grade', email='$email' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        header("Location: students.php");
    } else {
        $error = "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<?php include '../includes/header.php'; ?>
<h2>Edit Student</h2>
<?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
<form method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required>
    <br>
    <label for="grade">Grade:</label>
    <input type="text" id="grade" name="grade" value="<?php echo $row['grade']; ?>" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>
    <br>
    <button type="submit">Update Student</button>
</form>
</div>
</body>
</html>
