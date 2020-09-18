<?php

//$a = rand(1, 100);
//$b = rand(1, 100);


//$array = range(1, 10);
//$array= shuffle($array);

//echo $array;

//$array= [1, 2, 3, 4, 5];

//echo $array[1];

//$a = ['name'=>'Gaurav','age'=>23] ;
//
//$b = new ArrayObject($a) ;
//
//$b['test'] = true ;
//
//$c = $b->getArrayCopy() ;
//
//echo "<pre>",var_dump($c),"</pre>" ;

$original = range(0, 100);
shuffle($original);
$original= array_slice($original,0,10);

$copy = $original;

$lastIndex = count($original) - 1;
$original[$lastIndex] = -7;

echo "Array 1: " . join(" ", $original) . "\n";
echo "Array 2: " . join(" ", $copy) . "\n";


