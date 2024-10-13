<?php
    session_start();

    if (isset($_SESSION['mb_id']) && isset($_SESSION['mb_phone'])) {
        header("Location: ../mypage.php");
        exit();
    } else { ?>
        <script>
            function on_confirm() {
                if (confirm("로그인 후 이용이 가능합니다. 로그인하시겠습니까?")) {
                    location.href = '../login.php';
                } else {
                    history.back();
                }
            }

            on_confirm();
        </script>
    <?php }
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>구매상담 신청 폼</title>
    <link rel="icon" type="image/png" sizes="32x32" href="https://static.interiorteacher.com/general/favicon_white_32.png">
</head>
<body>
    
</body>
</html>