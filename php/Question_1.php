<!-- 질문 1 -->

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>질문 1</title>
    <link rel="stylesheet" href="css/Question_1.css" />
    <link rel="stylesheet" href="css/Question.css" />
</head>

<body>
    <img src="img/cat_eye.png" id="eye">
    <img src="img/eye1.png" class="eye1">
    <img src="img/eye2.png" class="eye2">
    <img src="img/tail.png" class="tail">
    <div class="Question">
        <img src="img/Q_White.png" class="Q">
        <p>비 오는 날 오래된 정류장에서 버스를 기다리던 당신.<br>
            바로 그때, 고양이의 눈처럼 반짝이는 불빛이 어둠 속에서 다가옵니다.<br>
            고양이 버스가 당신 앞에 도착했습니다. 문이 천천히 열립니다. <br>
            당신은 어떻게 할까요?</p>
            <?php $nickName = $_GET['name']; ?>
            <form method="post" action="score.php">
                <input type="hidden" name="nickName" value="<?= htmlspecialchars($nickName) ?>">
                <input type="hidden" name="questionNum" value="1">

                <button name="types" value="ponyo, may">너무 재밌을 것 같은데?! 위풍당당하게 버스에 올라탄다.</button><br>
                <button name="types" value="sosuke">이런 기회가 또 올까 싶다. 조금 두렵지만, 함께 가보자</button><br>
                <button name="types" value="sophie, haku">그저 궁금하다. 다른 세계를 경험하고 싶다.</button><br>
                <button name="types" value="chihiro, totoro">나도 모르게 발걸음이 자연스럽게 나아간다.</button><br>  <!-- 하울 X -->
            </form> 
    </div>
</body>

</html>