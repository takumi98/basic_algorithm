<?php
// アルファベット探し

$x = trim(fgets(STDIN));
$y = trim(fgets(STDIN));
$c = trim(fgets(STDIN));

if ($x <= $c && $c <= $y) {
    echo 'true' . "\n";
} else {
    echo 'false' . "\n";
}
