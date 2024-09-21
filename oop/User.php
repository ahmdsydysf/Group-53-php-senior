<?php 

class User {

  public string $name = 'from user';
  public static $mobile = 'from user 010';

  const DATABASENAME = 'hr';

  public function getName(){
    return  self::$mobile;

  }

  public function setName($newName){
    $this->name = $newName;
  }

}
