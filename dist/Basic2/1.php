<?php
class Car{
    public $color = 'blue';
    private $model = 'benz';
    protected $year;
    public function speed(){
        return 'speed is good';
    }
    public function voulum(){
        return 'voulum is compelete';
    }
    public function changeColor(){
        $this->color = 'red';
        $this->year = 2022 ;
    }

}
class OtherCar extends Car{
    
    private $extra = $this->speed();
    public $year = parent::$color ;
    public $model = parent::$mode;
    public function extraSpeed($extra){
        return 'extra speed'.$extera.'and color is'.$this->color ;
    }
    public function setVoulum(){
        parent::voulum();

}

$newcar = new Car();
$newcar->color = 'blue';
$newcar->speed();

// cant use     $newcar->model;
// cant use     $newcar->year;

var_dump($car1);




?>








