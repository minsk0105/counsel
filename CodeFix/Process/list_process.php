<?php
    include('../DB/db_connect.php');

    if (isset($_POST['nons'])) {

        $name = $_POST['name'];
        $phone = $_POST['phone'];

        $sql = "SELECT * FROM nons_counsel
        WHERE
            name = '$name'
        AND
            phone = '$phone'
        ";
        $result = mysqli_query($conn, $sql);
        $row_once = mysqli_fetch_array($result);
        
        if (!$row_once) { ?>
            <script>
                alert("해당 정보가 존재하지 않거나 일치하지 않습니다.");
                history.back();
            </script>
        <?php } else {
        
            // echo $row_once['name'];
            // echo $row_once['email'];
            // echo $row_once['date'];
            // echo $row_once['description'];
            // echo $row_once['method'];
        
            // while ($row = mysqli_fetch_array($result)) {
            //     echo $row['name'];
            // }
        
            // die();
            $hash = md5($phone);
            $hashed = $hash;
        
            if ($hash === $hashed) {
                
                // header("Location: ../view_list.php?name=$name&phone=$hashed");
                header("Location: ../test.php?name=$name&phone=$hashed");
                exit();
            
            } else {
                echo "불일치";
                exit();
            }
        
        }
    } else {
        // header("Location: ../view_list.php");
        header("Location: ../test.php");
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