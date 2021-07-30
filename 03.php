<?php declare(strict_types=1);

while ($line = fgets(STDIN)) {
    $tmp[] = trim($line);
}
$tmp = [5,2,6,-2,-6,10];
$n = $tmp[0];
$result = [];

for ($i = 0; $i < $n; $i++) {
    $value = $tmp[$i + 1];
    if($value >= 5 ) {
        $result[] = $value;
    }
}

if(!$result){
    echo(0);
}else{
    $ans = 0;
    foreach($result as $n){
        $ans = $ans + $n;
    }
    echo($ans);
}

// 回答
$n = trim(fgets(STDIN));

$ans = 0;

for ($i = 0; $i < $n; $i++) {
    $a = trim(fgets(STDIN));
    if ($a >= 5) {
        $ans += $a;
    }
}

echo $ans . "\n";
