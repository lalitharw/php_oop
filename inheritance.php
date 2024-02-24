<?php
    class ParentClass{
        public $parentClasProperty;

        public function __construct($parentClasProperty){
            $this->parentClasProperty = $parentClasProperty;
        }

        public function parentInfo(){
            echo "Parent class called";
        }
    }


    class SubClass extends ParentClass{
        public $subclassProperty;

        public function __construct($parentClasProperty,$subclassProperty){
            $this->subclassProperty = $subclassProperty;
            Parent::__construct($parentClasProperty);
        }

        public function subInfo(){
            echo "Sub class called $this->subclassProperty";
        }
    }

    $car1= new SubClass("bhagwan","lalit");
    $car1->subclassProperty ="Doe";
   $car1->parentClasProperty = "joe";
    $car1->subInfo();
    $car1->parentInfo();
?>