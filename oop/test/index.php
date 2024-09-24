<?php

require_once "DbInt.php";
require_once "Database.php";


$db = new Database('hr_db');
// countries
$db->dataToInsert('accountant2', 'fi_account2', '52525', '999999')->edit('jobs', $db->insertedData)->where("job_id", '=', 'fi_account')->excu();


// $db->delete('jobs')->where('job_id', '=', 'it_dep')->excu();


// $db->dataToInsert('ahmed_it', 'it_dep', '10000', '20000')->insert('jobs', $db->insertedData);

// $rr = $db->select('employees', 'employee_id , first_name')->where('employee_id', '<', '105')->whereAnd('manager_id', '=', '100')->snglData();


// var_dump($rr);
