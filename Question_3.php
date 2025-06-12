<!-- 질문 3 -->

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>질문 3</title>
    <link rel="stylesheet" href="css/Question_3.css" />
    <link rel="stylesheet" href="css/Question.css" />
</head>

<body>
    <img src="img/key.png" id="key">
    <div class="Question">
        <img src="img/Q_White.png" class="Q">
        <p>누군가 당신 손에 열쇠를 쥐여줍니다. <br>
            “이 집은 당신의 것입니다.” 언덕, 낡고 이끼 낀 집 하나가 당신을 기다립니다.</p>
            <?php $nickName = $_GET['name']; ?>
            <form method="post" action="score.php">
                <input type="hidden" name="nickName" value="<?= htmlspecialchars($nickName) ?>">
                <input type="hidden" name="questionNum" value="3">

                <button name="types" value="may">방을 하나씩 돌아본다.</button><br>
                <button name="types" value="ponyo, howl">창문으로 보이는 풍경을 바라본다.</button><br>
                <button name="types" value="sosuke, haku, chihiro">조용히 손을 씻고 자리를 정리한다.</button><br>
                <button name="types" value="sophie">낯선 침대에 살며시 누워본다.</button><br> <!-- 토토로 X -->
            </form>
    </div>
</body>

</html>