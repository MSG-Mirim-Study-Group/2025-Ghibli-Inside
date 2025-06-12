<!-- 질문 6 -->

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>질문 6</title>
    <link rel="stylesheet" href="css/Question_6.css" />
    <link rel="stylesheet" href="css/Question.css" />
</head>

<body>
    <img src="img/six.png" id="totoro">
    <div class="Question">
        <img src="img/Q_White.png" class="Q">
        <p>여섯 번째, 갑자기 숲이 흔들리고 신비한 생명체들이 지나갑니다.<br>
            그들은 모두 목적지를 향해 가고 있습니다.<br>
            신비한 생물들이 당신 앞을 지나갑니다.</p>
            <?php $nickName = $_GET['name']; ?>
            <form method="post" action="score.php">
                <input type="hidden" name="nickName" value="<?= htmlspecialchars($nickName) ?>">
                <input type="hidden" name="questionNum" value="6">
                
                <button name="types" value="ponyo,totoro,sosuke">눈을 크게 뜨고 그들의 움직임을 관찰한다.</button><br>
                <button name="types" value="may, haku">조용히 뒤를 따라 걸어본다.</button><br>
                <button name="types" value="chihiro, sophie">조심스럽게 말을 걸어본다.</button><br> <!-- 하울 X -->
            </form>
    </div>
</body>

</html>