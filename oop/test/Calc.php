<?php



class Calc
{
    public $x;
    public $y;
    public $r;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function add()
    {
        $this->r = $this->x + $this->y;
        return $this;
    }
    public function minus()
    {
        $this->r = $this->x - $this->y;
        return $this;

    }
    public function result()
    {
        return $this->r ;
    }
}
