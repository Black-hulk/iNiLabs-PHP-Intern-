<?php
    abstract class Shape{
       abstract public function getArea(): float;

    }

    class circle extends Shape{
        private $redius;

        public function __construct(float $redius){
            $this->redius=$redius;
        }
        public function getArea(): float{
            return pi() * pow($this->redius,2);
        }
    }

    class rectangle extends Shape{
        private $height, $wdith;

        function __construct(float $wdith, float $height){
            $this->height=$height;
            $this->weight=$wdith;
        }
        
        function getArea(): float{
            return $this->height * $this->weight;
        }
    }


    $circle=new Circle(5.2);
    echo "Calculated Circle Area: " . $circle->getArea(). "\n";

    $rectangle = new Rectangle(4.2, 6.3);
    echo "Calculated Rectangle Area: " . $rectangle->getArea() . "\n";
?>