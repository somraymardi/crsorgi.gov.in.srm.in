<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Profile</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['name']; ?>!</h1>
    <p>Date of Birth: <?php echo $_SESSION['dob']; ?></p>
    <p>Gender: <?php echo $_SESSION['gender']; ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>
