<?php


$desiredSum = (int)readline('Enter desired sum: ');

$sum = 0;
while ($sum != $desiredSum) {
    $roll1 = rand(1, 6);
    $roll2 = rand(1, 6);
    $sum = $roll1 + $roll2;

    echo $roll1 . " and " . $roll2 . " = " . $sum . "\n";
}



