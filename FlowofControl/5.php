<?php


//On your phone keypad, the alphabets are mapped to digits as follows: ABC(2), DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).
//
//Write a program called PhoneKeyPad, which prompts user for a String (case insensitive), and converts to a sequence of keypad digits.
//
//Use:
//
//    a "nested-if" statement
//    a "switch-case-default" statement
//
//Hint: In switch-case, you can handle multiple cases by omitting the break statement, e.g.,

$phoneKeyPad = (string)readline('Enter string: ');



    if ($phoneKeyPad == 'a' || $phoneKeyPad == 'b' || $phoneKeyPad == 'c') {
        echo "2" . "\n";
    }
    if ($phoneKeyPad == 'd' || $phoneKeyPad == 'e' || $phoneKeyPad == 'f') {
        echo "3" . "\n";
    }
    if ($phoneKeyPad == 'g' || $phoneKeyPad == 'h' || $phoneKeyPad == 'i') {
        echo "4" . "\n";
    }
    if ($phoneKeyPad == 'j' || $phoneKeyPad == 'k' || $phoneKeyPad == 'l') {
        echo "5" . "\n";
    }
    if ($phoneKeyPad == 'm' || $phoneKeyPad == 'n' || $phoneKeyPad == 'o') {
        echo "6" . "\n";
    }
    if ($phoneKeyPad == 'p' || $phoneKeyPad == 'q' || $phoneKeyPad == 'r' || $phoneKeyPad == 's') {
        echo "7" . "\n";
    }
    if ($phoneKeyPad == 't' || $phoneKeyPad == 'u' || $phoneKeyPad == 'v') {
        echo "8" . "\n";
    }
    if ($phoneKeyPad == 'w' || $phoneKeyPad == 'x' || $phoneKeyPad == 'y' | $phoneKeyPad == 'z') {
        echo "9" . "\n";
    }


