<?php
$nickname = $_POST['Name'];

if (empty($nickname)) {
    echo "<script>alert('닉네임을 입력해주세요.'); history.back();</script>";
    exit;
}

$dir = "data";
$filePath = $dir . "/nicknames.txt";

$file = fopen($filePath, "a");
if ($file === false) {
    die("파일을 열 수 없습니다.");
}

fwrite($file, $nickname . "\n");
fclose($file);

header("Location: Question_1.html");
exit;

?>