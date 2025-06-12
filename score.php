<?php
$nickName = $_POST['nickName'];  
$type = $_POST['types'];        
$questionNum = $_POST['questionNum'];

$characters = explode(',', $type); 
$conn = mysqli_connect('localhost','root','111111','msg_itshow');

if (!$conn) {
    die("DB 연결 실패: " . mysqli_connect_error());
}

foreach($characters as $value) {
    $value = trim($value); 
    $sql = "UPDATE msg_itshow SET `$value` = COALESCE(`$value`, 0) + 1 WHERE nickName = '$nickName'";
    mysqli_query($conn, $sql);
}

if ($questionNum < 12) {
    $next = $questionNum + 1;
    header("Location: Question_$next.php?name=" . urlencode($nickName));
    exit;
}

$charList = ['ponyo','may','sosuke','sophie','haku','chihiro','totoro','howl'];
$columns = implode(", ", $charList);

$sql = "SELECT $columns FROM msg_itshow WHERE nickName = '$nickName'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

foreach ($row as $key => $val) {
    if (is_null($val)) {
        $row[$key] = 0;
    }
}

$maxScore = max($row);
$maxCharacters = array_keys($row, $maxScore); 
$selectedCharacter = $maxCharacters[array_rand($maxCharacters)];  

$sql = "UPDATE msg_itshow SET max_score = '$selectedCharacter' WHERE nickName = '$nickName'";
mysqli_query($conn, $sql);

header("Location: result_$selectedCharacter.php?name=" . urlencode($nickName));
exit;
?>
