<?php

//Write a program called CheckOddEven which prints "Odd Number" if the int variable “number” is odd, or “Even Number” otherwise.
//The program shall always print “bye!” before exiting.

$number = 0;
function CheckOddEven($number){
    $number = (int)readline('Input number ');
    if($number %2 == 0){
        echo "Even Number. Bye!";
    } else {
        echo "Odd Number. Bye! ";
    }
}

CheckOddEven($number);

