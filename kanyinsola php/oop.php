<?php
  //Topic: object oriented programming
   //dry methologic: makes it easy not to repeat a code. oop makes it easy to reduce repetition, oop is revolve around classes and object . you can make a class and create many object

    //how to create OOP in php
    
    class Car{
        public $model;
        public $year;
        public $color;
        public $nosOfTyres;

     function set_model($m)
      {
            $this->model = $m;
        }
        function set_year($y)
        {
            $this->year = $y;
        }
        function set_color($c)
        {
            $this->color = $c;
        }
        function set_tyres($t)
        {
            $this->nosOfTyres = $t;
        }
        function get_model()
        {
            return $this->model;
        }
        function start()
        {
            echo "the car just started";
        }
    }

    $car1 = new Car();
    $car1 ->set_model("Venza");
    $car1 ->set_year("2015");
    $car1 ->set_color("blue");
    $car1 ->set_tyres(4);

    echo $car1 ->get_model()
?>