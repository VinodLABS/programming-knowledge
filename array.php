<?php
// Array of 5 students with scores in 3 subjects
$students = [
   "student1" => [
        "Math" => 85,
        "Science" => 90,
        "English" => 78
    ],
  "student2" => [
        "Math" => 75,
        "Science" => 80,
        "English" => 88
    ],
   "student3" => [
        "Math" => 92,
        "Science" => 85,
        "English" => 80
    ],
  "student4" =>  [
        "Math" => 68,
        "Science" => 70,
        "English" => 75
    ],
 "student5" =>   [
        "Math" => 80,
        "Science" => 78,
        "English" => 82
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