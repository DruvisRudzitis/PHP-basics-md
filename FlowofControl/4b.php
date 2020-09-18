<?php

//Write a program which prints “Sunday”, “Monday”, ... “Saturday” if the int variable "dayNumber" is 0, 1, ..., 6,
//respectively. Otherwise, it shall print "Not a valid day".
//
//Use:
//    a "switch-case-default" statement.

$dayNumber = (string)readline('Enter string: ');

switch ($dayNumber) {
    case 1:
        echo "Monday" ."\n";
        break;
    case 2:
        echo "Tuesday" ."\n";
        break;
    case 3:
        echo "Wednesday" ."\n";
        break;
    case 4:
        echo "Tuesday" ."\n";
        break;
    case 5:
        echo "Friday" ."\n";
        break;
    case 6:
        echo "Saturday" ."\n";
        break;
    case 7:
        echo "Sunday" ."\n";
        break;
    default:
        echo "Not a valid day" ."\n";
}