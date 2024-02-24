<?php

    class Fruit{
        public $color;
        public $name;

        function __construct($name,$color){
            $this->name = $name;
            $this->color = $color;
        }

        function set_name($name){
            $this->name = $name;
        }

        function get_name(){
            echo "Name of fruit is {$this->name}";
        }
    }

    $apple = new Fruit("apple",'red');
    $apple->set_name("mango");
    $apple->get_name();