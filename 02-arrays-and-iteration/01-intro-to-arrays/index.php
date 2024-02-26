<?php
$names = array('Salif', 'Omar', 'Ahmed');
$numbers = [1,2,3,4,5,6];

function inspect($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}
// inspect($names);
// inspect($numbers);
// print_r($numbers);

// echo $names[2];
// echo $numbers[3];

//Add element to array
// $numbers[] = 100;
// $numbers[] = 101;

//Add 200 at position 3
$numbers[3] = 200;

//Delete element at position 3
unset($numbers[3]);

//Reindex array $numbers
$numbers = array_values($numbers);
inspect($numbers);

?>