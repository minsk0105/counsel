<?php
    include('../DB/db_connect.php');

    if (isset($_POST['non_members'])) {

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

    } else {
        echo "회원으로 신청";
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