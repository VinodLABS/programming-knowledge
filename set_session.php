<?php
// Start the session
session_start();

// Set session variables
$_SESSION["username"] = "john_doe";
$_SESSION["fav_color"] = "blue";
$_SESSION["is_logged_in"] = true;

echo "Session variables are set.";
?>
