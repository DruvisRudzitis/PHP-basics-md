<?php

$minNumber = (int)readline('Input min number: ');
$maxNumber = (int)readline('Input max number: ');


    for($i=$minNumber;$i<=$maxNumber;$i++) {
        for($x=$i;$x<=$maxNumber;$x++) {
            echo $x;
        }
        for($y=$minNumber;$y<$i;$y++){
            echo $y;
        }
        echo "\n";
    }
