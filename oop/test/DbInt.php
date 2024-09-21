<?php 


interface DbInt {
  public function select($table);
  public function insert();
  public function edit();
  public function delete();
}

?>