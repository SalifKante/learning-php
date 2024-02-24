<?php 
//Intro to array
/*
$names = array('Salif','Omar','Mohamed');
$numbers = [1,2,3,4,5,6,7];

function inspect($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}
// inspect($names);
// inspect($numbers);
// print_r($names);
// echo $names[0];
// echo $names[2];
// echo $numbers[0];

//Add element to array
$numbers[] = 9;
$numbers[] = 10;
$numbers[11] = 8;
// inspect($numbers);

//Update a value
$numbers[2] = 6; 
// inspect($numbers);

//Delete an element
unset($numbers[2]);
// inspect($numbers);

//Reorder the indexes
$numbers = array_values($numbers);
inspect($numbers);
*/

//Array Functions
/*function inspect($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}
$output = null;
$ids = [10,22,15,45,67,33];
$users = ['user2', 'user1', 'user3'];

//count method
$output = count($ids);
echo $output;
echo '<br />';
print_r($ids);
echo '<br />';

//sort method
//sort($ids);
//sort($users);

//rsort method
//rsort($ids);
//rsort($users);

//array_push method
//array_push($ids, 100);
//array_push($users, 'user4');

//array_pop method
//array_pop($ids);
//array_pop($users);

//array_shift method
//array_shift($ids);
//array_shift($users);

//array_unshift method
// array_unshift($ids, 100);
// array_unshift($users, 'users4');

//array_slice method
$ids2 = array_slice($ids,2,3);

//array_slice method
array_splice($ids, 1, 1, 'New ID');
array_splice($users, 0, 1, 'New User');

//array_sum method
$output = 'Sum of IDs: '. array_sum($ids);

//array_search method
$output = 'User 1 is at index '. array_search('user1', $users);

//in_array method
array_push($users, 'user5');
var_dump(in_array('user5',$users));
$output = 'User exist in array: '. in_array('user5',$users);

//explode method
$tags = 'tech, code, programming';
$tagsArr = explode(',',$tags);
var_dump($tagsArr);

//implode method
$output = implode(', ', $users);

// PHP documentation: https://www.php.net/manual/en/ref.array.php
<p> <?= inspect($ids) ?> </p>
<p> <?= inspect($users) ?> </p>
<p> <?= inspect($ids2) ?> </p>
<p> <?= $output ?> </p>
*/

//Associative Array
/*
function inspect($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}
$output = null;
$user = [
    'name'=> 'Salif',
    'email'=> 'kantsalif1@gmil.com',
    'password'=> '123456',
    'hobbies'=> ['Tennis', 'Golf', 'Reading'],
];
$output = $user['name'];
$output = $user['email'];
$output = $user['hobbies'][2];

$user['address'] = 'Bko, Mali';
unset($user['address']);
<p> <?= $output  ?> </p>
<p> <?= inspect($user)  ?> </p>
*/

//Multi - Dimentional Array
/*
function inspect($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}
$output = null;

$fruit = [
    ['Apple', 'Red'],
    ['Orange', 'Orange'],
    ['Banana', 'Yellow'],
];

$output = $fruit[0][1];
$fruit[] = ['Grappe', 'Purple'];

$users = [
    ['name'=> 'Salif','email'=> 'kantsalif1@gmil.com','password'=> '123456'],
    ['name'=> 'Omar','email'=> 'omar@gmil.com','password'=> '123456'],
    ['name'=> 'Ousman','email'=> 'ousman@gmil.com','password'=> '123456'],
];
$output = $users[0]['email'];
$users[] = ['name'=> 'Masha','email'=> 'masha@gmil.com','password'=> '123456'];
array_push($users,['name'=> 'Fanta','email'=> 'fanta@gmil.com','password'=> '123456']);
array_pop($users);
array_shift($users);
unset($users[0]);

$output = count($users);
<p> <?= $output  ?> </p>
<p> <?= inspect($users)  ?> </p>
*/

//Basic Loops
// for ($i=0; $i <10; $i++) { 
//     echo $i . '<br />';
// }

// $a = 0;
// while ($a <= 10) {
//     echo $a . '<br />';
//     $a++;
// }

$a = 1;

do {
    echo $a . '<br />';
    $a++;
} while ($a <= 10);
?>

<h1>Hello</h1>

<ul>
    <?php for ($i=0; $i < 12; $i++): ?>
        <li> Counter For: <?= $i?> </li>
    <?php endfor; ?>
</ul>

<ul>
    <?php $a = 0; while($a<10): ?>
    <li>Counter While: <?= $a; ?> </li>
    <?php $a++; endwhile; ?>
</ul>

<ul>
    <?php $a=1; do{ ?>
    <li>Counter Do-While: <?= $a; ?> </li>
    <?php $a++; } while ($a <= 10) ?>
</ul>