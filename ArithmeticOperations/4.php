<?php

//Write a program to compute the product of integers from 1 to 10 (i.e., 1×2×3×...×10), as an int.
// Take note that it is the same as factorial of N.

$a = 1;
$z = 10;
$sum = 0;

    for ($x = $a; $x <= $z; $x++){
        $sum = $a *= $x;
    }

echo $sum ."\n";