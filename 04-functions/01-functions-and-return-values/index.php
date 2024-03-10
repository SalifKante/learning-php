<?php
function sayHello(){
    echo 'Hello World';
}
sayHello();
sayHello();
sayHello();

echo'<br>';

function sayGoodBye(){
    return 'Googbye';
}
$goodbye = sayGoodBye();
echo $goodbye;

?>