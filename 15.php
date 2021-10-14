<?php

[$m, $n] = explode(' ', trim(fgets(STDIN)));

$a = [];
for ($i = 0; $i < $m; $i++) {
    $a[] = explode(' ', trim(fgets(STDIN)));
}

$x = explode(' ', trim(fgets(STDIN)));

foreach ($a as $i => $a_i) {
    if ($x === $a_i) {
        echo $i + 1 . "\n";
    }
}
