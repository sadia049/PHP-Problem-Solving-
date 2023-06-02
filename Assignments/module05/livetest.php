<?php
Class Car{
    private $model,$make,$year;

    public function __construct($model,$make,$year){
        $this->model=$model;
        $this->make=$make;
        $this->$year=$year;
    }

    public function getModel(){
        return $this->model;
    }
    public function getMake(){
        return $this->make;
    }
    public function getYear(){
        return $this->year;
        
    }
    public function setModel($model){
        $this->model=$model;

    }
    public function setMake($make){
        $this->make=$make;
        
    }

    public function setYear($year){
        $this->$year=$year;
        
    }
public function display_info(){
    echo "Car make $this->make\n";
    echo "Car model $this->model\n";
    echo "Car make $this->year\n";
}







}
$cars= new Car("Corolla","Toyota",2015);
$cars->display_info();

$cars->display_info();




?>