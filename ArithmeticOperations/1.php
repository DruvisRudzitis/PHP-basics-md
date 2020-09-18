<?php

//Write a program to accept two integers and return true if the either one is 15 or if their sum or difference is 15.


$x = 15;

    while(true){
        $one = (int)readline('Input first integer ');
        $two = (int)readline('Input second integer ');

        if($one == $x || $two == $x){
            echo 'true ';
        }elseif($one + $two == $x){
            echo 'true ';
        }elseif($one - $two == $x){
            echo'true ';
        }elseif($two - $one == $x){
            echo 'true ';
            break;
        }

    }




