<!-- 질문 9 -->

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>질문 9</title>
    <link rel="stylesheet" href="css/Question_9.css" />
    <link rel="stylesheet" href="css/Question.css" />
</head>

<body>
    <div class="clock-display">
        <img src="img/clock.png" id="clock">
        <img src="img/clock-center.png" id="clock-center">
        <img src="img/hour1.png" id="hour1">
        <img src="img/minute1.png" id="minute1">
        <img src="img/second1.png" id="second1">
        <img src="img/hour2.png" id="hour2">
        <img src="img/minute2.png" id="minute2">
        <img src="img/second2.png" id="second2">
        <img src="img/hour3.png" id="hour3">
        <img src="img/minute3.png" id="minute3">
        <img src="img/second3.png" id="second3">
    </div>
    
    <div class="Question">
    <img src="img/Q_White.png" class="Q" alt="질문 아이콘">
        <p>기찻길 너머엔 멈춰버린 마을이 있습니다. <br>
            시간이 멈춘 듯한 공간, <br>
            모든 것이 정지해 있습니다.</p>
            <?php $nickName = $_GET['name']; ?>
            <form method="post" action="score.php">
                <input type="hidden" name="nickName" value="<?= htmlspecialchars($nickName) ?>">
                <input type="hidden" name="questionNum" value="9">

                <button name="types" value="chihiro, sosuke">천천히 마을 골목을 따라 걸어본다.</button><br>
                <button name="types" value="totoro, howl">멈춰 선 시계를 바라본다.</button><br>
                <button name="types" value="ponyo, haku">움직이는 누군가 있는지 확인 해본다.</button><br>
                <button name="types" value="may">정지된 사람들에게 다가가 말을 걸어본다.</button> <!-- 소피 X -->
            </form>
    </div>
</body>

</html>