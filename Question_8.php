<!-- 질문 8 -->

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>질문 8</title>
    <link rel="stylesheet" href="css/Question_8.css" />
    <link rel="stylesheet" href="css/Question.css" />
</head>

<body>
    <img src="img/rail.png" id="rail">
    <div class="Question">
        <img src="img/Q_Green.png" class="Q">
        <p>그의 등에 오른 당신은 공중으로 떠오릅니다.<br>
             구름을 지나, 드넓은 바다 위를 날다가 이윽고, 물 위에 펼쳐진 외로운 기찻길에 착지합니다.<br>
              바다 위 기찻길. 당신은 무엇을 할까요?</p>
            <?php $nickName = $_GET['name']; ?>
            <form method="post" action="score.php">
                <input type="hidden" name="nickName" value="<?= htmlspecialchars($nickName) ?>">
                <input type="hidden" name="questionNum" value="8">

                <button name="types" value="chihiro,sosuke">조용히 선로 위를 걷는다.</button><br>
                <button name="types" value="howl,totoro,sophie">하늘과 바다를 바라보며 잠시 멈춘다.</button><br>
                <button name="types" value="haku">어디선가 기차가 오는지 귀 기울인다.</button><br> <!-- 메이, 포뇨 X -->
            </form>
    </div>
</body>

</html>