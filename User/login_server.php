<?php

    include('conn.php');
    
    if (
        isset($_POST['user_id']) &&
        isset($_POST['pass'])
    ) {

        $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);

        if (empty($user_id)) {
            // echo "
            //     <script>
            //         alert(\"아이디를 입력해 주세요.\");
            //         history.back();
            //     </script>
            // ";

            header("location: login_view.php?error=아이디가 비어있습니다.");
            exit();
        } else if (empty($pass)) {
            header("location: login_view.php?error=비밀번호가 비어있습니다.");
            exit();
        } else {

            $sql = "
                SELECT * FROM member WHERE mb_id = '$user_id'
            ";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) === 1) {

                $row = mysqli_fetch_assoc($result); // 유저 값 읽어오기
                $hash = $row['password'];

                if (password_verify($pass, $hash)) { // 패스워드의 해시와 입력한 패스워드가 같은지 확인
                    header("location: login_view.php");
                    exit();
                } else {
                    header("location: login_view.php?=로그인에 실패하였습니다.");
                    exit();
                }

            } else {
                header("location: login_view.php?=존재하지 않는 아이디입니다.");
                exit();
            }

        }

    } else {
        echo "알 수 없는 오류가 발생하였습니다.";
        exit();
    }

?>