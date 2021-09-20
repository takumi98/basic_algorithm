<?php

[$n, $m, $q] = explode(' ', trim(fgets(STDIN)));

$s = [-1];
for ($i = 1; $i <= $m; $i++) {
    $s[] = trim(fgets(STDIN));
}

for ($i = 0; $i < $q; $i++) {
    [$e, $t] = explode(' ', trim(fgets(STDIN)));
    if ($s[$e] == $t) {
        echo 'Yes' . "\n";
        continue;
    }
    for ($j = 1; $j <= $m; $j++) {
        if ($j != $e && $s[$j] == $t) {
            echo 'No' . "\n";
            break;
        }
        if ($j == $m) {
            echo 'Yes' . "\n";
        }
    }
}
