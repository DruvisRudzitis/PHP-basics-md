<?php

//Write a program which prints “Sunday”, “Monday”, ... “Saturday” if the int variable "dayNumber" is 0, 1, ..., 6,
//respectively. Otherwise, it shall print "Not a valid day".
//
//Use:
//
//    a "nested-if" statement
//    a "switch-case-default" statement.

$dayNumber = (int)readline('Enter the number ');

if ($dayNumber > 0 && $dayNumber <= 7) {
    if ($dayNumber == 1) {
        echo "Monday" ."\n";
    } if ($dayNumber == 2) {
        echo "Tuesday" ."\n";
    } if ($dayNumber == 3) {
        echo "Wednesday" ."\n";
    } if ($dayNumber == 4) {
        echo "Tuesday" ."\n";
    } if ($dayNumber == 5) {
        echo "Friday" ."\n";
    } if ($dayNumber == 6) {
        echo "Saturday" ."\n";
    } if ($dayNumber == 7) {
        echo "Sunday" ."\n";
    }
    } else {
        echo "Not a valid day" ."\n";
    }

