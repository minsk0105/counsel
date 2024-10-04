<?php
    $conn = mysqli_connect('localhost', 'root', '', 'consult_form');

    $saved_name = $_POST['view-name'];
    $saved_phone = $_POST['view-phone'];

    $read_sql = "SELECT * FROM counsel WHERE
        name = '{$saved_name}' AND phone = '{$saved_phone}'
    ";
    
    $result = mysqli_query($conn, $read_sql);

    $list = '';
    $isset_row = mysqli_fetch_array($result);
    if(!$isset_row) { ?>
        <script>
            alert("undefind value!!");
            location.href = 'index.php';
        </script>
    <?php } else {
        $list .= "
            <tr class=\"info-flex\">
                <td>{$isset_row['method']}</td>
                <td>{$isset_row['text']}</td>
                <td>{$isset_row['date']}</td>
            </tr>
        ";

        while ($row = mysqli_fetch_array($result)) {
            $list .= "
                <tr class=\"info-flex\">
                    <td>{$row['method']}</td>
                    <td>{$row['text']}</td>
                    <td>{$row['date']}</td>
                </tr>
            ";
        }
    } ?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>구매 상담 신청 폼</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="view.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" sizes="32x32" href="https://static.interiorteacher.com/general/favicon_white_32.png">
</head>
<body>
        
    <header class="header">
        <div class="home">
            <a href="index.php" style="display: flex;">
            <i class="fa-solid fa-house"></i>
            </a>
        </div>
        <h2 class="title">구매상담 신청</h2>
        <div class="bars">
            <i class="fa-solid fa-bars"></i>
        </div>
    </header>

    <main>
        <div class="container">
            <section class="consult-title">
                <h1>귀하의 상담신청 내역</h1>
                <p>
                    상담 요청을 주시면 업무시간 기준 1시간 내에<br>
                    고객님께 상담전화를 드립니다.
                </p>
                <h2>1010-1010</h2>
            </section>

            <section class="list">
                <div class="list-header">
                    <p class="user-head">
                        <span><b>신청인:</b> <?=$saved_name?></span>
                        <span><b>연락처:</b> <?=$saved_phone?></span>
                    </p>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>상담여부</th>
                            <th>문의사항</th>
                            <th>신청일자</th>
                        </tr>
                    </thead>
                    <tbody>
                        <table>
                            <?=$list?>
                        </table>
                    </tbody>
                </table>
            </section>
        </div>
    </main>

    <footer>
        <div class="footer-container">
            <p>구매상담 신청</p>
            <div>
                <span>Call: 1010-1010</span>
                <span>Address: 인천광역시 부평구 화랑로</span>
                <span>Tel: 010-1111-2222</span><br>
                <span>Company: (주)아이퀘스트</span><br>
                <span>Copyright&copy;HRDKOREA LoremCompany 2024</span>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
    <script src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=YOUR_CLIENT_ID"></script> 

</body>
</html>