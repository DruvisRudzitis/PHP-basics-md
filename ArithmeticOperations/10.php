<?php

//A static method that accepts the radius of a circle and returns the area of the circle. Use the following formula:
//Area = π * r * 2
//Use Math.PI for π and r for the radius of the circle

//A static method that accepts the length and width of a rectangle and returns the area of the rectangle. Use the following formula:
//Area = Length x Width

//A static method that accepts the length of a triangle’s base and the triangle’s height.
// The method should return the area of the triangle. Use the following formula:
    //Area = Base x Height x 0.5

//Next write a program to test the class, which displays the following menu and responds to the user’s selection:
//
//Geometry calculator:
//
//Calculate the Area of a Circle
//Calculate the Area of a Rectangle
//Calculate the Area of a Triangle
//Quit
//Enter your choice (1-4):
//
//Display an error message if the user enters a number outside the range of 1 through 4 when selecting an item from the menu.

$r = 0;

function circleArea($r){

    $r = (int)readLine('Enter circle radius: ');
    if ($r > 0) {

        $p = M_PI;

        $areaCircle = $p * $r * 2;

        echo round($areaCircle) . " cm2" . "\n";
    } else {
        echo "Error" ."\n";
    }
}
circleArea($r);

$length = 0;
$width = 0;

function rectangleArea($length, $width) {
    $length = (int)readLine('Enter rectangle length: ');
    $width = (int)readLine('Enter rectangle width: ');

    if ($length > 0 && $width > 0) {

        $areaRectangle = $length * $width * 2;

        echo $areaRectangle . " cm2" . "\n";
    } else {
        echo "Error" ."\n";
        }
}
rectangleArea($length, $width);


$length = 0;
$base = 0;

function triangleArea($length, $base) {
    $length = (int)readLine('Enter triangle length: ');
    $base = (int)readLine('Enter triangle base: ');

    if ($length > 0 && $base> 0) {

        $areaTriangle = $length * $base * 0.5;

        echo $areaTriangle . " cm2" . "\n";
    } else {
        echo "Error" ."\n";
    }
}
triangleArea($length, $base);

//$circle = (int)readLine('Calculate the Area of a Circle ');
//$rectangle = (int)readLine('Calculate the Area of a Rectangle ');
//$triangle = (int)readLine('Calculate the Area of a Triangle ');
//$quit = (int)readLine('Quit ');
$choose = (int)readLine('Calculate the Area of a Circle ' . "\n" .
    'Calculate the Area of a Rectangle ' . "\n" .
    'Calculate the Area of a Triangle ' . "\n" .
    'Quit '. "\n" .
    'Enter your choice (1-4): ');

