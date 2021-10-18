<?php
// 文字列の重複カウント

$s = trim(fgets(STDIN));
$t = trim(fgets(STDIN));

$ans = 0;

for ($i = 0; $i < mb_strlen($t) - mb_strlen($s) + 1; $i++) {
    if (mb_substr($t, $i, mb_strlen($s)) === $s) {
        $ans++;
    }
}

echo $ans . "\n";
