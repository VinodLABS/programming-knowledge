<?php
session_start();

if (
    !isset($_SESSION['is_logged_in']) ||
    $_SESSION['is_logged_in'] !== true
) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
<p>You are logged in successfully.</p>

<a href="logout.php">Logout</a>

</body>
</html>
