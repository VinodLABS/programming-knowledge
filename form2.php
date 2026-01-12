

<!DOCTYPE html>
<html>
<head>
    <title>PHP Form with File Upload</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f6f8;
            padding: 40px;
        }
        .box {
            background: white;
            padding: 20px;
            width: 400px;
            border-radius: 8px;
        }
        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Form with File Upload</h2>
<?php
$nameErr  = $_GET[
    'nameErr'] ?? "";
$emailErr = $_GET['emailErr'] ?? "";
$fileErr  = $_GET['fileErr'] ?? "";
?>

    <form action="process.php" method="post" enctype="multipart/form-data">

        Name:<br>
        <input type="text" name="name">
        <div class="error"><?php echo $nameErr; ?></div>
        <br>

        Email:<br>
        <input type="text"  name="email">
        <div class="error"><?php echo $emailErr; ?></div>
        <br>

        Upload File (Max 50KB):<br>
        <input type="file" name="myfile">
        <div class="error"><?php echo $fileErr; ?></div>
        <br><br>
        <input type="submit" name="submit" value="Submit">

    </form>
</div>
</body>
</html>
