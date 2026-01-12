<?php
$nameErr = $emailErr = $fileErr = "";
$name = $email = "";

if (isset($_POST['submit'])) {

    // NAME
    if (empty($_POST['name'])) {
        $nameErr = "Name is required";
    } else {
        $name = $_POST['name'];
    }

    // EMAIL
    if (empty($_POST['email'])) {
        $emailErr = "Email is required";
    } elseif (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $email = $_POST['email'];
    } 
    else {
        $emailErr = "Invalid email format";
    }

    // FILE
    if ($_FILES['myfile']['name'] == "") {

        $fileErr = "File is required";

    } elseif ($_FILES['myfile']['size'] > 50000) {

        $fileErr = "File size must be less than 50KB";
        
    }

    // 🔴 IF ANY ERROR → REDIRECT BACK
    if (!empty($nameErr) || !empty($emailErr) || !empty($fileErr)) {
        header(
            "Location: form2.php?nameErr=" . urlencode($nameErr) .
            "&emailErr=" . urlencode($emailErr) .
            "&fileErr=" . urlencode($fileErr)
        );
        exit();
    }

    // ✅ SUCCESS
    move_uploaded_file(
        $_FILES['myfile']['tmp_name'],
        "uploads/" . $_FILES['myfile']['name']
    );

    echo "<hr>";
    echo "<b>Form Submitted Successfully</b><br>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
}
?>
