<?php

$board = [];

for ($i = 0; $i < 5; $i++) {
    $board[$i] = trim(fgets(STDIN));
}

// 横 1 列に揃う場合
for ($i = 0; $i < 5; $i++) {
    if ($board[$i] === 'OOOOO') {
        echo 'O' . "\n";
        return;
    } elseif ($board[$i] === 'XXXXX') {
        echo 'X' . "\n";
        return;
    }
}

// 縦 1 列に揃う場合
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

// 斜めに揃う場合 (左上から右下)
$o = $x = 0;
for ($i = 0; $i < 5; $i++) {
    if ($board[$i][$i] === 'O') {
        $o++;
    } elseif ($board[$i][$i] === 'X') {
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

// 斜めに揃う場合 (右上から左下)
$o = $x = 0;
for ($i = 0; $i < 5; $i++) {
    if ($board[$i][4 - $i] === 'O') {
        $o++;
    } elseif ($board[$i][4 - $i] === 'X') {
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

echo 'D' . "\n";
