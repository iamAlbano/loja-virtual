<?php

namespace App\Models;

use Config\Database as DB;

class admin {

    private $name;
    private $fantasyName;
    private $email;
    private $cnpj;
    private $type;
    private $phone1;
    private $phone2;

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

  public function __construct($name, $fantasyName, $email, $cnpj, $type, $phone1, $phone2)
  {
    $this->__set('name', $name);
    $this->__set('fantasyName', $fantasyName);
    $this->__set('email', $email);
    $this->__set('cnpj', $cnpj);
    $this->__set('type', $type);
    $this->__set('phone1', $phone1);
    $this->__set('phone2', $phone2);
  }

  public function businessInfo(){
    $db = DB::connect();
    $business = $db->query("SELECT * FROM business JOIN style")->getResultObject();
    $db->close();
    return $business[0];
}
}