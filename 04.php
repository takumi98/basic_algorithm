<?php declare(strict_types=1);

// while($line = fgets(STDIN)) {
//   $tmp[] = trim($line);
// }

// $n = explode(' ',$tmp[0]);
// $n1 = (int)$n[0];
// $n2 = (int)$n[1];
// $value_stling = strlen($tmp[1]);

// for ($i = 1; $i <= $value_stling; $i++) {
//   if ($i === $n1) {

//   }
// }

// PHP関数使うバージョン 失敗
while($line = fgets(STDIN)) {
  $tmp[] = trim($line);
}

$n = explode(' ',$tmp[0]);
$n1 = (int)$n[0] - 1;
$n2 = (int)$n[1] - 1;
$value_stling = strlen($tmp[1]);

$ans =  mb_substr($tmp[1] , $n1 - 1, $n2 - $n1 + 1);
// 失敗コード
// $ans =  substr( $tmp[1] , $n1 , $n2 );

echo $ans;

// 回答
[$a, $b] = explode(' ', trim(fgets(STDIN)));
$s = trim(fgets(STDIN));

echo mb_substr($s, $a - 1, $b - $a + 1) . "\n";
