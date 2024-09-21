<?php 

class Player {   
 public  $position;
 public  $speed;
 public  $name;

 const clubName = 'liverpool';

 public function shoot(){
  return $this->speed;
 }
}