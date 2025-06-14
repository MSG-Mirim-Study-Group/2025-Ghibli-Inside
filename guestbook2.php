<?php
session_start();
$nickname = $_SESSION['nickname'] ?? '익명';

$character_type = $_GET['character'] ?? '하울'; 
?>

<!-- "하울의 움직이는 성" 유형 -->

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>방명록_하울</title>
    <link rel="stylesheet" href="./css/guestbook2.css">
</head>
<body>
    <header>
        <div class="container">
            <img src="img/header.png" id="header" />
            <div id="box">
                <p id="title">방명록</p>
                <img src="img/Line.png" id="Line" />
                <p id="text">“하울의 움직이는 성" - <?= htmlspecialchars($character_type) ?> 유형</p>
                <button type="button" id="arrow">
                    <img src="img/guest_arrow.png" onclick="location.href='Main.html'" />
                </button>
            </div>
        </div>
    </header>

    <main>
        <div id="chat-container">
            <?php
            $conn = new mysqli("localhost", "root", "111111", "guestbook"); 
            if ($conn->connect_error) {
                die("DB 연결 실패: " . $conn->connect_error);
            }

            $stmt = $conn->prepare("SELECT nickName, message FROM guestBook WHERE character_type = ? ORDER BY id ASC");
            $stmt->bind_param("s", $character_type);
            $stmt->execute();
            $result = $stmt->get_result();

            while ($row = $result->fetch_assoc()) {
                $safeName = htmlspecialchars($row['nickName']);
                $safeMsg = htmlspecialchars($row['message']);
                echo "
                <div class='message-wrapper'>
                    <img class='avatar' src='img/howl_green.png' />
                    <div>
                        <div class='username'>{$safeName}</div>
                        <div class='message-box'>{$safeMsg}</div>
                    </div>
                </div>
                ";
            }

            $stmt->close();
            $conn->close();
            ?>
        </div>

        <div id="container-box">
            <input type="text" id="input-text" placeholder="남기고 싶은 말을 입력해주세요.">
            <button onclick="sendMessage()" id="submit" type="button">
                <img src="img/arrow.png">
            </button>
        </div>
    </main>

    <script>
        const nickname = <?= json_encode($nickname) ?>;
        const character_type = <?= json_encode($character_type) ?>;

        const input = document.getElementById("input-text");
        input.addEventListener("keydown", function (event) {
            if (event.key === "Enter") {
                sendMessage();
            }
        });

        function sendMessage() {
            const message = input.value.trim();
            if (message === "") return;

            fetch("save_guestbook.php", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({
                    nickname: nickname,
                    message: message,
                    character_type: character_type,
                }),
            });

            const container = document.getElementById("chat-container");

            const wrapper = document.createElement("div");
            wrapper.className = "message-wrapper";

            const avatar = document.createElement("img");
            const avatars = ["img/howl_green.png", "img/howl_red.png"];
            avatar.src = avatars[Math.floor(Math.random() * avatars.length)];
            avatar.className = "avatar";

            const textBox = document.createElement("div");
            const username = document.createElement("div");
            username.className = "username";
            username.textContent = nickname;

            const messageBox = document.createElement("div");
            messageBox.className = "message-box";
            messageBox.textContent = message;

            textBox.appendChild(username);
            textBox.appendChild(messageBox);
            wrapper.appendChild(avatar);
            wrapper.appendChild(textBox);

            container.appendChild(wrapper);
            input.value = "";
            wrapper.scrollIntoView({ behavior: "smooth", block: "start" });
        }
    </script>
</body>
</html>
