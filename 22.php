<?php
// 五目並べ

$line = trim(fgets(STDIN));
if ($line === 'OOOOO') {
    echo 'O' . "\n";
} elseif ($line === 'XXXXX') {
    echo 'X' . "\n";
} else {
    echo 'D' . "\n";
}
