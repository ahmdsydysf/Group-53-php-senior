<?php



interface DbInt
{
    public function select($table, $cols);
    public function insert($table, $insertedData);
    public function edit($table, $insertedData);
    public function delete($table);
}
