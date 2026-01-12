<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="login.php">
    Name: <input type="text" name="username">
    <button type="submit">Submit</button>
</form>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="photo">
    <button>Upload</button>
</form>

    <?php
    // $x = 10;

    // function test()
    // {
    //     echo $GLOBALS['x'];
    // }

    // test(); // Output: 10

echo $_FILES['photo']['name'];
echo $_FILES['photo']['size'];
var_dump($_SERVER);
// var_dump($_FILES);
    echo $_SERVER['PHP_SELF'];
echo "<br>";
// echo $_SERVER['SERVER_NAME'];
echo "<br>";
// echo $_SERVER['REQUEST_METHOD'];

    ?>
</body>

</html>