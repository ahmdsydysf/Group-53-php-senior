<?php

class Database implements DbInt
{
    public $connection;
    public $query_res;
    public $query;
    public $insertedData;

    public function __construct($databaseName)
    {
        $this->connection = mysqli_connect('localhost', 'root', '', $databaseName);
    }


    public function select($table, $cols)
    {
        $this->query = "select $cols from $table";
        return $this ;
    }

    public function where($col, $comp, $val)
    {
        $this->query .= " where $col $comp '$val'";
        return $this ;
    }
    public function whereAnd($col, $comp, $val)
    {
        $this->query .= " And $col $comp '$val'";
        return $this;
    }
    public function whereOr($col, $comp, $val)
    {
        $this->query .= " OR $col $comp '$val'";
        return $this;
    }


    // select * from users where id = 10 And name = ahmed

    public function snglData()
    {
        $this->excu();
        return mysqli_fetch_assoc($this->query_res) ;
    }



    public function allData()
    {
        $data = [];
        $this->excu();
        while ($row  = mysqli_fetch_assoc($this->query_res)) {
            $data[] = $row;
        }
        return $data;
    }

    public function excu()
    {
        $this->query_res = mysqli_query($this->connection, $this->query);
    }

    public function dataToInsert($job_title, $job_id, $min_salary, $max_salary)
    {
        // insert into "users" ( , , , ) values ( , , , , )
        $this->insertedData = [
            "job_id" =>  $job_id,
            "job_title" =>  $job_title,
            "min_salary" =>  $min_salary,
            "max_salary" =>  $max_salary
        ];
        return $this;
    }
    public function insert($table, $insertedData)
    {
        // insert into "users" (job_id ,job_title ) values (it_dep ,it )
        $cols = '';
        $vals = '';
        foreach ($insertedData as $k => $v) {
            $cols .= "$k ,";
            $vals .= "'$v' ,";
        }
        $cols = rtrim($cols, ',');
        $vals = rtrim($vals, ',');

        $this->query = "INSERT INTO $table ($cols) values ($vals)";

        $this->excu();
    }
    public function edit($table, $insertedData)
    {
        // update   set colname = colvalue , colname = colvalue
        $row = '';
        foreach ($insertedData as $k => $v) {
            $row .= "$k = '$v' ,";

        }
        $row = rtrim($row, ',');
        $this->query = "update $table set $row";
        return $this;
    }
    public function delete($table)
    {
        // delete from table where id = 10
        $this->query = "DELETE FROM $table";
        return $this;
    }
}
