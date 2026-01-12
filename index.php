<!DOCTYPE html>
<html>

<head>
    <title>PHP Practice</title>
</head>

<body>

    <?php

    /* ========= VARIABLES & DATA TYPES ========= */

    // $x = 10;
    // $y = "hii buddy";

    // var_dump($y);
    // echo "<br>";

    // /* Avoid adding string + int */
    // echo "x value is: $x<br>";



    // /* ========= STRING HANDLING ========= */

    // $text = "hello this is new php";
    // echo "My name is Vinod. $text<br>";



    // /* ========= TYPE CASTING ========= */

    // $a = 5;
    // $b = 5.34;
    // $c = "hello";
    // $d = true;

    // $a = (bool)$a;
    // $b = (bool)$b;
    // $c = (int)$c;
    // $d = (int)$d;

    // var_dump($a, $b, $c, $d);
    // echo "<br>";



    // /* ========= TERNARY OPERATOR ========= */

    // $x = 20;
    // $result = ($x > 21) ? "hii" : "bye";
    // echo $result . "<br>";



    // /* ========= MATH FUNCTIONS ========= */

    // $radius = 5;
    // $area = pi() * $radius * $radius;
    // echo "Area of circle: $area<br>";



    // /* ========= MIN & MAX ========= */

    // $maths = 90;
    // $science = 85;
    // $english = 78;

    // echo "Lowest marks: " . min($maths, $science, $english) . "<br>";
    // echo "Highest marks: " . max($maths, $science, $english) . "<br>";



    // /* ========= SQRT ========= */

    // echo "Square root of 20: " . sqrt(20) . "<br>";



    // /* ========= WHILE LOOP ========= */

    // $i = 1;
    // while ($i <= 10) {
    //     echo $i . "<br>";
    //     $i++;
    // }



    // /* ========= EVEN NUMBERS ========= */

    // $i = 1;
    // while ($i <= 20) {
    //     if ($i % 2 == 0) {
    //         echo $i . "<br>";
    //     }
    //     $i++;
    // }



    // /* ========= SUM 1–100 ========= */

    // $sum = 0;
    // $i = 1;

    // while ($i <= 100) {
    //     $sum += $i;
    //     $i++;
    // }
    // echo "Total sum: $sum<br>";



    // /* ========= STAR PATTERNS ========= */

    // for ($i = 1; $i <= 5; $i++) {
    //     for ($j = 1; $j <= $i; $j++) {
    //         echo "*";
    //     }
    //     echo "<br>";
    // }

    // echo "<br>";

    // for ($i = 5; $i >= 1; $i--) {
    //     for ($j = 1; $j <= $i; $j++) {
    //         echo "*";
    //     }
    //     echo "<br>";
    // }

    // echo "<br>";

    // for ($i = 1; $i <= 5; $i++) {
    //     for ($s = 5 - $i; $s > 0; $s--) {
    //         echo "&nbsp;&nbsp;";
    //     }
    //     for ($j = 1; $j <= $i; $j++) {
    //         echo "*";
    //     }
    //     echo "<br>";
    // }




    $fruits = ["Apple", "Banana", "Mango"];

    foreach ($fruits as $fr) {
        echo $fr . "<br>";
    }




    $numbers = [10, 20, 30, 40];

    foreach ($numbers as $num) {
        echo $num . "<br>";
    }




$prices = [
    "price1" => 100,
    "price2" => 250,
    "price3" => 400
];

$keys = array_keys($prices);

for ($i = 0; $i < count($keys); $i++) {
    echo $keys[$i] . "<br>";
}





echo "<ol>";
foreach ($prices as $priceKey => $priceValue) {
    echo "<li>" . $priceKey . ": ₹" . $priceValue . "</li>";
}
echo "</ol>";



    $colors = ["Red", "Green", "Blue"];

    for ($i = 0; $i < count($colors); $i++) {
        echo $colors[$i] . "<br>";
    }

for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}
    ?>

</body>

</html>