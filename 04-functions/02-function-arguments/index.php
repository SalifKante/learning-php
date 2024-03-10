<?php
function add($a=1, $b=1){
    return $a + $b;
}

echo add(1,2);
echo '<br>';
echo add(100,250);
echo '<br>';
echo add(158,12);
echo '<br>';
echo add();
echo '<br>';


function sayHello($name = 'John'){
    return 'Hello' . $name;
}

echo sayHello('Salif');
echo '<br>';
echo sayHello();
echo '<br>';


function addAll(...$numbers){
    $total = 0;
    foreach($numbers as $number){
        $total += $number;
    }
    return $total;
}

echo addAll(1,2,3,4,5,6,8,9,45);