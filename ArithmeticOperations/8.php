<?php


while (true) {

    $basePay = (int)readline('Enter employee base pay ');
    $hours = (int)readline('Enter employee hours ');

    if ($hours > 40) {
        $totalPay = $basePay * 40 + ($hours - 40) * 1.5 * $basePay;
    }   else {
        $totalPay = $basePay * $hours;
    }

    if ($basePay >= 8 && $hours <= 60) {
        echo "Total pay: " . $totalPay . "$" . "\n";
    } else {
        echo "Error" . "\n";
    }
}
