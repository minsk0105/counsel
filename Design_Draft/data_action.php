<?php
    $connect = mysqli_connect('localhost', 'root', '', 'consult_form');

    $method = $_POST['way'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $text = $_POST['request'];

    $sql = "INSERT INTO counsel (name, phone, email, date, text, method)
        VALUES (
            '{$name}',
            '{$phone}',
            '{$email}',
            '{$date}',
            '{$text}',
            '{$method}'
        )
    ";

    $result = mysqli_query($connect, $sql);

    if ($result) { ?>
        <script>
            alert("저장 성공");
            location.href = "index.php";
        </script>
    <?php } else {
        echo "저장 실패";
    } ?>