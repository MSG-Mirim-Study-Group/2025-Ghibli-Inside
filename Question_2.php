<!-- 질문 2 -->

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>질문 2</title>
    <link rel="stylesheet" href="css/Question_2.css" />
    <link rel="stylesheet" href="css/Question.css" />
</head>

<body>
    <img src="img/bus.png" id="bus">
    <div class="Question">
        <img src="img/Q_Green.png" class="Q">
        <p>버스는 조용히 출발하고, 창밖으로 낯선 풍경들이 스쳐갑니다. <br>
            잠시 후, 버스는 어느 마을 앞에 멈춥니다. 마을 사람들은 조용히 당신을 바라봅니다. <br>
            당신은 어떻게 할까요?</p>
            <?php $nickName = $_GET['name']; ?>
            <form method="post" action="score.php">
                <input type="hidden" name="nickName" value="<?= htmlspecialchars($nickName) ?>">
                <input type="hidden" name="questionNum" value="2">

                <button name="types" value="totoro, haku">조용히 고개를 숙이고 인사한다.</button><br>
                <button name="types" value="sophie,  chihiro, howl">살짝 미소를 지어 보인다.</button><br>
                <button name="types" value="sosuke">낯설지만 눈을 맞추며 다가가 본다.</button><br> <!-- 메이, 포뇨 X -->
            </form>
    </div>
</body>

</html>