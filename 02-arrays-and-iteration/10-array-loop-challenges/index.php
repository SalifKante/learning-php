<?php

/*
  Challenge 1: Create a multiplication table using a nested `for` loop. The table should look like this:

1 x 1 = 1
1 x 2 = 2
1 x 3 = 3
1 x 4 = 4
1 x 5 = 5
1 x 6 = 6
1 x 7 = 7
1 x 8 = 8
1 x 9 = 9
1 x 10 = 10
2 x 1 = 2
2 x 2 = 4
2 x 3 = 6
2 x 4 = 8
... 
10 x 10 = 100
*/
echo '<h3>Multiplication Table</h3>';

for($i=1; $i<=10; $i++){
  echo 'Multiplication Table x' . $i . '<br>'; 
  for($j=1; $j<=10; $j++){
      echo $i .' x '.$j.' = '. $i*$j.'<br>';
  }
  echo '<br>';
}
/*
  Challenge 2: Get the sum of the numbers in an array by using a foreach loop. For bonus points, also use a for loop.
*/

echo '<h3>Array Sum</h3>';

$numbers = [1, 2, 3, 4, 5];

$sum1 = 0;
foreach($numbers as $number){
  $sum1 += $number;
}
echo $sum1 . '<br>';


$sum2 = 0;
foreach($numbers as $number){
  $sum2 += $number;
}
echo $sum2;

/*
  Challenge 3: Calculate the average students grade from an array of students. Each student has their own array with the key 'grades'. 

  	1. Create an array of students with their names and grades (0 - 100)
	2. Iterate over the students array with a foreach loop
	3. Calculate the average grade for each student
*/

echo '<h3>Average Grade</h3>';
$students = [
  [
    'name' => 'Salif',
    'grade' => [80, 85, 90, 85]
  ],
  [
    'name' => 'Moh',
    'grade' => [70, 65, 85, 55]
  ],
  [
    'name' => 'Omar',
    'grade' => [60, 75, 80, 85]
  ]
 
  ];

foreach($students as $student){
  $name = $student['name'];
  $grades = $student['grade'];

  //Calculate the AVG
  $average = array_sum($grades) / count($grades);
  echo "{$name}: Average Grade = {$average} <br>";
}
