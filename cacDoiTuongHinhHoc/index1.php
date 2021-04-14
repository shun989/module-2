<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


<?php

include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');


$circle = new Circle('circle 01',3);
echo $circle->show() . " : </br>";
echo "Circle area: " . $circle->calculateArea() . "</br>";
echo "Circle perimeter: " . $circle->calculatePerimeter() . "</br></br>";

$cylinder = new Cylinder('cylinder 01', 3, 4);
echo $cylinder->show() . " : </br>";
echo "Cylinder area: " . $cylinder->calculateArea() . "</br>";
echo "Cylinder perimeter: " . $cylinder->calculatePerimeter() . "</br></br>";

$rectangle = new Rectangle('rectangle 01', 3, 4);
echo $rectangle->show() . " : </br>";
echo "Rectangle area: " . $rectangle->calculateArea() . "</br>";
echo "Rectangle perimeter: " .$rectangle->calculatePerimeter() . "</br></br>";

$square = new Square('square 01', 4, 4, 4, 4);
echo $square->show() . " : </br>";
echo "Square area: " . $square->calculateArea() . "</br>";
echo "Square perimeter: " .$square->calculatePerimeter();
?>
</body>
</html>


