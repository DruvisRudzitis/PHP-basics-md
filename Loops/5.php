<?php


$points = 0;
echo "Welcome to Piglet! " . "\n";

while (true) {
    $a = rand(1, 6);
    $points += $a;
    echo "You rolled a " . $a . "!" . "\n";
    if ($a != 1) {
        $rollAgain = readline('Roll again? ');
        if ($rollAgain == "no" || $rollAgain == "n") {
            echo "You got " . $points . " points." . "\n";
            break;
        }
    } else {
        echo "You got 0 points." . "\n";
        break;
    }
}