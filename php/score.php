<?php
// 점수 계산
$type = $_POST['types'];

$scores = [
    "ponyo" => 0,
    "may" => 0,
    "sosuke" => 0,
    "sophie" => 0,
    "haku" => 0,
    "chihiro" => 0,
    "totoro" => 0,
    "howl" => 0,
]

foreach ($type as $types) {
    if (array_key_exists($type, $scores)) {
        $scores[$type]++;
    }
}

header("Location: test.php");
exit;
?>