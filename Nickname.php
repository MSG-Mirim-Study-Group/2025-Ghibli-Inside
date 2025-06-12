<?php
$error = ""; // 오류 메시지

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nickName = trim($_POST['username']);

    if (empty($nickName)) {
        $error = "닉네임을 입력해주세요.";
    } else {
        // DB 연결
        $conn = mysqli_connect('localhost', 'root', '111111', 'msg_itshow');

        if (!$conn) {
            die("DB 연결 실패: " . mysqli_connect_error());
        }

        // INSERT
        $sql = "INSERT INTO msg_itshow(nickName) VALUES('$nickName')";
        mysqli_query($conn, $sql);
        mysqli_close($conn);

        // 다음 페이지로 이동
        header("Location: Question_1.php?name=" . urlencode($nickName));
        exit;
    }
}
?>

<!-- 닉네임 기입 페이지 -->

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>닉네임 기입</title>
    <link rel="stylesheet" href="css/Nickname.css" />
</head>

<body>
    <form method="post" action="">
        <main>
            <section id="Nickname">
                <img src="img/totoro.png" alt="토토로" id="totoro" />
                <p id="ask">당신의 이름은 무엇인가요?</p>
                <?php if (!empty($error)): ?>
                    <p style="color:red;"><?= htmlspecialchars($error) ?></p>
                <?php endif; ?>
            </section>

            <section class="bar-container">
                <img src="img/submit.png" id="bar" />

                <div id="submit">
                    <input type="text" placeholder="이름을 알려주세요" name="username" autocomplete="off"
                        onkeyup="characterCheck(this)" onkeydown="characterCheck(this)" maxlength="20" required />
                    <button id="arrow" type="submit">
                        <img src="img/arrow.png" alt="이동 화살표" />
                    </button>
                </div>
            </section>
        </main>
    </form>

    <script>
        function characterCheck(obj) {
            var regExp = /[ \{\}\[\]\/?.,;:|\)*~`!^\_+┼<>@\#$%&\'\"\\\(\=]/gi;
            if (regExp.test(obj.value)) {
                alert("특수문자는 입력하실 수 없습니다.");
                obj.value = obj.value.substring(0, obj.value.length - 1);
            }
        }
    </script>
</body>

</html>
