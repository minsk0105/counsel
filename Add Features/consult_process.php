<?php
    $connect = mysqli_connect('localhost', 'root', '', 'consult_form');

    $method = $_POST['way'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $description = $_POST['request'];

    $sql = "
        INSERT INTO consult (name, phone, email, date, description, method)
        VALUES (
            '{$name}',
            '{$phone}',
            '{$email}',
            '{$date}',
            '{$description}',
            '{$method}'
        );
    ";
    
    $result = mysqli_query($connect, $sql);
    
    if ($result) { ?>
        <script>
            alert("구매상담 신청이 완료되었습니다.");
            location.href = 'consult.php';
        </script>
    <?php } else { ?>
        <script>
            alert("신청에 실패하였습니다. 다시 시도해 보세요.");
            location.href = 'consult.php';
        </script>
    <?php } ?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>구매상담 신청 폼</title>
    <link rel="icon" type="image/png" sizes="32x32" href="https://static.interiorteacher.com/general/favicon_white_32.png">
</head>
</html>