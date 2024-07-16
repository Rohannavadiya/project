<?php
class MyMath
{
    public function getpi()
    {
        return 3.14;
    }
    public function getSquare($number)
    {
        $square=$number*$number;
        return $square;
    }
}
class Circle extends MyMath
{
    public function __construct($radius)
    {
        $this->radius=$radius;
        //method overriding
    }
    public function getArea()
    {
        $area=$this->getpi()*$this->getSquare($this->radius);
        return $area;
    }
}
class Sphere extends Circle
{
    public function __construct($radius)
    {
        Circle::__construct($radius);
    }
    
    

    public function getArea()
    {
        $area=4*Circle::getArea();
        return $area;
    }

}
class Cylinder extends MyMath
{
    public function __construct($radius,$height)
    {
        $this->height=$height;
        $this->radius=$radius;
    }
    public function getVolume()
    {
        $volume=$this->getpi()*$this->getSquare($this->radius)*$this->height;
        return $volume;
    }
}
$c1=new Circle(100);
echo "<br> Area of circle:".$c1->getArea();
$cy1=new Cylinder(100,25);
echo "<br> Volume of Cylinder:".$cy1->getVolume();
$sp1=new Sphere(10);
echo "<br> Volume of Sphere:".$sp1->getArea();


    
?>