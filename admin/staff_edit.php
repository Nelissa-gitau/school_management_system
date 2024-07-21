<?php
include '../includes/db.php';
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];
$sql = "SELECT * FROM staff WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $position = $_POST['position'];
    $email = $_POST['email'];

    $sql = "UPDATE staff SET name='$name', position='$position', email='$email' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        header("Location: staff.php");
    } else {
        $error = "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<?php include '../includes/header.php'; ?>
<h2>Edit Staff</h2>
<?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
<form method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required>
    <br>
    <label for="position">Position:</label>
    <input type="text" id="position" name="position" value="<?php echo $row['position']; ?>" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>
    <br>
    <button type="submit">Update Staff</button>
</form>
</div>
</body>
</html>
