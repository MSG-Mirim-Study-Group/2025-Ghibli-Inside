<!-- 질문 10 -->

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>질문 10</title>
    <link rel="stylesheet" href="css/Question_10.css" />
    <link rel="stylesheet" href="css/Question.css" />
</head>

<body>
    <img src="img/eleven.png" id="background">
    <div class="Question">
        <img src="img/Q_White.png" class="Q">
        <p>당신은 마을을 지나 밤하늘을 올려다보자, 별들이 하나 둘 떨어집니다.<br>
             그중 하나가 당신 앞으로 천천히 내려옵니다.<br> 당신 앞에 별이 떨어집니다.</p>
            <?php $nickName = $_GET['name']; ?>
            <form method="post" action="score.php">
                <input type="hidden" name="nickName" value="<?= htmlspecialchars($nickName) ?>">
                <input type="hidden" name="questionNum" value="10">
                
                <button name="types" value="howl,chihiro">별을 손에 담아 따뜻함을 느낀다.</button><br>
                <button name="types" value="sophie, sosuke">별이 떨어진 자리에 앉아 잠시 쉰다.</button><br>
                <button name="types" value="howl, may">별에게 소원을 빌어본다.</button><br>
                <button name="types" value="totoro , haku">별에 다가가지 않고 멀리서 지켜본다.</button> <!-- 포뇨 X -->
            </form>
    </div>
    <div class="stars">
        <script>
            const starsContainer = document.querySelector('.stars');

            for (let i = 0; i < 150; i++) {
                const star = document.createElement('div');
                star.className = 'star';
                star.style.top = `${Math.random() * 100}%`;
                star.style.left = `${Math.random() * 100}%`;
                star.style.animationDelay = `${Math.random() * 3}s`;
                starsContainer.appendChild(star);
            }
        </script>

    </div>
</body>

</html>