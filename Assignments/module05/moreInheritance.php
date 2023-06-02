<?php
abstract class shape
{
    protected $name, $area;
    function __construct($name)
    {
        $this->name = $name;
        $this->calculateArea();

    }
    abstract function calculateArea();

    public function getArea()
    {
        echo "This area of $this->name is $this->area";
    }



}

class Triangle extends shape
{
    public $base, $height;
    function __construct($bb, $hh)
    {
        //$this->$base = $base;
        //$this->$height = $height;
        $this->base = $bb;
        $this->height = $hh;

        parent::__construct("Triangle");

    }


    function calculateArea()
    {

        $this->area = 0.5 * $this->base * $this->height;
        //echo $this->area;

    }


}
class rectangle extends shape
{
    private $length, $height;
    function __construct($length, $height)
    {
        $this->$length = $length;
        $this->$height = $height;
        //parent::__construct("Rectangle");

    }


    function calculateArea()
    {
        return $this->area = $this->length * $this->height;

    }


}

$triangleobj = new Triangle(4,5);
//$triangleobj->__constructarea(4,5);
$triangleobj->getArea();











?>