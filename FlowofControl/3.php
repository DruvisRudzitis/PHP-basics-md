<?php

//Write a program that reads an positive integer and count the number of digits the number has.

$x = (int)readline('Enter the number ');

$numlength = strlen((string)$x);

if($x > 0) {
    echo $numlength . "\n";
} else {
    echo "error" ."\n";
}


