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
    private $street;
    private $number;
    private $city;
    private $neighborhood;
    private $state;
    private $cep;

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
    $this->__set('street', $b->street);
    $this->__set('number', $b->number);
    $this->__set('neighborhood', $b->neighborhood);
    $this->__set('city', $b->city);
    $this->__set('state', $b->state);
    $this->__set('cep', $b->cep);
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

  public function sessionContact(){

    $this->updateClass();

    session()->set([
        'phone1' => $this->phone1,
        'phone2' => $this->phone2,
        'facebook' => $this->facebook,
        'instagram' => $this->instagram,
        'twitter' => $this->twitter
      ]);
  }

  public function sessionAddress(){

    $this->updateClass();

    session()->set([
        'street' => $this->street,
        'neighborhood' => $this->neighborhood,
        'number' => $this->number,
        'city' => $this->city,
        'state' => $this->state,
        'cep' => $this->cep, 
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

public function updateContact($info){
  $db = DB::connect();

  $data = $db->query("UPDATE `business` SET
    `phone1`= :phone1:, 
    `phone2`= :phone2:, 
    `facebook`= :facebook:,
    `instagram` = :instagram:,
    `twitter` = :twitter:
  WHERE `cnpj` = :cnpj: ", $info);
  $db->close();

  $this->sessionContact();
}

public function updateAddress($info){
  $db = DB::connect();

  $data = $db->query("UPDATE `business` SET
    `street`= :street:, 
    `neighborhood`= :neighborhood:, 
    `number`= :number:,
    `state`= :state:,
    `city` = :city:,
    `cep` = :cep:
  WHERE `cnpj` = :cnpj: ", $info);
  $db->close();

  $this->sessionAddress();
}





}