<?php
// Array of 5 students with scores in 3 subjects
$students = [
   "student1" => [
        "Math" => 51,
        "Science" => 33,
        "English" => 37
    ],
  "student2" => [
        "Math" => 39,
        "Science" => 44,
        "English" => 32
    ],
   "student3" => [
        "Math" => 33,
        "Science" => 46,
        "English" => 40
    ],
  "student4" =>  [
        "Math" => 48,
        "Science" => 70,
        "English" => 35
    ],
 "student5" =>   [
        "Math" => 37,
        "Science" => 44,
        "English" => 49
    ]
];
// Initialize total scores
$totalMath = 0;
$totalScience = 0;
$totalEnglish = 0;
$studentCount = count($students);

foreach ($students as $student) {
    $totalMath += $student["Math"];
    $totalScience += $student["Science"];
    $totalEnglish += $student["English"];
}

// Calculate averages
$averageMath = $totalMath / $studentCount;
$averageScience = $totalScience / $studentCount;
$averageEnglish = $totalEnglish / $studentCount;

// Display the results
echo "Average Math score: " . round($averageMath, 2) . "<br>";
echo "Average Science score: " . round($averageScience, 2) . "<br>";
echo "Average English score: " . round($averageEnglish, 2) . "<br>";
?>