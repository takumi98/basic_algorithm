<?php
// 例外処理

[$n, $m, $l] = explode(' ', trim(fgets(STDIN)));

$d = [];
$p = [];

for ($i = 0; $i < $n; $i++) {
    $d[] = explode(' ', trim(fgets(STDIN)));
}

for ($i = 0; $i < $l; $i++) {
    $p[] = explode(' ', trim(fgets(STDIN)));
}

for ($i = 1; $i < $l; $i++) {
    $diff = [];
    for ($j = 0; $j < $m; $j++) {
        $diff[$j] = (string)($p[$i][$j] - $p[$i - 1][$j]);
    }

    $order = -1;
    for ($j = 0; $j < $n; $j++) {
        if ($diff === $d[$j]) {
            $order = $j + 1;
            break;
        }
    }

    echo $order . "\n";
}
