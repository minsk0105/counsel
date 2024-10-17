<?php require_once("Common/header.php"); ?>
<head>
    <link rel="stylesheet" href="CSS/nons_list.css">
</head>

<?php

    include('DB/db_connect.php');

    $name = $_GET['name'];
    $phone = $_GET['phone'];
    // echo $name."<br>";
    // echo $phone."<br>";

    $sql = "SELECT * FROM nons_counsel
        WHERE name = '$name'
    ";

    $query = mysqli_query($conn, $sql);

    $list;
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

?>

    <!-- 조회 목록 섹션 -->
    <section id="list">
        <div class="list_container">


            <!-- 섹션 타이틀 -->
            <div class="list_title">
                <h1><?= $name ?>님의 신청 내역</h1>
                <p>
                    상담 요청을 주시면 업무시간 기준 1시간 내에<br>
                    고객님께 상담전화를 드립니다.
                </p>
                <h2>5300-5300</h2>
            </div>

            <!-- 리스트 콘텐츠 -->
            <div class="list_contents">
                <?=$list?>
            </div>

        </div>
    </section>

<?php require_once("Common/footer.php") ?>