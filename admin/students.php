<?php
include '../includes/db.php';
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
?>
<?php include '../includes/header.php'; ?>
<h2>Manage Students</h2>
<a href="student_add.php">Add New Student</a>
<table>
    <tr>
        <th>Name</th>
        <th>Grade</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    <?php
    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['name']}</td>
                <td>{$row['grade']}</td>
                <td>{$row['email']}</td>
                <td>
                    <a href='student_edit.php?id={$row['id']}'>Edit</a> | 
                    <a href='student_delete.php?id={$row['id']}'>Delete</a>
                </td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No students found</td></tr>";
    }
    ?>
</table>
</div>
</body>
</html>
