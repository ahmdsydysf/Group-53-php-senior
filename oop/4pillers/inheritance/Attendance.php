<?php


abstract class Attendance
{
    public $code;
    public bool $isAttend = false ;
    protected $location;

    public function faceRecognation()
    {
        return $this->code;
    }

    abstract public function saveInExcel();

}
