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

    $this->updateClass();

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

    

    if($info['cpf'] != $info['cpfAtual']){
      $result = $this->verifyCPF($info);

      if($result == FALSE){
        return 'cpf';
      }
    }

    if($info['email'] != $info['emailAtual']){
      $result = $this->verifyEmail($info);

      if($result == FALSE){
        return 'email';
      }
    }

    $db = DB::connect();
    $data = $db->query("UPDATE `admin` SET
      `firstName`= :firstName:, 
      `lastName`= :lastName:, 
      `email`= :email:,
      `cpf` = :cpf:
	  WHERE `cpf` = :cpfAtual: ", $info);
    $db->close();
    $this->session();
    return 'ok';

  }

  public function verifyCPF($info){
    $db = DB::connect();
    $data = $db->query("SELECT cpf from `admin` WHERE cpf = :cpf:", $info)->getResult();
    $db->close();
      if(count($data) > 0){ 
        return FALSE;
       } else {
         return TRUE;
       }
  }

  public function verifyEmail($info){
    $db = DB::connect();
    $data = $db->query("SELECT email from `admin` WHERE email = :email:", $info)->getResult();
    $db->close();
      if(count($data) > 0){ 
        return FALSE;
       } else {
         return TRUE;
       }

  }

  public function updatePassword($data){

    $verify = $this->verifyPassword($data);

    if($verify == FALSE){
      return 'wrongPass';
    }

    $db = DB::connect();
    $data = $db->query("UPDATE `admin` SET
      `password`= :newPass:
	  WHERE `cpf` = :cpf: ", $data);
    $db->close();



  }

  private function verifyPassword($info){
    $db = DB::connect();
    $data = $db->query("SELECT password from `admin` WHERE cpf = :cpf:", $info)->getResult();
    $db->close();
      if(password_verify($info['actualPass'], $data[0]->password)){ 
        return TRUE;
       } else {
         return FALSE;
       }

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