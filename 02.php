<?php declare(strict_types=1);

// 足す掛け計算

while ($line = fgets(STDIN)) {
  $tmp[] = trim($line);
}

$n = (int)$tmp[0];
$result = 0;

for ($i = 1; $i <= $n; $i++) {
    $s = explode(' ', $tmp[$i]);
    $s1 = (int)$s[0];
    $s2 = (int)$s[1];
    if ((int)$s[0] === (int)$s[1]){
        $ans = $s1 * $s2;
    }else {
        $ans = $s1 + $s2;
    }
    $result = $result + $ans;
}

echo $result;

// 回答

$n = trim(fgets(STDIN));

$ans = 0;

for ($i = 0; $i < $n; $i++) {
    [$a, $b] = explode(' ', trim(fgets(STDIN)));
    if ($a === $b) {
        $ans += $a * $b;
    } else {
        $ans += $a + $b;
    }
}

echo $ans . "\n";
