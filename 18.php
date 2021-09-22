<?php
// 文字と整数の組のソート2

$array = ['HND', 'NRT', 'KIX', 'NGO', 'NGO', 'NGO', 'NGO', 'NGO'];

$count = [];
foreach ($array as $v) {
    if (isset($count[$v])) {
        $count[$v]++;
    } else {
        $count[$v] = 1;
    }
}

foreach ($count as $v) {
    if ($v >= 2) {
        echo $v . "\n";
    }
}
