<?php
    include("../DB/db_connect.php");

    if (isset($_POST['push_register'])) {

        function input_text($value) {
            $value = trim($value);
            $value = stripslashes($value);
            $value = htmlspecialchars($value);
            return $value;
        }

        $name = input_text($_POST['name']);
        $phone = input_text($_POST['phone']);
        $email = input_text($_POST['email']);
        $user_id = input_text($_POST['user_id']);
        $pass = input_text($_POST['pass']);
        $pass_check = input_text($_POST['pass_check']);
        $user_address = input_text($_POST['user_address']);

        $name = mysqli_real_escape_string($conn, $name);
        $phone = mysqli_real_escape_string($conn, $phone);
        $email = mysqli_real_escape_string($conn, $email);
        $user_id = mysqli_real_escape_string($conn, $user_id);
        $pass = mysqli_real_escape_string($conn, $pass);
        $pass_check = mysqli_real_escape_string($conn, $pass_check);
        $user_address = mysqli_real_escape_string($conn, $user_address);

        // 회원가입 입력란 입력 여부 확인
        $user_info = "name=".$name."&phone=".$phone."&email=".$email."&user_id=".$user_id."&pass=".$pass."&pass_check=".$pass_check."&user_address=".$user_address;

        if (empty($name)) {

            header("Location: ../sign_up.php?error_name=이름을 입력해 주세요.&$user_info");
            exit(); // die()와 같음

        } else if (empty($phone)) {

            header("Location: ../sign_up.php?error_phone=전화번호를 입력해 주세요.&$user_info");
            exit(); // die()와 같음

        } else if (empty($email)) {

            header("Location: ../sign_up.php?error_email=이메일을 입력해 주세요.&$user_info");
            exit(); // die()와 같음

        } else if (empty($user_id)) {

            header("Location: ../sign_up.php?error_id=아이디를 입력해 주세요.&$user_info");
            exit(); // die()와 같음

        } else if (empty($pass)) {

            header("Location: ../sign_up.php?error_pass=비밀번호를 입력해 주세요.&$user_info");
            exit(); // die()와 같음

        } else if (empty($pass_check)) {

            header("Location: ../sign_up.php?error_check=비밀번호 확인을 입력해 주세요.&$user_info");
            exit(); // die()와 같음

        } else if (empty($user_address)) {

            header("Location: ../sign_up.php?error_address=배송지를 입력해 주세요.&$user_info");
            exit(); // die()와 같음

        } else if ($pass !== $pass_check) {
            header("Location: ../sign_up.php?error=비밀번호가 일치하지 않습니다.&$user_info");
            exit(); // die()와 같음
        } else {

            // 유저 중복 확인
            $sql_same = "SELECT * FROM members
                WHERE
                    mb_phone = '$phone'
                AND
                    mb_id = '$user_id'
            ";

            // mysqli_num_rows(): $sql_same의 SQL문에서 출력된 값의 개수를 세어주는 함수
            $order = mysqli_query($conn, $sql_same);

            if (mysqli_num_rows($order) > 0) { ?>
                <script>
                    alert("아이디 또는 전화번호가 중복되었습니다.");
                    history.back();
                </script>
            <?php } else {

                $hash_pass = password_hash($pass_check, PASSWORD_DEFAULT); // 단방향 암호
                // 단방향 암호를 사용하는 이유는 원래의 비밀번호를 복호화를 할 수 없음
                // But, 양방향 암호는 복호화가 가능함 md5();

                $sql_save = "INSERT INTO members (mb_name, mb_phone, mb_email, mb_id, password, mb_addr)
                    VALUES (
                        '$name',
                        '$phone',
                        '$email',
                        '$user_id',
                        '$hash_pass',
                        '$user_address'
                    )
                ";

                $result = mysqli_query($conn, $sql_save);

                if ($result) { ?>
                    <script>
                        alert("성공적으로 가입되었습니다.");
                        location.href = '../sign_up.php';
                    </script>
                <?php } else {
                    echo "회원가입 실패";
                    exit();
                }
                
            }

        }

    } else {
        echo "알 수 없는 이유로 회원가입에 실패하였습니다.";
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