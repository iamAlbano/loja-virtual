<?php

namespace App\Models;

use Config\Database as DB;

class admin {

  private $cpf;
  private $email;
  private $firstName;
  private $lastName;
  private $password;

  public function __set($property, $value)
  {
    if (property_exists($this, $property)) {
      $this->$property = $value;
    }
  }


  public function __get($property)
  {
    if (property_exists($this, $property)) {
      return $this->$property;
    }
  }

  public function __construct(){

    $admin = $this->adminInfo();

    $this->__set('cpf', $admin->cpf);
    $this->__set('email', $admin->email);
    $this->__set('firstName', $admin->firstName);
    $this->__set('lastName', $admin->lastName);
    $this->__set('password', $admin->password);

  }

 

  public function adminInfo(){
    $db = DB::connect();
	$user = $db->query("SELECT * FROM admin")->getResultObject();
	$db->close();
	return $user[0];
  }

  private function updateClass(){
    
	$user = $this->adminInfo();
	
    $this->__set('cpf', $user->cpf);
    $this->__set('email', $user->email);
    $this->__set('firstName', $user->firstName);
    $this->__set('lastName', $user->lastName);
    $this->__set('password', $user->password);

  }


  public function update($info){

    $db = DB::connect();



    
    $data = $db->query("UPDATE `admin` SET
      `firstName`= :firstName:, 
      `lastName`= :lastName:, 
      `email`= :email:,
      `cpf` = :cpf:
	WHERE `cpf` = :cpfAtual: ", $info);
    $db->close();

  }

  public function session(){

    $this->updateClass();

    session()->set([
        'firstName' => $this->firstName,
        'lastName' => $this->lastName,
        'email' => $this->email,
        'cpf' => $this->cpf,
      ]);
  }

  
}