<?php
    session_start();
    include('../DB/db_connect.php');

    function text_input($value) {
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        return $value;
    }

    $name = text_input($_POST['name']);
    $phone = text_input($_POST['phone']);
    $email = text_input($_POST['email']);
    $date = text_input($_POST['date']);
    $description = text_input($_POST['request']);
    $method = text_input($_POST['way']);

    if (isset($_POST['non_members'])) {

        $sql = "INSERT INTO nons_counsel (name, phone, email, date, description, method, register_time)
            VALUES (?,?,?,?,?,?, NOW())
        ";

        $push_stmt = mysqli_prepare($conn, $sql); // 쿼리 준비
        $binding = mysqli_stmt_bind_param($push_stmt, 'ssssss', $name, $phone, $email, $date, $description, $method);
        // 준비된 쿼리의 변수를 바인딩
        $execute = mysqli_stmt_execute($push_stmt); // 쿼리 실행

        if ($execute) { ?>
            <script>
                alert("비회원으로 신청되었습니다.");
                location.href = "../counsel_view.php";
            </script>
        <?php } else {
            echo "알 수 없는 오류가 발생했습니다.";
            exit();
        }

    } else {
        if (!isset($_SESSION['mb_name'])) { ?>
            <script>
                if (!confirm("로그인 후 이용이 가능합니다. 로그인 하시겠습니까?")) {
                    history.back();
                } else {
                    location.href = "../login.php?method=<?= $method ?>";
                }
            </script>
        <?php } else {

            if ($name !== $_SESSION['mb_name']) { ?>
                <script>
                    alert("성명이 일치하지 않습니다.")
                    history.back();
                </script>
            <?php } else if ($phone !== $_SESSION['mb_phone']) { ?>
                <script>
                    alert("전화번호가 일치하지 않습니다.")
                    history.back();
                </script>
            <?php } else if ($email !== $_SESSION['mb_email']) { ?>
                <script>
                    alert("이메일이 일치하지 않습니다.")
                    history.back();
                </script>
            <?php } else {

                if (isset($_FILES['upFile']) && $_FILES['upFile']['tmp_name'] !== "") {
                    echo "success";
                }
                die();

                $sql = "INSERT INTO members_counsel (user_id, user_phone, user_email, user_date, description, method, register_time)
                VALUES (?,?,?,?,?,?, now())
                ";
                $push_stmt = mysqli_prepare($conn, $sql); // 쿼리 준비
                $binding = mysqli_stmt_bind_param($push_stmt, 'ssssss', $name, $phone, $email, $date, $description, $method);
                // 준비된 쿼리의 변수를 바인딩
                $execute = mysqli_stmt_execute($push_stmt); // 쿼리 실행
                if ($execute) { ?>
                    <script>
                        alert("회원으로 신청되었습니다.");
                        location.href = "../counsel_view.php";
                    </script>
                <?php } else {
                    echo "알 수 없는 오류가 발생했습니다.";
                    exit();
                }

            }
        }
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