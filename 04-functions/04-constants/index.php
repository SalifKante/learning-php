<?php

define('APP_NAME', 'My App');
define('APP_VERSION', '1.0.0');

echo APP_NAME;
echo APP_VERSION;

const DB_NAME = 'mydb';
const DB_HOST = 'localhost';
echo '<br>';

function run(){
    //We dom't have tu use global
    echo APP_NAME;
    echo DB_NAME, DB_HOST;
}
run();

// Can't do duplicate const NAME --- reassign or redeclare
//define('APP_NAME', 'My App2'); // Error
//echo APP_NAME; // Error
