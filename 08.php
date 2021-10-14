<?php

$n = trim(fgets(STDIN));
$array = [];

for ($i = 0; $i < $n; $i++) {
    [$s, $d] = explode(' ', trim(fgets(STDIN)));
    if (isset($array[$s])) {
        $array[$s] += $d;
    } else {
        $array[$s] = $d;
    }
}

arsort($array);

foreach ($array as $k => $v) {
    echo $k . ' ' . $v . "\n";
}
