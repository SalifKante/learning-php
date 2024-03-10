<?php
declare(strict_types=1);

function getSum(int $a, int $b): int{
    return $a + $b;
    // return 'Hello'; // Error because the return type is string

}
//echo getSum(1, '1'); //Error
echo getSum(1, 1);
function greeting(string $name): void{
    echo 'Hello '. $name;
}
echo greeting('Salif');

//Type decoration links
// https://www.php.net/manual/en/functions.arguments.php#functions.arguments.type-declaration