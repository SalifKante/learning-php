<?php
class UserClass {


    //Properties
    public $name;
    public $email;
    
    //Constructor: Everytime you instantiate an object the constructor run so you can use it to access properties
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    //Method
    public function login(){
        echo $this->name .' is logged in' . '<br />';
    }

}

$user1 = new UserClass("Salif Kante","kantsalif1@gmail.com");
// $user1->name = "Salif";
// $user1->email = "kantsalif1@gmail.com";
$user1 -> login();


$user2 = new UserClass("John Doe","john@gmail.com");
$user2 -> login();

var_dump($user2);

?>