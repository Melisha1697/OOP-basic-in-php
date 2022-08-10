<!-- inheritance -->
<?php
    class Shape{
        public $num_of_side;
        public $area;
        public $perimeter;

        //public method
        public function shapeDetails(){
            return "This ia a parent class Shape";
        }
    }

    // to inherit the parent class, extends keyword 
    //should be used by child class
    class Triangle extends Shape{
        public $length;
        public $base;
        public $height;

        public function calculateArea(){
            $this->area = 1/2 * ($this->base * $this->height);
            return "Area of Triangle: ".$this->area;
        }

        public function calculatePerimeter(){
            $this->perimeter = $this->length  + $this->length + $this->base;
            return $this->perimeter;
        }
    }

    //creating object of triangle
    $triangle = new Triangle();
    $triangle->base = 12;
    $triangle->height = 12;

    $triangle->length = 15;
    $triangle->num_of_side = 3;

    echo "Total number of side of triangle is: ".$triangle->num_of_side;
    echo "<br>";
    //creating new variable and storing output to that variable
    //so that we can reuse it later on
    $perimeter = $triangle->calculatePerimeter();
    echo "Perimeter of Triangle is: ".$perimeter;
    echo "<br>";
    echo $triangle->calculateArea();
?>