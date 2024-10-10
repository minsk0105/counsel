<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>

    <!-- 스타일시트 -->
    <link rel="stylesheet" href="CSS/register.css">
</head>
<body>

    <!-- form -->
    <div class="user_box">
        <form action="login_server.php" method="post">
            <h2>로그인</h2>

            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?= $_GET['error']; ?></p>
            <?php } else if (isset($_GET['success'])) { ?>
                <p class="error"><?=$_GET['success']?></p>
            <?php } ?>

            <label>아이디</label>
            <input type="text" placeholder="아이디" name="user_id">

            <label>비밀번호</label>
            <input type="password" placeholder="비밀번호" name="pass">

            <div class="button_menu">
                <a href="register_view.php">아직 회원이 아니신가요? (회원가입 페이지)</a>
                <button type="submit" name="login_btn">로그인</button>
            </div>
        </form>
    </div>

</body>
</html>