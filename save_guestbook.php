<?php
header("Content-Type: application/json");

// DB 연결
$conn = new mysqli("localhost", "root", "111111", "guestbook");
if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(["error" => "DB 연결 실패: " . $conn->connect_error]);
    exit;
}

// JSON 데이터 받기
$data = json_decode(file_get_contents("php://input"), true);

$nickname = $conn->real_escape_string($data['nickname'] ?? '익명');
$message = $conn->real_escape_string($data['message'] ?? '');
$character_type = $conn->real_escape_string($data['character_type'] ?? '미정');

if ($message !== '') {
    $sql = "INSERT INTO guestBook (character_type, nickName, message) VALUES ('$character_type', '$nickname', '$message')";
    if ($conn->query($sql)) {
        echo json_encode(["success" => true]);
    } else {
        http_response_code(500);
        echo json_encode(["error" => "DB 저장 실패: " . $conn->error]);
    }
} else {
    http_response_code(400);
    echo json_encode(["error" => "메시지가 비어 있습니다."]);
}

$conn->close();
?>
