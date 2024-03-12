<?php
class UserClass {
    //Properties
    public $name;
    public $email;
    private $status = 'active';


    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getStatus(){
        echo $this->status;
    }

    public function setStatus($status){
        $this->status = $status;
    }

    //Method
    public function login(){
        echo $this->name .' is logged in <br>';
    }

}

$user1 = new UserClass("Salif Kante","kantsalif1@gmail.com");
// $user1->name = "Salif";
// $user1->email = "kantsalif1@gmail.com";
$user1 -> login();


$user2 = new UserClass("John Doe","john@gmail.com");
$user2 -> login();

// $user2->status;  //Cannot access private property outside the class
$user2->setStatus('inactive');
$user2->getStatus();

// var_dump($user2);

?>