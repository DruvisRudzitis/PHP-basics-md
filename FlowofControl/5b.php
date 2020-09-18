<?php

//Use:   a "switch-case-default" statement
//
//Hint: In switch-case, you can handle multiple cases by omitting the break statement, e.g.,

$phoneKeyPad = (string)readline('Enter string: ');

switch ($phoneKeyPad) {
    case "a" || "b" || "c":
        echo "2" . "\n";
        break;
    case "d" || "e" || "f":
        echo "3" . "\n";
        break;
    case "g" || "h" || "i":
        echo "4" . "\n";
        break;
    case "j" || "k" || "l":
        echo "5" . "\n";
        break;
    case "m" || "n" || "o":
        echo "6" . "\n";
        break;
    case "p" || "q" || "r" || "s":
        echo "7" . "\n";
        break;
    case "t" || "u" || "v":
        echo "8" . "\n";
        break;
    case "w" || "x" || "y" || "z":
        echo "9" . "\n";
        break;
}
//ABC(2), DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).