<!-- 질문 7 -->

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>질문 7</title>
    <link rel="stylesheet" href="css/Question_7.css" />
    <link rel="stylesheet" href="css/Question.css" />
</head>

<body>
    <img src="img/dragon.png" id="dragon">
    <div class="Question">
        <img src="img/Q_White.png" class="Q">
        <p>어느새 해가 지고,<br>
             어둠 속 하늘엔 한 마리의 하얀 용이 날아옵니다.<br> 
            그는 천천히 당신 앞에 착지 한 후 다가옵니다.</p>
            <?php $nickName = $_GET['name']; ?>
            <form method="post" action="score.php">
                <input type="hidden" name="nickName" value="<?= htmlspecialchars($nickName) ?>">
                <input type="hidden" name="questionNum" value="7">

                <button name="types" value="chihiro, sosuke">조심스럽게 손을 뻗어본다.</button><br>
                <button name="types" value="sophie">말을 걸지는 않지만, 눈을 맞춘다.</button><br>
                <button name="types" value="may">고개를 끄덕이고, 그의 등에 오른다.</button><br>
                <button name="types" value="howl, haku">말을 걸어본다.</button><br> <!-- 토토로, 포뇨 X -->
            </form>
    </div>
</body>

</html>