<?php
session_start();
session_unset();
session_destroy();
header("Location: login.php");
?>
<?php
session_start();

// Destroy all session data
session_destroy();

// Redirect to the login page
header('Location: login.php');
exit();
