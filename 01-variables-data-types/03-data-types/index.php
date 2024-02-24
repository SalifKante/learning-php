<?php

/*
  PHP DATA TYPES:

- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource
*/

//String
$name1 = "Salif Kante";
$name2 = "John DOe";
var_dump($name1);
echo '<br />';

//Integer
$age = 35;
var_dump($age);
echo '<br />';

//Float
$rating = 4.5;
var_dump($rating);
echo '<br />';

//Boolean
$isloaded = true;
var_dump($isloaded);
echo '<br />';

//Array
$friends = ['Salif', 'John', 'Mory'];
var_dump($friends);
echo '<br />';

//Object
$person = new stdClass();
var_dump($person);
echo '<br />';

//Null
$car = null;
var_dump($car);
echo '<br />';

//Resource
$file = fopen('sample.txt', 'r');
echo "$file";
var_dump($file);
echo '<br />';
