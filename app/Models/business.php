<?php

namespace App\Models;

use Config\Database as DB;

class business {

    private $name;
    private $fantasyName;
    private $email;
    private $cnpj;
    private $type;
    private $phone1;
    private $phone2;
    private $facebook;
    private $instagram;
    private $twitter;

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

  public function __construct()
  {

    $this->updateClass();
  
  }

  public function updateClass(){
    $b = $this->businessInfo();

    $this->__set('name', $b->name);
    $this->__set('fantasyName', $b->fantasyName);
    $this->__set('email', $b->email);
    $this->__set('cnpj', $b->cnpj);
    $this->__set('type', $b->type);
    $this->__set('phone1', $b->phone1);
    $this->__set('phone2', $b->phone2);
    $this->__set('facebook', $b->facebook);
    $this->__set('instagram', $b->instagram);
    $this->__set('twitter', $b->twitter);
  }

  public function sessionBusiness(){

    $this->updateClass();

    session()->set([
        'businessName' => $this->name,
        'fantasyName' => $this->fantasyName,
        'businessEmail' => $this->email,
        'cnpj' => $this->cnpj,
      ]);
  }


  public function businessInfo(){
    $db = DB::connect();
    $business = $db->query("SELECT * FROM business JOIN style")->getResultObject();
    $db->close();
    return $business[0];
}

public function updateBusiness($info){

  $db = DB::connect();

  $data = $db->query("UPDATE `business` SET
    `name`= :businessName:, 
    `fantasyName`= :fantasyName:, 
    `cnpj`= :cnpj:,
    `type` = :type:
  WHERE `cnpj` = :cnpj: ", $info);
  $db->close();

  $this->sessionBusiness();
}





}