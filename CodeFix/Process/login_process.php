<?php
    session_start();
    include('../DB/db_connect.php');

    if (isset($_POST['login_submit'])) {

        function input_text($value) {
            $value = trim($value);
            $value = stripslashes($value);
            $value = htmlspecialchars($value);
            return $value;
        }

        $user_id = input_text($_POST['id']);
        $passowrd = input_text($_POST['password']);

        $user_id = mysqli_real_escape_string($conn, $user_id);
        $passowrd = mysqli_real_escape_string($conn, $passowrd);

        $sql = "SELECT * FROM members
            WHERE mb_id = '$user_id'
        ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result); // 유저 값 읽어오기
            $hash = $row['password']; // 불러온 레코드의 비밀번호 해시

            // password_verify: 입력한 패스워드가 저장된 비밀번호와 같은지 확인하는 함수
            if (password_verify($passowrd, $hash)) {
                
                // 전역변수를 이용
                $_SESSION['mb_name'] = $row['mb_name'];
                $_SESSION['mb_phone'] = $row['mb_phone'];
                $_SESSION['mb_email'] = $row['mb_email'];
                $_SESSION['mb_id'] = $row['mb_id'];
                $_SESSION['mb_addr'] = $row['mb_addr'];

                if (isset($_POST['save_counsel'])) {?>

                    <script>
                        alert("로그인되었습니다.");
                        history.go(-2);
                    </script>

                <?php } else { ?>

                    <script>
                        alert("로그인되었습니다.");
                        location.href = '../mypage.php';
                    </script>

                <?php }

            } else {

                echo "로그인 실패";
                exit();
                
            }

        }
    } else {

        echo "error";
        exit();

    }
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