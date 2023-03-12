<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="welcome">
        <h1>Welcome, <?php echo $_SESSION["username"]; ?>!</h1>
        <p>You have successfully logged in.</p>
        <a href="logout.php" class="btn">Sign Out</a>
    </div>
</body>
</html>
    