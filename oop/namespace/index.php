<?php

require_once "User.php";
require_once "Database.php";


$newDatabase = new Database();

$user = new User($newDatabase);// constract is run
