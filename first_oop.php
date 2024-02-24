<?php

class Fruit{
    public $color;
    public $name;

    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }
}

$apple = new Fruit();
$pear = new Fruit();
$apple->set_name("Apple");
echo $apple->get_name();

$pear->set_name("pear");
echo $pear->get_name();


var_dump($apple instanceof Fruit);