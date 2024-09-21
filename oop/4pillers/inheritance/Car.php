<?php


class Car
{
    public $name;
    private $lockCode;
    protected $id;



    public function resetLock($yourID)
    {
        if ($this->id =  $yourID) {
            return $this->lockCode;
        }

    }
    public function openCar($pw)
    {

        $currentPW = sha1($pw);



        if ($this->lockCode ==  $currentPW) {
            return 'open';
        }

    }


    public function setLock($code)
    {
        $this->lockCode =  sha1($code); // asmf,asg5sfs56gd,.sd'gsdgsd56g
    }
    public function setId($nationalId)
    {
        $this->id =  $nationalId;
    }
}
