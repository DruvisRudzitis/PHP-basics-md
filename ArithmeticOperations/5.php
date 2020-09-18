<?php

//Write a program that picks a random number from 1-100.
// Give the user a chance to guess it. If they get it right, tell them so.
// If their guess is higher than the number, say "Too high."
// If their guess is lower than the number, say "Too low."
// Then quit. (They don't get any more guesses for now.)

$pc = rand(1, 100);

function numberCount($pc)
{
    while (true) {
        $input = (int)readLine('Choose your number:');
            if ($input > $pc) {
            echo 'Too high, ';
        } elseif ($input < $pc) {
            echo 'Too low, ';
        } else {
            echo 'You won!'."\n";
            break;
        }

    }
}


    numberCount($pc);