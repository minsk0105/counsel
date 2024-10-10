<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>마이페이지</title>
    <link rel="stylesheet" href="../CSS/mypage.css">
</head>
<body>

    <div class="mypage_box">
        <form action="../logout.php" method="post">
            <div class="box_header">
                <div class="user-info">
                    <h1><?=$_SESSION['mb_nick']?></h1>
                    <span>No. <?=$_SESSION['no']?></span>
                    <h3><?=$_SESSION['mb_id']?></h3>
                </div>

                <div class="logout_btn">
                    <button type="submit">로그아웃</button>
                </div>
            </div>
        </form>
    </div>

</body>
</html>