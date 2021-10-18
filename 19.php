<?php
// 範囲を指定

[$a, $b] = explode(' ', trim(fgets(STDIN)));
$s = trim(fgets(STDIN));

for ($i = 0; $i < mb_strlen($s); $i++) {
    $c = mb_substr($s, $i, 1);
    if ($a - 1 <= $i && $i <= $b - 1 && 'a' <= $c && $c <= 'z') {
        $c = chr(ord($c) - 32);
    }
    echo $c;
}
