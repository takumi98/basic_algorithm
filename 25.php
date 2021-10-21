<?php
// 五目並べ（縦）

$board = [];

for ($i = 0; $i < 5; $i++) {
    $board[$i] = trim(fgets(STDIN));
}

for ($i = 0; $i < 5; $i++) {
    $o = $x = 0;

    for ($j = 0; $j < 5; $j++) {
        if ($board[$j][$i] === 'O') {
            $o++;
        } elseif ($board[$j][$i] === 'X') {
            $x++;
        }
    }

    if ($o === 5) {
        echo 'O' . "\n";
        return;
    } elseif ($x === 5) {
        echo 'X' . "\n";
        return;
    }
}

echo 'D' . "\n";
