<?php
class UserPractice {
    //Properties
    public $name;
    public $email;
    
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    //Method
    public function login(){
        echo $this->name .' is logged in <br>';
    }

}

$user1 = new UserPractice("Salif Kante","kantsalif1@gmail.com");
// $user1->name = "Salif";
// $user1->email = "kantsalif1@gmail.com";
$user1 -> login();


$user2 = new UserPractice("John Doe","john@gmail.com");
$user2 -> login();

var_dump($user2);

?>