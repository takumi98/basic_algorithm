<?php

$n = trim(fgets(STDIN));
$ds = [];

for ($i = 0; $i < $n; $i++) {
    [$s, $d] = explode(' ', trim(fgets(STDIN)));
    $ds[$d] = $s;
}

ksort($ds);

foreach ($ds as $val) {
    echo $val . "\n";
}
