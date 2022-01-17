<?php

class User {
  public $name;
  public $lastname;
  public $age;
  public $email;
  
  function __construct($_name, $_lastname, $_age)
  {
    $this->name = $_name;
    $this->lastname = $_lastname;
    $this->age = $_age;
  }

  public function getDiscount(){
    $discount = 0;

    if($this->age < 18){
      $discount = 20;
    } else if ($this->age > 65){
      $discount = 40;
    } 
    
    return $discount;
  }
}