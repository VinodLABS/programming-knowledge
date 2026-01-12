<?php

$uploadDir = "uploads/";


if (isset($_FILES['files'])) {

    foreach ($_FILES['files']['name'] as $index => $fileName) {
        
        $tmpName = $_FILES['files']['tmp_name'][$index];
     
        if (move_uploaded_file($tmpName, $uploadDir . $fileName)) {
            echo "Success: " . $fileName . "<br>";
        } else {
            echo "Failed: " . $fileName . "<br>";
        }
    }
}

?>
