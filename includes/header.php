<!DOCTYPE html>
<html>

<head>
    <title>Student Management System</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>

<body>
    <header>
        <h1>Student Management System</h1>
    </header>
    <nav>
        <a href="../index.php">Home</a>
        <a href="../admin/students.php">Students</a>
        <a href="../admin/staff.php">Staff</a>
        <a href="../contact.php">Contact Us</a>
        <?php if (isset($_SESSION['admin'])) : ?>
            <a href="../admin/index.php">Dashboard</a>
            <a href="../admin/logout.php">Logout</a>
        <?php else : ?>
            <a href="../admin/login.php">Admin Login</a>
        <?php endif; ?>
    </nav>

    <div class="container">