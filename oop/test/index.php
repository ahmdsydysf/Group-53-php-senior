<?php

require_once "DbInt.php";
require_once "Database.php";


$db = new Database('hr_db');

$rr = $db->select('employees')->allData();


var_dump($rr);
