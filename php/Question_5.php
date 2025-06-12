<!-- 질문 5 -->

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>질문 5</title>
    <link rel="stylesheet" href="css/Question_5.css" />
    <link rel="stylesheet" href="css/Question.css" />
</head>

<body>
    <img src="img/window.png" id="window">
    <div class="Question">
        <img src="img/Q_White.png" class="Q">
        <p>식사를 마친 당신은 문득 열린 창밖으로 시선을 옮깁니다.<br>
            정원 너머, 거대한 나무가 흔들립니다. 마치 당신을 부르고 있는 듯합니다.<br>
            비밀의 정원과 거대한 나무. 당신은 무엇을 할까요?</p>
            <?php $nickName = $_GET['name']; ?>
            <form method="post" action="score.php">
                <input type="hidden" name="nickName" value="<?= htmlspecialchars($nickName) ?>">
                <input type="hidden" name="questionNum" value="5">
                
                <button name="types" value="chihiro,haku">나무를 향해 다가가며 조용히 관찰한다.</button><br>
                <button name="types" value="totoro,may,howl">가지 위로 올라가 위에서 마을을 바라본다.</button><br>
                <button name="types" value="sophie, sosuke">나무 아래에서 잠시 숨을 고른다.</button><br> <!-- 포뇨 X -->
            </form>
    </div>
</body>

</html>