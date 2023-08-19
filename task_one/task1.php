<?php

class Shape
{
    public $name;
    public $area;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getArea()
    {
        return $this->area;
    }
}

class Circle extends Shape
{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function getArea()
    {
        return $this->area = pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape
{
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->area = $this->width * $this->height;
    }
}


$circle = new Circle('Circle', 5);
echo $circle->getArea() . '<br>';

$rectangle = new Rectangle('Rectangle', 5, 10);
echo $rectangle->getArea() . '<br>';



