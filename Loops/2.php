<?php

//todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function

$a= (int)readline('Input number: ');
$b = (int)readline('Input booster: ');


    $answer = $a;
    $increment = $a;
    for($i = 1; $i < $b; $i++)
    {
        for($j = 1; $j < $a; $j++)
        {
            $answer = $answer + $increment;
        }
        $increment = $answer;
    }
    echo $answer;

