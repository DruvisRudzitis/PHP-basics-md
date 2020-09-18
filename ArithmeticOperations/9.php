<?php

//Write a program that calculates and displays a person's body mass index (BMI).
// A person's BMI is calculated with the following formula: BMI = weight x 703 / height ^ 2.
// Where weight is measured in pounds and height is measured in inches.
// Display a message indicating whether the person has optimal weight, is underweight, or is overweight.
// A sedentary person's weight is considered optimal if his or her BMI is between 18.5 and 25.
// If the BMI is less than 18.5, the person is considered underweight.
// If the BMI value is greater than 25, the person is considered overweight.

//Your program must accept metric units.

while (true) {

    $height = (int)readLine('Enter height: ');
    $weight = (int)readLine('Enter weight: ');

    $h = ($height * 0.01) * 39.3700787;
    $w = $weight * 2.20462;

    $bmi = $w * 703 / (pow($h, 2));

    if ($bmi >= 18.5 && $bmi <= 25) {
        echo 'Optimal. ' ."\n";
    } elseif ($bmi < 18.5) {
        echo 'Underweight. ' ."\n";
    } elseif ($bmi > 25) {
        echo 'Overweight. ' ."\n";
    }

}