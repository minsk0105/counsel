<?php
    session_start();
    require_once('Common/header.php');
?>
<head>
    <link rel="stylesheet" href="CSS/mypage.css">
</head>

    <!-- 마이페이지 메인 섹션 -->
    <section id="mypage">

        <form action="Process/logout_process.php" method="post">

            <div class="page_contents">

                <!-- 사용자 정보 및 로그아웃 버튼  -->
                <div class="page_header">
                    <div class="user_info">
                        <h1><?=$_SESSION['mb_id']?></h1>
                        <span><?=$_SESSION['mb_name']?></span>
                        <p><?=$_SESSION['mb_email']?></p>
                    </div>
                    <button type="submit" class="logout_button">로그아웃</button>
                </div>

                <!-- 세부정보 -->
                <div class="details">
                    <div class="user_add">
                        <p class="details_title">배송지</p>
                        <p class="details_info"><?=$_SESSION['mb_addr']?></p>
                    </div>

                    <div class="user_phone">
                        <p class="details_title">전화번호</p>
                        <p class="details_info">
                            <?php
                                $sorted_value = $_SESSION['mb_phone'];
                                $result = substr_replace($sorted_value, '-', 3, 0);
                                $result = substr_replace($result, '-', 8, 0);
                                echo $result;
                            ?>
                        </p>
                    </div>

                </div>

                <!-- 사용자 내역 -->
                <div class="user_history">
                    <div class="design_project">
                        <p>내가 만든 가구</p>
                        <h2>0</h2>
                    </div>
                    <div class="shopping_cart">
                        <p>장바구니</p>
                        <h2>0</h2>
                    </div>
                    <div class="buy_history">
                        <p>구매 내역</p>
                        <h2>0</h2>
                    </div>
                </div>

                <!-- 사용자 상담 신청 내역 -->
                <div class="counsel_history">
                    <h1>나의 상담 신청 내역</h1>
                    <a href="Process/list_process.php"><i class="fa-solid fa-arrow-right-long"></i>나의 신청 내역 보러가기</a>
                </div>

            </div>
            
        </form>

    </section>

<?php require_once('Common/footer.php') ?>