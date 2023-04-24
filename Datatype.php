<?php
    /*PHP supports the following data types:

    String
    Integer
    Float (floating point numbers - also called double)
    Boolean
    Array
    Object
    NULL
    Resource


    // String data type

    $x = "hello";
    echo $x;

    

    //Float data type

    $x = 152.89;
    var_dump($x);

    // find the datatype 

    $x = 5768;
    var_dump($x);
 */

 class car{
    public $color;
    public $model;

    public function __construct($color,$model)
    {
        $this->color = $color;
        $this->model = $model;
    }
    public function message(){
        return "my  car is " . "$this->color" . "$this->model";
    }
 }
   $mycar = new car("red","bmw");
   echo $mycar-> message();























?>
