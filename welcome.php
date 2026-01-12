<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f6f8;
            padding: 40px;
        }
        .box {
            background: white;
            padding: 20px;
            width: 500px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Form Data (POST)</h2>

    <?php
   print_r($_POST);
    $name     = $_POST['name'] ?? '';
    $email    = $_POST['email'] ?? '';
    $website  = $_POST['website'] ?? '';
    $comments = $_POST['comments'] ?? '';
    $gender   = $_POST['gender'] ?? '';
   $checkbox = $_POST['checkbox'] ?? '';
   $radio    = $_POST['radio'] ?? '';

    // Displaying data
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Website: $website <br>";
    echo "Comments: $comments <br>";
    echo "Gender: $gender <br>";
    echo "Checkbox: $checkbox <br>";
   echo "Radio: $radio <br>";
    ?>
</div>

</body>
</html>
