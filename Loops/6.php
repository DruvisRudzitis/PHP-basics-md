<?php

$rows = (int)readline('Enter number of rows: ');

function AsciiFigure($rows)
{
    for ($row = 0; $row < $rows; $row++) {

        for ($j = 0; $j < $rows - $row - 1; $j++) {
            echo "{{{";

        }for ($h = 0; $h < $row; $h++) {
            echo "***";

        }for ($h = 0; $h < $row; $h++) {
            echo "***";
        }
        {for ($h = 0; $h < $rows - $row - 1; $h++) {
            echo "}}}";
        }
        }echo "\n";

    }
}
    AsciiFigure($rows);
