<!DOCTYPE html>
<html>

<head>
    <title>Student Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #333;
        }

        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            text-align: center;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }



        .hero-section {
            text-align: center;
            padding: 50px;
            background: url('/student_management_system/images/hero-bg.jpg') no-repeat center center/cover;
            font-size: 1em;
            margin-bottom: 1em;
            color: #333;
        }

        .hero-section .btn-primary {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        .features-section {
            display: flex;
            justify-content: space-around;
            padding: 20px;
            background-color: white;
        }

        .feature {
            width: 30%;
            text-align: center;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .container {
            margin: 20px;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: white;
        }
    </style>
</head>

<body>
    <header>
        <h1>Student Management System</h1>
    </header>
    <nav>
        <a href="./index.php">Home</a>
        <a href="./contact.php">Contact Us</a>
        <?php if (isset($_SESSION['admin'])) : ?>
            <a href="./admin/index.php">Dashboard</a>
            <a href="./admin/logout.php">Logout</a>
        <?php else : ?>
            <a href="./admin/login.php">Admin Login</a>
        <?php endif; ?>
    </nav>
    <div class="hero-section">
        <h2>Welcome to the Student Management System</h2>
        <p>Your one-stop solution for managing students and staff efficiently.</p>
        <a href="admin/login.php" class="btn-primary">Admin Login</a>
    </div>
    <div class="features-section">
        <div class="feature">
            <h3>Student Management</h3>
            <p>Easily manage student records, add new students, and keep track of their progress.</p>
        </div>
        <div class="feature">
            <h3>Staff Management</h3>
            <p>Manage staff details, add new staff members, and update their information effortlessly.</p>
        </div>
        <div class="feature">
            <h3>Contact Us</h3>
            <p>Have questions? Get in touch with us for more information or support.</p>
        </div>
    </div>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Student Management System. All rights reserved.</p>
    </footer>
</body>

</html>