<?php
class UserClass {
    //Properties
    public $name;
    public $email;
    protected $status = 'active';


    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    //Let's put it in heritated class becuse it is **protected**
    // public function getStatus(){
    //     echo $this->status;
    // }

    public function setStatus($status){
        $this->status = $status;
    }

    //Method
    public function login(){
        echo $this->name .' is logged in <br>';
    }

}

class AdminClass extends UserClass{
  public $level;

  public function __construct($name, $email, $level){
    $this->level = $level;
    parent::__construct($name, $email, $level);
  }

  public function getStatus(){
      echo $this->status;
  }

  //Same function name but with different body
  public function login(){
    echo 'Admin '. $this->name .' is logged in <br>';
  }

  
}

$admin1 = new AdminClass("Salif", "salif@gmail.com", 1);
echo $admin1->name . '<br>';
echo $admin1->email . '<br>';
echo $admin1->level . '<br>';
echo $admin1->login();
echo $admin1->getStatus() . '<br>';

?>