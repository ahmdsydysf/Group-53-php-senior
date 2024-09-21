<?php

class Database implements DbInt
{
    public $connection;
    public $query_res;

    public function __construct($databaseName)
    {
        $this->connection = mysqli_connect('localhost', 'root', '', $databaseName);
    }
    public function select($table)
    {
        $this->query_res = mysqli_query($this->connection, "select * from $table");
        return $this ;
    }
    public function snglData()
    {

        return mysqli_fetch_assoc($this->query_res) ;
    }
    public function allData()
    {
        $data = [];
        while ($row  = mysqli_fetch_assoc($this->query_res)) {
            $data[] = $row;
        }
        return $data;
    }
    public function insert()
    {
    }
    public function edit()
    {
    }
    public function delete()
    {
    }
}
