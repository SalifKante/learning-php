<?php

//Global Scope
$name = 'Alice';

function sayHello(){
    global $name;

    //Local scope
    $name = 'Bob';
    echo 'Hello '. $name;
}

sayHello($name);
echo '<br>';


function sayGoodBye(){
    //Local scope
    $names = ['Jack', 'Jill'];
    echo $names[0];
}

sayGoodBye();

//Error
//echo $names[1];
