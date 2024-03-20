<?php 
//Data Base Credentials
$host = 'localhost';
$port = 3306;
$dbName = 'blog';
$username = 'root';
$passwowrd = 'Salif123';

$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";


try {
    //Create PDO instance
    $pdo = new PDO($dsn, $username, $passwowrd);

    //Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //Fetch as Associative Array
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    echo 'Connected successfully ... ';
} catch (PDOException $e) {
    //Show Error Message
    echo 'Connection Failed ' . $e->getMessage();
}

?>