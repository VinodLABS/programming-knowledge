<?php
$nameErr = $emailErr = "";
$name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = $_POST["name"];
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email";
    } else {
        $email = $_POST["email"];
    }
}
?>

<form method="post">
  Name:
  <input type="text" name="name">
  <span style="color:red"><?php echo $nameErr; ?></span>
  <br><br>

  Email:
  <input type="text" name="email">
  <span style="color:red"><?php echo $emailErr; ?></span>
  <br><br>

  <input type="submit">
</form>

<?php
echo "<h3>Your Input:</h3>";
echo "Name: $name <br>";
echo "Email: $email";
?>
