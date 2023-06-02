<?php
abstract class Book
{
    private $nameofbook;
    public $title;
    function __construct($title)
    {
        $this->nameofbook = $title;
    }
    abstract function setTitle($title);
    public function getTitle()
    {
        echo "The title in th get function is $this->nameofbook";
    }



}

class mybook extends Book
{
    function setTitle($title)
    {
        $this->title = $title;
        echo "The title in the set function is $title\n";
        parent::getTitle();

    }
}
$mybookobj = new mybook("Twenty two-Twenty five");
$mybookobj->setTitle("Our Beloved Summer");













?>