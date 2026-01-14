<?php
session_start();


if (isset($_SESSION["username"])) {
    echo "Welcome, " . $_SESSION["username"] . "!<br>";
    echo "Your favorite color is " . $_SESSION["fav_color"] . ".<br>";
} else {
    echo "No session data found.";
}
?>
