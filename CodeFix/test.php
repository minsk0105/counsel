<?php
    session_start();
    require_once("Common/header.php");
?>
<head>
    <link rel="stylesheet" href="CSS/nons_list.css">
</head>

<?php

    include('DB/db_connect.php');

    if (isset($_GET['name'])) {

        $name = $_GET['name'];
        $phone = $_GET['phone'];
    
        $sql = "SELECT * FROM nons_counsel
            WHERE name = '$name'
        ";

        $find_sql = "SELECT * FROM nons_counsel INNER JOIN file
            ON nons_counsel.register_time = file.upload_time
        ";

        $name_sql ="SELECT name_origin, upload_time FROM file";
    
        $query = mysqli_query($conn, $sql);
        $push_find = mysqli_query($conn, $find_sql);
        $name_query = mysqli_query($conn, $name_sql);

        $file_isset = array();
        $file_name = array();

        while ($file_row = mysqli_fetch_assoc($push_find)) {
            $file_isset[] = $file_row['upload_time'];
            
            while ($name_row = mysqli_fetch_array($name_query)) {
                if ($file_row['upload_time'] = $name_row['upload_time']) {
                    $file_name[] = $name_row['name_origin'];
                }
            }
        }

        $list = '';
        $sum = count($file_name) - 1;
    
        while ($row = mysqli_fetch_array($query)) {
    
            if ($phone = $row['phone']) {

                if (in_array($row['register_time'], $file_isset)) {
                    $count = $sum--;

                    $list .= "
                        <div class=\"list_box\">
                            <p class=\"reserv_date\">{$row['date']}</p>
                            <p class=\"email\">{$row['email']}</p>
                            <p class=\"desc\">
                                {$row['description']}
                            </p>
                            <p class=\"counsel_way\">{$row['method']}</p>
                            <div class=\"view_file\">
                                <img src='' alt=\"icon\" class=\"file_icon\">
                                $file_name[$count]
                            </div>
                            <div class=\"list_menu\">
                                <button type=\"button\">자세히</button>
                                <button type=\"button\">삭제</button>
                            </div>
                        </div>
                    ";

                } else {

                    $list .= "
                        <div class=\"list_box\">
                            <p class=\"reserv_date\">{$row['date']}</p>
                            <p class=\"email\">{$row['email']}</p>
                            <p class=\"desc\">
                                {$row['description']}
                            </p>
                            <p class=\"counsel_way\">{$row['method']}</p>
                            <div class=\"list_menu\">
                                <button type=\"button\">자세히</button>
                                <button type=\"button\">삭제</button>
                            </div>
                        </div>
                    ";

                }
            }
            
        }

    } else {

        $sql = "SELECT * FROM members_counsel
            WHERE user_phone = '{$_SESSION['mb_phone']}'
        ";

        $find_sql = "SELECT * FROM members_counsel INNER JOIN file
            ON members_counsel.register_time = file.upload_time
        ";

        $name_sql ="SELECT name_origin, upload_time FROM file";

        $query = mysqli_query($conn, $sql);
        $push_find = mysqli_query($conn, $find_sql);
        $name_query = mysqli_query($conn, $name_sql);

        $file_isset = array();
        $file_name = array();

        while ($file_row = mysqli_fetch_assoc($push_find)) {
            $file_isset[] = $file_row['upload_time'];
            
            while ($name_row = mysqli_fetch_array($name_query)) {
                if ($file_row['upload_time'] = $name_row['upload_time']) {
                    $file_name[] = $name_row['name_origin'];
                }
            }
        }

        $list = '';
        // $sum = count($file_name) - 1;
        $sum = 0;
        while ($row = mysqli_fetch_array($query)) {
            
            if ($phone = $row['user_phone']) {

                if (in_array($row['register_time'], $file_isset)) {
                    $count = $sum++;

                    $list .= "
                        <div class=\"list_box\">
                            <p class=\"reserv_date\">{$row['user_date']}</p>
                            <p class=\"email\">{$row['user_email']}</p>
                            <p class=\"desc\">
                                {$row['description']}
                            </p>
                            <p class=\"counsel_way\">{$row['method']}</p>"."
                            <div class=\"view_file\">
                                <img src='' alt=\"icon\" class=\"file_icon\">
                                $file_name[$count]
                            </div>
                            <div class=\"list_menu\">
                                <button type=\"button\">자세히</button>
                                <button type=\"button\">삭제</button>
                            </div>
                        </div>
                    ";
                } else {
                    
                    $list .= "
                        <div class=\"list_box\">
                            <p class=\"reserv_date\">{$row['user_date']}</p>
                            <p class=\"email\">{$row['user_email']}</p>
                            <p class=\"desc\">
                                {$row['description']}
                            </p>
                            <p class=\"counsel_way\">{$row['method']}</p>
                            <div class=\"list_menu\">
                                <button type=\"button\">자세히</button>
                                <button type=\"button\">삭제</button>
                            </div>
                        </div>
                    ";
                }
            }

        }

    }

?>

    <!-- 조회 목록 섹션 -->
    <section id="list">
        <div class="list_container">


            <!-- 섹션 타이틀 -->
            <div class="list_title">
                <?php if(isset($_GET['name'])) { ?>
                    <h1><?= $name ?>님의 신청 내역</h1>
                <?php } else { ?>
                    <h1><?= $_SESSION['mb_name'] ?>님의 신청 내역</h1>
                <?php } ?>
                <p>
                    상담 요청을 주시면 업무시간 기준 1시간 내에<br>
                    고객님께 상담전화를 드립니다.
                </p>
                <h2>5300-5300</h2>
            </div>

            <!-- 리스트 콘텐츠 -->
            <div class="list_contents">
                <?= $list ?>
            </div>

        </div>
    </section>

<?php require_once("Common/footer.php") ?>