<?php

if (isset($_POST['number'])) {

    $num = $_POST['number'];

    echo "<h2>Table of $num</h2>";

    for ($i = 1; $i <= 10; $i++) {
        echo "$num x $i = " . ($num * $i) . "<br>";
    }

} else {
    echo "No number received!";
}

?>
