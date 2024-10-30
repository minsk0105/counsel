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
    
        $query = mysqli_query($conn, $sql);
    
        $list = '';
        while ($row = mysqli_fetch_array($query)) {
    
            if ($phone = $row['phone']) {
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

    } else {

        $sql = "SELECT * FROM members_counsel
            WHERE user_phone = '{$_SESSION['mb_phone']}'
        ";

        $find_sql = "SELECT * FROM members_counsel INNER JOIN file
            ON members_counsel.register_time = file.upload_time
        ";

        $query = mysqli_query($conn, $sql);
        $push_find = mysqli_query($conn, $find_sql);

        $file_isset = '';
        $file_name = '';
        while ($file_row = mysqli_fetch_array($push_find)) {
            $file_isset .= "," . $file_row['upload_time'];
            $file_name .= "," . $file_row['name_origin'];
        }
        
        $list = '';
        $trav_str = explode(',', $file_isset);
        $trav_name = explode(',', $file_name);
        $sum = 0;
        $img_src = '';
        
        while ($row = mysqli_fetch_array($query)) {
            $count = $sum++;
            $allowed_fileName = substr($trav_name[$count], strrpos($trav_name[$count], '.') + 1);
            if ($allowed_fileName === "txt") {
                $img_src = "Image/free-icon-txt-file-11471393.png";
            } else if ($allowed_fileName === "png") {
                $img_src = "Image/free-icon-png-file-10260781.png";
            } else if ($allowed_fileName === "jpg") {
                $img_src = "CodeFix/Image/free-icon-jpg-file-8263083.png";
            } else if ($allowed_fileName === "pdf") {
                $img_src = "Image/free-icon-pdf-9496432.png";
            } else if ($allowed_fileName === "xls") {
                $img_src = "Image/free-icon-xls-8243067.png";
            } else if ($allowed_fileName === "hwp") {
                $img_src = "Image/free-icon-file-14422348.png";
            } else {
                $img_src = "Image/free-icon-doc-file-10260338.png";
            }
            
            if ($phone = $row['user_phone']) {
                if (in_array($row['register_time'], $trav_str)) {

                    $list .= "
                        <div class=\"list_box\">
                            <p class=\"reserv_date\">{$row['user_date']}</p>
                            <p class=\"email\">{$row['user_email']}</p>
                            <p class=\"desc\">
                                {$row['description']}
                            </p>
                            <p class=\"counsel_way\">{$row['method']}</p>"."
                            <div class=\"view_file\">
                                <img src='$img_src' alt=\"icon\" class=\"file_icon\">
                                $trav_name[$count]
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