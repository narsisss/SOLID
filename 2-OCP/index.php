<?php

interface ShapeInterface {

    public function draw();

}

class Circle implements ShapeInterface {

    public function draw()
    {
        echo "This Shape is Circle \n";
    }

}

class Rectangle implements ShapeInterface {

    public function draw()
    {
        echo "This Shape is Rectangle \n";
    }

}

class DrawShape {

    private $shapes;

    public function __construct($shapes)
    {

        $this->shapes = $shapes;
    }

    public function drawAllShapes()
    {

        foreach($this->shapes as $shape){
            $shape->draw();
        }

    }

}

$shape1 = new Circle();
$shape2 = new Rectangle();

$draw = new DrawShape([$shape1, $shape2]);
$draw->drawAllShapes();
