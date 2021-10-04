<?php
// 範囲の出力

$s = trim(fgets(STDIN));

$first = mb_substr($s, 0, 1);
$last = mb_substr($s, -1);

for ($c = ord($first); $c <= ord($last); $c++) {
    echo chr($c) . "\n";
}
