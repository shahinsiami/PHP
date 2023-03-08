<?php

  class Car {
    public function __construct()
    {
        $this->license = 'standard';
    }
    private $license;
    public $model;
    public $color;
    public $toal;

  public function speed(){
    echo 'speed is good';
  }
  public function turbo(){
    echo 'turvo is on';
  }
  public function add ($speed_value){
    $this->toal += $speed_value;
    return $this;
  }
  public function sub ($speed_value){
    $this->toal -= $speed_value;
    return $this;
  }
  final public function echoLicense(){
    echo $this->license;
  }


}
class newCar extends car{
  public function childSpeed(){
    $childCall = parent::speed();
    echo `$childCall + child Object`;
  }
  const DATA_BASE = 'connection';
  public function connect(){
    echo 'connect to'.self::DATA_BASE;
  }

}

$benz = new car();
$benz->color = 'red';
var_dump($benz->color);
$bmw = new newCar();
var_dump($benz->speed());
var_dump($benz->add(100)->sub(50));
var_dump($benz->echoLicense());
var_dump($bmw->childSpeed());
?>