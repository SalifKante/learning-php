<?php
/*
  Challenge 1: Fahrenheit to Celsius
  Create a function called `fahrenheitToCelsius` that takes a Fahrenheit temperature as an argument. Return the temperature converted to Celsius.

  The formula to convert Fahrenheit to Celsius is: Celsius = (Fahrenheit - 32) * 5/9
*/

//Using Regular Function
// function fahrenheitToCelsius($f){
//   $c = ($f - 32) * 5/9;
//   return $c;
// }

//Using Arrow Function
// $fahrenheitToCelsius = fn($f) => ($f - 32) * 5/9;  

//Using Expression Function with Closure
$baseTemp = 32;
$fahrenheitToCelsius = function ($f) use ($baseTemp){
  return ($f - $baseTemp) * 5 / 9;
};

$degToConvert = 68;

echo $degToConvert . '&deg;F = ' . $fahrenheitToCelsius($degToConvert) .'&degC';

echo '<br>';

/*
  Challenge 2: Print names in uppercase
  Create a function called `printNamesToUpperCase` that takes an array of names as an argument. The function should loop through the array and print each name to the screen in uppercase letters.
*/

function printNamesToUpperCase($names){
  foreach ($names as $name) {
    $uppercaseName = strtoupper($name);
    echo $uppercaseName . '<br>';
  }
}

$names = ['Salif', 'Omar', 'Abdallah', 'Moh'];
printNamesToUpperCase($names);

echo '<br>';

/*
  Challenge 3: Find the longest word
  1. Create a function called `findLongestWord` that takes a sentence as an argument.
  2. The function should return the longest word in the sentence.
  3. The output should look like this:
*/

function findLongestWord($sentence){
  $words = explode(' ', $sentence);
  // var_dump($words);
  $longuestWord = '';

  foreach ($words as $word) {
    $word = trim($word);
    if(strlen($word) > strlen($longuestWord) || $longuestWord === ''){
      $longuestWord = $word;
    }
  }
  return $longuestWord;
}

echo findLongestWord("I love you Mummy!!");