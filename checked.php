<?php

if (isset($_POST['marks'])) {

    $marks = $_POST['marks'];

    switch (true) {
        case ($marks >= 90):
            echo "A+ Grade";
            break;

        case ($marks >= 75):
            echo "A Grade";
            break;

        case ($marks >= 60):
            echo "B Grade";
            break;

        case ($marks >= 40):
            echo "C Grade";
            break;

        default:
            echo "Fail";
    }
}
?>
