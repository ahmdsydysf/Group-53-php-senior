<?php


class User
{
    public $myName;
    public Database $db;
    public function __construct(Database $db)
    {
        $this->db = $db;
    }
    public function __destruct()
    {
        echo "<br> abdelaziz";
    }

    public function hello()
    {
        echo $this->myName;
    }
}
