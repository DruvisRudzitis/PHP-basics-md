<?php

//Write a program that asks the user to enter two words.
// The program then prints out both words on one line.
// The words will be separated by enough dots so that the total line length is 30:
//
//Enter first word:
//turtle
//Enter second word
//153
//turtle....................153

//This could be used as part of an index for a book. To print out the dots, use echo "." inside a loop body.



    $firstWord = (string)readline('Enter first word: ');
    $secondWord = (string)readline('Enter second word: ');

function calc($firstWord, $secondWord){

    $arr = "$firstWord.$secondWord";
    $arrLength = strlen($arr);
    $dot = 30 - $arrLength;

    $dots = "";
    for ($i = 0; $i <= $dot; $i++) {
        $dots = $dots. ".";
    }

    echo $firstWord.$dots.$secondWord."\n";
}
calc($firstWord, $secondWord);

