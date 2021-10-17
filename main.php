<?php
$seat = [
  1 => "1",
  2 => "2",
  3 => "3",
  4 => "4",
  5 => "5",
  6 => "6",
  7 => "7",
  8 => "8",
  9 => "9",
  10 => "10",
  11 => "11",
  12 => "12",
  13 => "13",
  14 => "14",
  15 => "15",
  16 => "16",
  17 => "17",
  18 => "18",
  19 => "19",
  20 => "20",
  21 => "21",
  22 => "22",
];
$hoge = [];
for($i = 1; $i <= 22; $i++){
  $seat[$i] = " ";
  for($j = 1; $j <= 22; $j++){
    if ($i != $j) {
        $seat[$j] = " ";
        $hoge[] = [$i,$j];
    }
  }
}

echo('<pre>');
var_dump($hoge);
echo('<pre>');

// 座席をナンバーに変換
function seatConversion($seat,$num){
  while ($seat_num = current($seat)) {
      if ($seat_num == $num) {
          $num = key($seat);
          return $num;
      }
      next($seat);
  }
}

// 席順のコスト計算
function costCalculation($num1,$num2){
  // 入力された席のコストを計算
  //　コストを計算する席
  // $num1 = $a;
  // $num2 = $b;
  // これを全通りやる
  // 1,2 = 0
  if ($num1 == 1 && $num2 == 2 || $num1 == 2 && $num2 == 1){
    $cost = 0;
  }
  // 21,22 = 0
    elseif ($num1 == 21 && $num2 == 22 || $num1 == 22 && $num2 == 21){
      $cost = 0;
    }
    // 他のテーブル同士
    else {
      $cost = 5;
    }
  return $cost;
}

$result = 0;
for ($i = 1; $i <= 1000; $i++){
  $seat_num1 = $n[$i][0];
  $seat_num2 = $n[$i][1];
  $num1 = seatConversion($seat,$seat_num1);
  $num2 = seatConversion($seat,$seat_num2);
  $temp = costCalculation($num1,$num2);
  $result = $result + $temp;
  $temp = 0;
};
