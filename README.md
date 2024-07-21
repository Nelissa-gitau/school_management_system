# Student Management System

## Overview
The Student Management System is a web application designed to manage student and staff records efficiently. It allows administrators to add, edit, and delete student and staff information, and provides a dashboard for viewing statistics and recent activities.

## Features
- **Admin Authentication**: Secure login for administrators.
- **Student Management**: Add, edit, delete, and view student records.
- **Staff Management**: Add, edit, delete, and view staff records.
- **Dashboard**: View statistics and recent activities.
- **Responsive Design**: Ensures usability across various devices.

## Technologies Used
- **PHP**: Server-side scripting language.
- **MySQL**: Database management system.
- **HTML/CSS**: For structuring and styling the web pages.
- **JavaScript**: For dynamic interactions.
- **Chart.js**: For creating interactive charts.
- **Bootstrap**: For responsive design (if applicable).

## Installation and Setup

### Prerequisites
- XAMPP or any other web server with PHP and MySQL support.
- Web browser.

### Steps
1. **Clone the Repository**:
   ```sh
   git clone https://github.com/TheODDYSEY/student_management_system.git
   ```

2. **Move to Web Server Directory**:
   Move the cloned repository to the `htdocs` directory of your XAMPP installation.

3. **Start the Web Server**:
   Open XAMPP Control Panel and start the Apache and MySQL services.

4. **Create the Database**:
   - Open `phpMyAdmin` through your web browser (usually at `http://localhost/phpmyadmin`).
   - Create a new database named `school_management_system`.
   - Import the database structure from the `school_management_system.sql` file located in the root directory of the project.

5. **Configure Database Connection**:
   - Open the `includes/db.php` file.
   - Update the database credentials if necessary:
     ```php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "school_management_system";
     ```

6. **Access the Application**:
   - Open your web browser and navigate to `http://localhost/school_management_system/`.


## Usage

### Admin Dashboard
- **Statistics**: View the total number of students and staff.
- **Recent Activities**: View recent activities such as newly added students or staff.

### Student Management
- **View Students**: See a list of all students.
- **Add Student**: Add a new student to the system.
- **Edit Student**: Modify existing student details.
- **Delete Student**: Remove a student from the system.

### Staff Management
- **View Staff**: See a list of all staff members.
- **Add Staff**: Add a new staff member to the system.
- **Edit Staff**: Modify existing staff details.
- **Delete Staff**: Remove a staff member from the system.

### Home Page
- **Hero Section**: Welcoming message and admin login link.
- **Features Section**: Highlights the main features of the system.

### Contact Page
- **Contact Form**: Allows users to send a message to the admin.

## Screenshots
Include screenshots of the main pages and features to provide a visual overview of the application.

## License
This project is licensed under the MIT License - see the LICENSE.md file for details.
