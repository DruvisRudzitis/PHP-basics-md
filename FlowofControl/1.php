<?php

$x = (int)readline('Enter first integer ');

$y = (int)readline('Enter second integer ');

$z = (int)readline('Enter third integer ');


if($x > $y && $x > $z) {
    echo "Largest number: " . $x ."\n";
} elseif($y > $x && $y > $z) {
    echo "Largest number: " . $y ."\n";
} elseif($z > $y && $z > $x) {
    echo "Largest number: " . $z ."\n";
} elseif($x == $y && $x > $z) {
    echo "Largest number :" . $x ."\n";
} elseif($x == $z && $x > $y) {
    echo "Largest number :" . $x ."\n";
} elseif($z == $y && $z > $x) {
    echo "Largest number :" . $z ."\n";
}

//todo print the largest number