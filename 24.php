<?php
// 横並べ五目並べ

for ($i = 0; $i < 5; $i++) {
    $line = trim(fgets(STDIN));
    if ($line === 'OOOOO') {
        echo 'O' . "\n";
        return;
    } elseif ($line === 'XXXXX') {
        echo 'X' . "\n";
        return;
    }
}

echo 'D' . "\n";
