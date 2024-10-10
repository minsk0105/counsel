<?php

    include('conn.php');
    
    if (
        isset($_POST['user_id']) &&
        isset($_POST['user_nick']) &&
        isset($_POST['pass']) &&
        isset($_POST['pass_check'])
    ) {

        $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
        $user_nick = mysqli_real_escape_string($conn, $_POST['user_nick']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);
        $pass_check = mysqli_real_escape_string($conn, $_POST['pass_check']);

    // if (isset($_POST['save'])) {

    //     function text_input($value) {
    //         $value = trim($value);
    //         $value = stripslashes($value);
    //         $value = htmlspecialchars($value);
    //         return $value;
    //     }

    //     $user_id = text_input($_POST['user_id']);
    //     $user_nick = text_input($_POST['user_nick']);
    //     $pass = text_input($_POST['pass']);
    //     $pass_check = text_input($_POST['pass_check']);

        // 입력값 저장
        $user_info = "user_id=".$user_id."&user_nick=".$user_nick;

        if (empty($user_id)) {
            // echo "
            //     <script>
            //         alert(\"아이디를 입력해 주세요.\");
            //         history.back();
            //     </script>
            // ";

            header("location: register_view.php?error=아이디가 비어있습니다.&$user_info");
            exit();
        } else if (empty($user_nick)) {
            // echo "
            //     <script>
            //         alert(\"닉네임을 입력해 주세요.\");
            //         location.replace('register_view.php');
            //     </script>
            // ";

            header("location: register_view.php?error=닉네임이 비어있습니다.&$user_info");
            exit();
        } else if (empty($pass)) {
            header("location: register_view.php?error=비밀번호가 비어있습니다.&$user_info");
            exit();
        } else if (empty($pass_check)) {
            header("location: register_view.php?error=비밀번호 확인을 입력해 주세요.&$user_info");
            exit();
        } else if ($pass !== $pass_check) {
            header("location: register_view.php?error=비밀번호가 일치하지 않습니다. 다시 확인해 주세요.&$user_info");
            exit();
        } else {

            // $md5 = md5($pass); // 양방향 암호 => 복호화 가능
            // echo $md5;

            $hash_pass = password_hash($pass_check, PASSWORD_DEFAULT); // 단방향 암호

            $sql_same = "
                SELECT * FROM member WHERE
                    mb_id = '$user_id' AND
                    mb_nick = '$user_nick'
            ";
            $order = mysqli_query($conn, $sql_same);

            if (mysqli_num_rows($order) > 0) { // 아이디 및 닉네임 중복확인
                header("location: register_view.php?error=아이디 또는 닉네임이 중복되었습니다.&$user_info");
                exit();
            } else {
                $sql_save = "
                    INSERT INTO member (mb_id, mb_nick, password)
                    VALUES (
                        '$user_id',
                        '$user_nick',
                        '$hash_pass'
                    )
                ";
                $result = mysqli_query($conn, $sql_save);

                if ($result) {
                    header("location: register_view.php?success=성공적으로 가입되었습니다.");
                    exit();
                } else {
                    echo "회원가입 실패";
                    exit();
                }
            }

        }

    } else {
        echo "알 수 없는 오류가 발생하였습니다.";
        exit();
    }

?>