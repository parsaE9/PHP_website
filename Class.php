<?php

class Car{
    static $move = 4;
    var $speed;
    var $wheels;
    function __construct($speed,$wheels){
        $this ->speed = $speed;
        $this -> wheels = $wheels;
    }

}

/*$bmw = new Car(220, 4);
$ferrari = new Car(260, 4);
echo Car::$move;*/

$a = 4;
$b = 2;
if($a <= $b)
    echo "echo";