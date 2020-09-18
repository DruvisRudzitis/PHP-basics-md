<?php

class TicTacToe
{
    function main()
    {
        $player = "X";

        $board = [[], [], []];
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                $board[$i][$j] = " ";
            }
        }
        $this->displayBoard($board);
        while ($this->winner($board) == false) {

            echo ("'" . $player . "'" . " Choose your location" . ":\n");
            $row = (string)readline('row:');
            $column = (string)readline('col: ');

            while ($board[$row][$column] == "X" || $board[$row][$column] == "O") {
                echo ("This spot is occupied. Please try again" . "\n");
            }
            $board[$row][$column] = $player;
            $this->displayBoard($board);

            if ($this->winner($board) == true) {
                echo ("Player " . $player . " is the winner!" . "\n");
            }

            if ($player == "O") {
                $player = "X";
            } else {
                $player = "O";
            }
            if ($this->winner($board) == false && !$this->hasFreeSpace($board)) {
                echo ("The game is a tie." . "\n");
            }
        }
    }

    function displayBoard($board)
    {
        for ($i = 0; $i < count($board); $i++) {
            for ($j = 0; $j < count($board[$i]); $j++) {
                if ($j == count($board[$i]) - 1) echo ($board[$i][$j]);
                else echo ($board[$i][$j] . " | ");
            }
            echo "\n";
        }
    }

    function hasFreeSpace($board)
    {
        for ($i = 0; $i < count($board); $i++) {
            for ($j = 0; $j < count($board[0]); $j++) {
                if ($board[$i][$j] != "O" && $board[$i][$j] != "X") {
                    return true;
                }
            }
        }
        return false;
    }

    function winner($board)
    {
        return $this->isHorizontalWin($board)  || $this->isVerticalWin($board) || $this->isDiagonalWin($board);
    }

    function isHorizontalWin($board)
    {
        for ($row = 0; $row < count($board); $row++) {
            if ($this->isWin($board[$row]))
                return true;
        }
        return false;
    }

    function isWin($lineToProcess)
    {
        $foundWin = true;
        $prevChar = "-";
        foreach ($lineToProcess as $character) {
            if ($prevChar == "-")
                $prevChar = $character;
            if ("O" != $character && "X" != $character) {
                $foundWin = false;
                break;
            } else if ($prevChar != $character) {
                $foundWin = false;
                break;
            }
        }
        return $foundWin;
    }

    function isVerticalWin($board)
    {
        $column = null;
        for ($col = 0; $col < count($board[0]); $col++) {
            for ($row = 0; $row < 3; $row++) {
                $column[$row] = $board[$row][$col];
            }
            if ($this->isWin($column))
                return true;
        }
        return false;
    }

    function isDiagonalWin($board)
    {
        $row = 0;
        $col = 0;
        $cols = count($board);
        $rows = count($board[0]);

        $diagonal = [];

        while ($row < $rows && $col < $cols) {
            $diagonal[$col] = $board[$row][$col];
            $row++;
            $col++;
        }
        if ($this->isWin($diagonal)) {
            return true;
        }

        $row = $rows - 1;
        $col = 0;
        $diagonal = [];
        while ($row >= 0 && $col < $cols) {
            $diagonal[$col] = $board[$row][$col];
            $row--;
            $col++;
        }
        return $this->isWin($diagonal);
    }
}

$ttt = new TicTacToe;
$ttt->main();
