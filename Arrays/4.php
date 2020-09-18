<?php


$original = range(0, 100);
shuffle($original);
$original= array_slice($original,0,10);

$copy = $original;

$lastIndex = count($original) - 1;
$original[$lastIndex] = -7;

echo "Array 1: " . join(" ", $original) . "\n";
echo "Array 2: " . join(" ", $copy) . "\n";


