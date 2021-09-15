<!-- 文字列の照会 -->

<?php
// 自分のコード

while ($line = fgets(STDIN)) {
    $tmp[] = trim($line);
}

// 分割して配列を作る
foreach ($tmp as $value) {
    $inputs[] = explode(' ', $value);
}
$user_number = $inputs[0][0];
$type_number = $inputs[$user_number + 1][0];

for($i = 1; $i <= $user_number; $i++){
    $user_name = $inputs[$i][0];
    $user_type = $inputs[$i][1];
     for($s = 0; $s < $type_number; $s++){
        $type = $inputs[$user_number + 2 + $s][0];
        $type_value = $inputs[$user_number + 2 + $s][1];
        if ($user_type == $type){
            $update_user =  "$user_name $type_value\n";   
        }
    }
    echo $update_user;
}

// 回答
$n = trim(fgets(STDIN));
$userToBlood = [];

for ($i = 0; $i < $n; $i++) {
    [$user, $blood] = explode(' ', trim(fgets(STDIN)));
    $userToBlood[$user] = $blood;
}
