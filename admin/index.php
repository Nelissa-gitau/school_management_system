<?php
include '../includes/db.php';
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

// Fetch the count of students and staff
$student_count_sql = "SELECT COUNT(*) as student_count FROM students";
$student_count_result = $conn->query($student_count_sql);
$student_count_row = $student_count_result->fetch_assoc();
$student_count = $student_count_row['student_count'];

$staff_count_sql = "SELECT COUNT(*) as staff_count FROM staff";
$staff_count_result = $conn->query($staff_count_sql);
$staff_count_row = $staff_count_result->fetch_assoc();
$staff_count = $staff_count_row['staff_count'];

// Fetch recent activities (based on ID as a placeholder for recent additions)
$recent_activities_sql = "SELECT * FROM students ORDER BY id DESC LIMIT 5";
$recent_activities_result = $conn->query($recent_activities_sql);
$recent_activities = [];
if ($recent_activities_result->num_rows > 0) {
    while ($row = $recent_activities_result->fetch_assoc()) {
        $recent_activities[] = $row;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <style>
        .dashboard {
            display: flex;
            flex-direction: column;
            gap: 2em;
        }
        .statistics, .activities {
            display: flex;
            justify-content: space-around;
        }
        .stat-item, .activity-item {
            background-color: #f4f4f4;
            padding: 1.5em;
            border: 1px solid #ddd;
            border-radius: 8px;
            width: 45%;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .stat-item h3, .activity-item h4 {
            margin-bottom: 0.5em;
            font-size: 1.5em;
            color: #555;
        }
        .stat-item p, .activity-item p {
            font-size: 2.5em;
            color: #007BFF;
            font-weight: bold;
        }
        .activity-item ul {
            list-style: none;
            padding: 0;
        }
        .activity-item ul li {
            margin-bottom: 0.5em;
        }
        .overview {
            background-color: #f4f4f4;
            padding: 1.5em;
            border: 1px solid #ddd;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .overview h4 {
            margin-bottom: 0.5em;
            font-size: 1.5em;
            color: #555;
        }
        .overview .chart-placeholder {
            width: 100%;
            height: 300px;
            background-color: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #555;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
    </header>
    <nav>
        <a href="../index.php">Home</a>
        <a href="students.php">Students</a>
        <a href="staff.php">Staff</a>
        <a href="../contact.php">Contact Us</a>
        <a href="index.php">Dashboard</a>
        <a href="logout.php">Logout</a>
    </nav>
    <div class="container dashboard">
        <h2>Admin Dashboard</h2>
        <div class="statistics">
            <div class="stat-item">
                <h3>Total Students</h3>
                <p><?php echo $student_count; ?></p>
            </div>
            <div class="stat-item">
                <h3>Total Staff</h3>
                <p><?php echo $staff_count; ?></p>
            </div>
        </div>
        <!-- <div class="overview">
            <h4>Overview</h4>
            <div class="chart-placeholder">
                Chart Placeholder
            </div>
        </div> -->
        <div class="activities">
            <div class="activity-item">
                <h4>Recent Activities</h4>
                <ul>
                    <?php foreach ($recent_activities as $activity): ?>
                        <li><?php echo $activity['name']; ?> was added.</li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Student Management System. All rights reserved.</p>
    </footer>
</body>
</html>
