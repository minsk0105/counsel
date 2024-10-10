<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>

    <!-- 스타일시트 -->
    <link rel="stylesheet" href="CSS/register.css">
</head>
<body>

    <!-- form -->
    <div class="user_box">
        <form action="register_server.php" method="post">
            <h2>회원가입</h2>

            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?= $_GET['error']; ?></p>
            <?php } else if (isset($_GET['success'])) { ?>
                <p class="error"><?=$_GET['success']?></p>
            <?php } ?>

            <label>아이디</label>
            
            <?php if (isset($_GET['user_id'])) { ?>
                <input type="text" placeholder="아이디" name="user_id" value="<?=$_GET['user_id']?>">
            <?php } else { ?>
                <input type="text" placeholder="아이디" name="user_id">
            <?php } ?>

            <label>닉네임</label>

            <?php if (isset($_GET['user_nick'])) { ?>
                <input type="text" placeholder="닉네임" name="user_nick" value="<?=$_GET['user_nick']?>">
            <?php } else { ?>
                <input type="text" placeholder="닉네임" name="user_nick">
            <?php } ?>

            <label>비밀번호</label>
            <input type="password" placeholder="비밀번호" name="pass">

            <label>비밀번호 확인</label>
            <input type="password" placeholder="비밀번호 확인" name="pass_check">

            <div class="button_menu">
                <a href="login_view.php">이미 회원이신가요? (로그인 페이지)</a>
                <button type="submit" name="save">저장</button>
            </div>
        </form>
    </div>

</body>
</html>