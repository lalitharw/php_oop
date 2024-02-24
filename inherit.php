<?php
    class Animal{
        public $name;

        function __construct($name)
        {
            $this->name = $name;
        }

        final public function intro(){
            echo "{$this->name}";
        }
    }

    class Dog extends Animal{
        public $weight;

        function __construct($name,$weight)
        {
            $this->name = $name;
            $this->weight = $weight;
        }

        public function introa(){
            echo "{$this->name} {$this->weight}";
        }
    }

    $a = new Animal("tyson");
    // $a->intro();

    $b = new Dog("tyson","45");
    $b->introa();
?>