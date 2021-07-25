<?php declare(strict_types=1);

// 標準入力を一行ずつ配列に代入します
while ($line = fgets(STDIN)) {
    $tmp[] = trim($line);
}

// 配列の各要素をさらに分解します
foreach ($tmp as $value) {
    $inputs[] = explode(' ', $value);
}

// 要素の出力
var_dump($inputs);
