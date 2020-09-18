<?php


while (true) {

    $words = ["hello", "world", "moon", "earth"];
    $word = $words[array_rand($words)];
    $wordLength = strlen($word);
    $answers = [];

    for ($i = 0; $i < $wordLength; $i++) {
        $answers[$i] = " _";
    }
    $letters = $wordLength;
    $misses = "";

    $attempts = 0;
    echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-" . "\n";
    while ($letters > 0 && $attempts <= 10) {

        echo "Word: " . join(" ", $answers) . "\n";
        echo "Misses: " . $misses . "\n";
        $guess = (string)readline("Guess: ");

        $found = false;
        for ($j = 0; $j < $wordLength; $j++) {
            if ($word[$j] === $guess) {
                $answers[$j] = $guess;
                $letters--;
                $found = true;
            }
        }
        if (!$found) {
            $misses = $misses . $guess;

        }
        echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-" . "\n";
        $attempts++;
    }

    if ($letters == 0) {
        echo "Word: " . join(" ",$answers) . "\n";
        echo "Misses: " . $misses . "\n";
        echo "YOU GOT IT!" . "\n";
    } elseif ($attempts = 10) {
        echo "Word: " . join(" ",$answers) . "\n";
        echo "Misses: " . $misses . "\n";
        echo "YOU LOST" . "\n";
    }

    $playAgain = (string)readline('Play "again" or "quit"? ');

    if ($playAgain == "quit") {
        break;
    }
}