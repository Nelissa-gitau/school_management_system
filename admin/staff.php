<?php
include '../includes/db.php';
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
?>
<?php include '../includes/header.php'; ?>
<h2>Manage Staff</h2>
<a href="staff_add.php">Add New Staff</a>
<table>
    <tr>
        <th>Name</th>
        <th>Position</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    <?php
    $sql = "SELECT * FROM staff";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['name']}</td>
                <td>{$row['position']}</td>
                <td>{$row['email']}</td>
                <td>
                    <a href='staff_edit.php?id={$row['id']}'>Edit</a> | 
                    <a href='staff_delete.php?id={$row['id']}'>Delete</a>
                </td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No staff found</td></tr>";
    }
    ?>
</table>
</div>
</body>
</html>
