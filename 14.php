<!-- 文字列の照会 -->

<?php

$n = trim(fgets(STDIN));
$userToBlood = [];

for ($i = 0; $i < $n; $i++) {
    [$user, $blood] = explode(' ', trim(fgets(STDIN)));
    $userToBlood[$user] = $blood;
}

$m = trim(fgets(STDIN));
$bloodToFortune = [];

for ($i = 0; $i < $m; $i++) {
    [$blood, $fortune] = explode(' ', trim(fgets(STDIN)));
    $bloodToFortune[$blood] = $fortune;
}

foreach ($userToBlood as $user => $blood) {
    echo $user . ' ' . $bloodToFortune[$blood] . "\n";
}
