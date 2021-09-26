<?php
// 文字列のn文字目とn+1文字目

$n = trim(fgets(STDIN));
$s = trim(fgets(STDIN));

if ($n < mb_strlen($s)) {
    echo mb_substr($s, $n - 1, 1) . ' ' . mb_substr($s, $n, 1) . "\n";
}
