
<?php
session_start();
$nickname = $_SESSION['nickname'] ?? '익명';
$character_type = $_GET['character'] ?? '포뇨'; // 기본값 포뇨
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>방명록_<?php echo htmlspecialchars($character_type); ?></title>
    <link rel="stylesheet" href="./css/guestbook.css">
</head>
<body>
    <header>
        <div class="container">
            <img src="img/header.png" id="header" />
            <div id="box">
                <p id="title">방명록</p>
                <img src="img/Line.png" id="Line" />
                <p id="text">“<?php echo htmlspecialchars($character_type); ?>" 유형</p>
                <button type="button" id="arrow">
                    <img src="img/guest_arrow.png" onclick="location.href='Main.html'" />
                </button>
            </div>
        </div>
    </header>
    <main>
        <div id="chat-container"></div>

        <div id="container-box">
            <input type="hidden" id="nickname" value="<?php echo htmlspecialchars($nickname); ?>">
            <input type="hidden" id="character_type" value="<?php echo htmlspecialchars($character_type); ?>">

            <input type="text" id="input-text" placeholder="남기고 싶은 말을 입력해주세요.">
            <button id="submit" type="button"><img src="img/arrow.png"></button>
        </div>

        <script>
            const characterType = document.getElementById("character_type").value;
            const avatarMap = {
                "포뇨": ["img/ponyo_green.png", "img/ponyo_red.png"],
                "하울": ["img/howl_green.png", "img/howl_red.png"],
                "토토로": ["img/totoro_green.png", "img/totoro_red.png"]
            };

            document.addEventListener("DOMContentLoaded", loadMessages);
            document.getElementById("submit").addEventListener("click", sendMessage);
            document.getElementById("input-text").addEventListener("keydown", function (e) {
                if (e.key === "Enter") sendMessage();
            });

            function loadMessages() {
                fetch("get_guestbook.php?character=" + encodeURIComponent(characterType))
                    .then(res => res.json())
                    .then(messages => {
                        const container = document.getElementById("chat-container");
                        container.innerHTML = "";

                        messages.forEach(msg => {
                            const wrapper = document.createElement("div");
                            wrapper.className = "message-wrapper";

                            const avatar = document.createElement("img");
                            const avatars = avatarMap[characterType] || ["img/default_avatar.png"];
                            avatar.src = avatars[Math.floor(Math.random() * avatars.length)];
                            avatar.className = "avatar";

                            const textBox = document.createElement("div");
                            const username = document.createElement("div");
                            username.className = "username";
                            username.textContent = msg.nickName;

                            const messageBox = document.createElement("div");
                            messageBox.className = "message-box";
                            messageBox.textContent = msg.message;

                            textBox.appendChild(username);
                            textBox.appendChild(messageBox);

                            wrapper.appendChild(avatar);
                            wrapper.appendChild(textBox);

                            container.appendChild(wrapper);
                        });
                    });
            }

            function sendMessage() {
                const input = document.getElementById("input-text");
                const nickname = document.getElementById("nickname").value;
                const message = input.value.trim();
                if (message === "") return;

                fetch("save_guestbook.php", {
                    method: "POST",
                    headers: { "Content-Type": "application/x-www-form-urlencoded" },
                    body: `nickName=${encodeURIComponent(nickname)}&message=${encodeURIComponent(message)}&character_type=${encodeURIComponent(characterType)}`
                }).then(() => {
                    input.value = "";
                    loadMessages();
                });
            }
        </script>
    </main>
</body>
</html>
