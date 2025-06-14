<!-- 질문 4 -->

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>질문 4</title>
    <link rel="stylesheet" href="css/Question_4.css" />
    <link rel="stylesheet" href="css/Question.css" />
</head>

<body>
    <img src="img/fryingPan.png" id="fryingPan">
    <img src="img/fire1.png" id="fire1">
    <img src="img/fire2.png" id="fire2">
    <img src="img/face.png" id="face">
    <img src="img/food.png" id="food">
    <div class="Question">
        <img src="img/Q_Red.png" class="Q">
        <p>집 안에서 갓 끓인 국물 냄새가 납니다. 아무도 없는데,<br> 식탁엔 따뜻한 음식이 놓여있습니다. <br>
            누군가의 흔적이 느껴지는 부엌. 당신은 어떻게 할까요?</p>
            <?php $nickName = $_GET['name']; ?>
            <form method="post" action="score.php">
                <input type="hidden" name="nickName" value="<?= htmlspecialchars($nickName) ?>">
                <input type="hidden" name="questionNum" value="4">

                <button name="types" value="sophie,may,howl">부엌의 물건들을 천천히 살펴본다.</button><br>
                <button name="types" value="sosuke, chihiro">식탁 주위를 둘러보며 누가 있었는지 상상해본다.</button><br>
                <button name="types" value="ponyo">조용히 식탁에 앉아 음식을 맛본다.</button><br> <!-- 토토로 하쿠 X -->
            </form>
    </div>
</body>

</html>