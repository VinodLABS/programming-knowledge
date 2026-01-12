<?php

if (isset($_POST['marks'])) {

    $marks = $_POST['marks'];

    if ($marks >= 90) {
        echo "A+ Grade";
    }
    elseif ($marks >= 75) {
        echo "A Grade";
    }
    elseif ($marks >= 60) {
        echo "B Grade";
    }
    elseif ($marks >= 40) {
        echo "C Grade";
    }
    else {
        echo "Fail";
    }
}
?>
