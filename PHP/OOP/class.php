<?php

class car{
    public $color;
    public $model;
    public $year;

    function __construct($color, $model, $year) {
        $this->color = $color;
        $this->model = $model;
        $this->year = $year;
    }

    function get_message() {
        return "The car is a " . $this->color . " " . $this->model . " from " . $this->year . ".";
    }
}

$myCar = new car("black", "Toyota", 2020);
echo $myCar->get_message();

?>