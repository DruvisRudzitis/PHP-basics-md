<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];
$x = join(" ", $numbers);
echo "Original numeric array: ". $x ."\n";

sort($numbers);
$y = join(" ", $numbers);
    echo "Sorted numeric array: " . $y ."\n";


$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

$x = join(" ", $words);
echo "Original string array: " . $x ."\n";

sort($words);
$y = join(" ", $words);
echo "Sorted string array: " . $y ."\n";