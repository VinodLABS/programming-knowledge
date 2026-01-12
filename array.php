<?php

$testscore = [
    "vinod" => [
        "Math" => 51,
        "Science" => 33,
        "English" => 37
    ],
    "gaourav" => [
        "Math" => 39,
        "Science" => 44,
        "English" => 32
    ],
    "sachin" => [
        "Math" => 33,
        "Science" => 46,
        "English" => 40
    ],
    "hardik" =>  [
        "Math" => 48,
        "Science" => 70,
        "English" => 35
    ],
    "rohit" =>   [
        "Math" => 37,
        "Science" => 44,
        "English" => 49
    ]
];
$totalMath = 0;
$totalScience = 0;
$totalEnglish = 0;
$studentCount = count($testscore);
foreach ($testscore as $student) {
    $totalMath += $student["Math"];
    $totalScience += $student["Science"];
    $totalEnglish += $student["English"];
}
$averageMath = $totalMath / $studentCount;
$averageScience = $totalScience / $studentCount;
$averageEnglish = $totalEnglish / $studentCount;
echo "Average Math score: " . round($averageMath, 2) . "<br>";
echo "Average Science score: " . round($averageScience, 2) . "<br>";
echo "Average English score: " . round($averageEnglish, 2) . "<br>";
